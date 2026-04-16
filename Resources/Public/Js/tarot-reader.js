/**
 * Tarot Reader — TYPO3 Backend Module JS
 * Handles: particle ambience, card draw via AJAX, flip animation, question reveal
 */
(function () {
    'use strict';

    /* ── Particle System ─────────────────────────────────────────────────────── */
    const ParticleField = {
        canvas: null,
        ctx: null,
        particles: [],
        raf: null,

        init(canvas) {
            this.canvas = canvas;
            this.ctx = canvas.getContext('2d');
            this.resize();
            this.spawn();
            this.loop();
            window.addEventListener('resize', () => this.resize());
        },

        resize() {
            this.canvas.width  = window.innerWidth;
            this.canvas.height = window.innerHeight;
        },

        spawn() {
            const count = Math.floor((this.canvas.width * this.canvas.height) / 18000);
            for (let i = 0; i < count; i++) {
                this.particles.push(this.makeParticle());
            }
        },

        makeParticle(born = false) {
            return {
                x:    Math.random() * (this.canvas ? this.canvas.width : 800),
                y:    born ? (this.canvas ? this.canvas.height + 10 : 900) : Math.random() * (this.canvas ? this.canvas.height : 600),
                size: Math.random() * 1.4 + 0.3,
                vx:   (Math.random() - 0.5) * 0.15,
                vy:   -(Math.random() * 0.4 + 0.1),
                life: Math.random(),
                maxLife: Math.random() * 0.6 + 0.4,
                hue:  Math.random() * 30 + 38,   // amber-gold range
            };
        },

        loop() {
            this.raf = requestAnimationFrame(() => this.loop());
            const { ctx, canvas, particles } = this;
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            for (let i = particles.length - 1; i >= 0; i--) {
                const p = particles[i];
                p.x   += p.vx;
                p.y   += p.vy;
                p.life -= 0.0015;

                if (p.life <= 0 || p.y < -10) {
                    particles[i] = this.makeParticle(true);
                    continue;
                }

                const alpha = Math.min(p.life / p.maxLife, 1) * 0.6;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                ctx.fillStyle = `hsla(${p.hue}, 70%, 65%, ${alpha})`;
                ctx.fill();
            }
        },

        destroy() {
            cancelAnimationFrame(this.raf);
        },
    };

    /* ── DOM refs ────────────────────────────────────────────────────────────── */
    const $  = (id) => document.getElementById(id);
    const deck         = $('tarotDeck');
    const drawBtn      = $('tarotDrawBtn');
    const tarotCard    = $('tarotCard');
    const cardName     = $('cardName');
    const cardArcana   = $('cardArcana');
    const cardSymbol   = $('cardSymbol');
    const cardNumber   = $('cardNumber');
    const questionText = $('tarotQuestionText');
    const canvas       = $('tarotParticles');

    /* ── State ───────────────────────────────────────────────────────────────── */
    let isLoading = false;

    /* ── Helpers ─────────────────────────────────────────────────────────────── */
    function setLoading(val) {
        isLoading = val;
        drawBtn.classList.toggle('is-loading', val);
        deck.style.pointerEvents = val ? 'none' : '';
    }

    function updateCard(card) {
        // Flip animation mid-way updates the content
        tarotCard.classList.add('is-flipping');

        setTimeout(() => {
            // Update card face content at the 50% flip point
            cardName.textContent   = card.name;
            cardSymbol.textContent = card.symbol || '✦';
            cardNumber.textContent = card.arcana === 'major' ? card.number : '·';
            cardArcana.textContent = card.arcana === 'major'
                ? 'Major Arcana'
                : (card.suit ? card.suit.charAt(0).toUpperCase() + card.suit.slice(1) + ' · Minor Arcana' : 'Minor Arcana');
        }, 400); // half of 800ms flip

        setTimeout(() => {
            tarotCard.classList.remove('is-flipping');
        }, 850);
    }

    function updateQuestion(question) {
        questionText.classList.add('is-changing');
        setTimeout(() => {
            questionText.textContent = question;
            questionText.classList.remove('is-changing');
        }, 400);
    }

    function addArrivalAnimation() {
        tarotCard.classList.remove('is-arriving');
        void tarotCard.offsetWidth; // reflow
        tarotCard.classList.add('is-arriving');
        tarotCard.addEventListener('animationend', () => {
            tarotCard.classList.remove('is-arriving');
        }, { once: true });
    }

    /* ── AJAX Draw ───────────────────────────────────────────────────────────── */
    async function drawCard() {
        if (isLoading) return;
        setLoading(true);

        // Deck animation: pop the top card
        deck.classList.add('is-drawing');

        try {
            const url = window.tarotDrawUrl || '';
            if (!url) {
                console.warn('[TarotReader] No draw URL configured (window.tarotDrawUrl).');
                return;
            }

            const response = await fetch(url, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
            });

            if (!response.ok) throw new Error(`HTTP ${response.status}`);
            const data = await response.json();

            if (data.success && data.card) {
                updateCard(data.card);
                updateQuestion(data.card.question || '');
                addArrivalAnimation();
            }
        } catch (err) {
            console.error('[TarotReader] Failed to draw card:', err);
        } finally {
            deck.classList.remove('is-drawing');
            setLoading(false);
        }
    }

    /* ── Event listeners ─────────────────────────────────────────────────────── */
    if (deck) {
        deck.addEventListener('click', drawCard);
        deck.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                drawCard();
            }
        });
    }

    if (drawBtn) {
        drawBtn.addEventListener('click', drawCard);
    }

    /* ── Boot ────────────────────────────────────────────────────────────────── */
    if (canvas) {
        ParticleField.init(canvas);
    }

    // Animate the initial card on load
    if (tarotCard) {
        addArrivalAnimation();
    }

    // Cleanup on page unload (SPA navigation in BE)
    window.addEventListener('beforeunload', () => {
        ParticleField.destroy();
    });

}());
