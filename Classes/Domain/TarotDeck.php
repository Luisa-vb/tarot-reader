<?php

declare(strict_types=1);

namespace Visionbites\TarotReader\Domain;

/**
 * The complete Tarot deck with all 78 cards and their associated deep life questions.
 * Each card carries multiple questions so the reading feels alive and non-repetitive.
 */
final class TarotDeck
{
    /**
     * Returns all 78 cards of the Tarot deck.
     * Each card has: key, name, arcana, suit (for minor), number, and life questions.
     */
    public static function getCards(): array
    {
        return [
            // ─── MAJOR ARCANA ────────────────────────────────────────────────────
            [
                'key'      => 'the-fool',
                'name'     => 'The Fool',
                'arcana'   => 'major',
                'number'   => 0,
                'symbol'   => '☽',
                'questions' => [
                    'What would you do today if you knew you could not fail — and why are you not already doing it?',
                    'Where in your life have you stopped trusting the unknown, and what has that caution cost you?',
                    'When did you last begin something with no plan at all, and how did it change you?',
                    'What leap of faith have you been postponing, and what story are you telling yourself to justify the wait?',
                ],
            ],
            [
                'key'      => 'the-magician',
                'name'     => 'The Magician',
                'arcana'   => 'major',
                'number'   => 1,
                'symbol'   => '✦',
                'questions' => [
                    'What power do you already possess that you keep pretending you do not have?',
                    'If your will were truly unlimited, which single thing would you create first — and what stops you from starting?',
                    'Where are you waiting for permission that only you can give yourself?',
                    'What skill or gift have you buried under doubt, and what would it cost the world if you kept it hidden?',
                ],
            ],
            [
                'key'      => 'the-high-priestess',
                'name'     => 'The High Priestess',
                'arcana'   => 'major',
                'number'   => 2,
                'symbol'   => '🌙',
                'questions' => [
                    'What does your intuition keep whispering that your logic refuses to hear?',
                    'Which truth about yourself have you been keeping secret even from yourself?',
                    'When you sit in silence, what rises to the surface that you immediately suppress — and why?',
                    'What do you know, deep in your bones, that you have not yet been brave enough to act on?',
                ],
            ],
            [
                'key'      => 'the-empress',
                'name'     => 'The Empress',
                'arcana'   => 'major',
                'number'   => 3,
                'symbol'   => '♀',
                'questions' => [
                    'What in your life are you nurturing out of love — and what are you nurturing out of fear of letting it die?',
                    'Where have you mistaken self-neglect for strength, and what would it mean to finally bloom?',
                    'What would you create if you allowed yourself to be truly, unashamedly abundant?',
                    'How would your relationship with your body change if you treated it as sacred?',
                ],
            ],
            [
                'key'      => 'the-emperor',
                'name'     => 'The Emperor',
                'arcana'   => 'major',
                'number'   => 4,
                'symbol'   => '♂',
                'questions' => [
                    'Where in your life are you ruling through control instead of through strength?',
                    'What structure have you built around yourself that was meant to protect you but is now a prison?',
                    'Who taught you that authority and love cannot coexist — and do you still believe them?',
                    'If you had to take full responsibility for your life today — no excuses, no blame — where would you begin?',
                ],
            ],
            [
                'key'      => 'the-hierophant',
                'name'     => 'The Hierophant',
                'arcana'   => 'major',
                'number'   => 5,
                'symbol'   => '⛪',
                'questions' => [
                    'Which beliefs that were given to you by others have you never truly examined for yourself?',
                    'Where are you conforming to tradition out of genuine conviction — and where out of fear of exclusion?',
                    'What would you believe if you had to build your entire worldview from scratch, starting today?',
                    'Who is the spiritual or moral authority you have outsourced your inner compass to?',
                ],
            ],
            [
                'key'      => 'the-lovers',
                'name'     => 'The Lovers',
                'arcana'   => 'major',
                'number'   => 6,
                'symbol'   => '♡',
                'questions' => [
                    'What choice are you avoiding right now because making it would mean admitting who you truly are?',
                    'Where in your life are you trying to love both options instead of having the courage to choose one?',
                    'What does real intimacy — with another person, with yourself — require of you that you are not yet giving?',
                    'If love required you to be completely known, with nothing hidden, would you still want it?',
                ],
            ],
            [
                'key'      => 'the-chariot',
                'name'     => 'The Chariot',
                'arcana'   => 'major',
                'number'   => 7,
                'symbol'   => '⚔',
                'questions' => [
                    'What opposing forces inside you are pulling in different directions right now — and which one will you let lead?',
                    'Where have you confused busyness with direction, and motion with progress?',
                    'What victory are you pursuing that, once won, you secretly fear will feel empty?',
                    'Who would you be if you stopped fighting and finally committed — fully — to one path?',
                ],
            ],
            [
                'key'      => 'strength',
                'name'     => 'Strength',
                'arcana'   => 'major',
                'number'   => 8,
                'symbol'   => '∞',
                'questions' => [
                    'What beast inside you are you trying to cage — and what would happen if you chose to understand it instead?',
                    'Where are you performing strength for others while quietly falling apart inside?',
                    'What would you do if you were not afraid — not of failure, but of your own capacity?',
                    'Which emotion have you spent the most energy suppressing, and what is it trying to protect you from?',
                ],
            ],
            [
                'key'      => 'the-hermit',
                'name'     => 'The Hermit',
                'arcana'   => 'major',
                'number'   => 9,
                'symbol'   => '🕯',
                'questions' => [
                    'What would you discover about yourself if you spent one month in genuine solitude?',
                    'Are you currently retreating to find yourself — or to hide from others, and do you know the difference?',
                    'What wisdom have you accumulated that you are keeping entirely to yourself, and why?',
                    'Where in your life are you still waiting for someone else to show you the way?',
                ],
            ],
            [
                'key'      => 'wheel-of-fortune',
                'name'     => 'Wheel of Fortune',
                'arcana'   => 'major',
                'number'   => 10,
                'symbol'   => '⊕',
                'questions' => [
                    'What cycle in your life keeps repeating — and what would it take for you to finally step off it?',
                    'Where are you clinging to a chapter that has already ended, and what new story is waiting to begin?',
                    'If fortune turned completely against you tomorrow, what would you discover you truly cannot live without?',
                    'What would change in your life if you accepted that nothing — not even your suffering — is permanent?',
                ],
            ],
            [
                'key'      => 'justice',
                'name'     => 'Justice',
                'arcana'   => 'major',
                'number'   => 11,
                'symbol'   => '⚖',
                'questions' => [
                    'Where in your life are you avoiding accountability by rewriting the story to make yourself the victim?',
                    'What do you owe someone — an apology, a conversation, an act of repair — that you keep postponing?',
                    'Are you living in alignment with your stated values, or have you quietly negotiated them away?',
                    'What would you have to change if you held yourself to the same standard you hold others?',
                ],
            ],
            [
                'key'      => 'the-hanged-man',
                'name'     => 'The Hanged Man',
                'arcana'   => 'major',
                'number'   => 12,
                'symbol'   => '⊻',
                'questions' => [
                    'What would you see differently about your life if you turned your entire perspective upside down?',
                    'Where are you forcing a solution instead of surrendering to the pause that is being asked of you?',
                    'What sacrifice are you being called to make that you keep refusing — and what is that refusal costing you?',
                    'If waiting were not a failure but a form of wisdom, what are you being invited to learn right now?',
                ],
            ],
            [
                'key'      => 'death',
                'name'     => 'Death',
                'arcana'   => 'major',
                'number'   => 13,
                'symbol'   => '⚸',
                'questions' => [
                    'What version of yourself needs to die so that a truer one can be born?',
                    'What are you holding onto so tightly that your grip itself is causing the decay?',
                    'If you knew this chapter of your life was ending in one month, how would you spend it differently?',
                    'What would it feel like to let go of the identity you have built — and who might you become?',
                ],
            ],
            [
                'key'      => 'temperance',
                'name'     => 'Temperance',
                'arcana'   => 'major',
                'number'   => 14,
                'symbol'   => '◈',
                'questions' => [
                    'Where in your life are you living in extremes because the middle ground feels too ordinary?',
                    'What would it mean to truly integrate the parts of yourself you keep trying to separate?',
                    'Where have you mistaken moderation for mediocrity — and what has that cost you?',
                    'What is the one thing you keep doing in excess because it temporarily fills something that feels permanently empty?',
                ],
            ],
            [
                'key'      => 'the-devil',
                'name'     => 'The Devil',
                'arcana'   => 'major',
                'number'   => 15,
                'symbol'   => '⛓',
                'questions' => [
                    'What chain are you wearing that you believe is locked — but that you actually put on yourself?',
                    'Which desire do you refuse to name, and what does the refusal protect you from?',
                    'Where are you enslaved by comfort, and what would freedom actually demand from you?',
                    'What would you have to face about yourself if you gave up your favorite distraction for one month?',
                ],
            ],
            [
                'key'      => 'the-tower',
                'name'     => 'The Tower',
                'arcana'   => 'major',
                'number'   => 16,
                'symbol'   => '⚡',
                'questions' => [
                    'What false certainty in your life is overdue for collapse — and what are you doing to keep it standing?',
                    'What sudden disruption in your past turned out to be the most important gift you ever received?',
                    'Where are you building something on a foundation you know, deep down, cannot hold?',
                    'If everything you thought you knew about yourself were wrong, where would you even begin?',
                ],
            ],
            [
                'key'      => 'the-star',
                'name'     => 'The Star',
                'arcana'   => 'major',
                'number'   => 17,
                'symbol'   => '★',
                'questions' => [
                    'What do you hope for so deeply that you have never said it out loud, afraid that naming it will kill it?',
                    'When did you stop believing that things could genuinely get better — and what would it take to believe again?',
                    'What would you pursue if hope were not a risk but a practice?',
                    'Where in your life have you been so focused on surviving that you forgot to imagine what thriving looks like?',
                ],
            ],
            [
                'key'      => 'the-moon',
                'name'     => 'The Moon',
                'arcana'   => 'major',
                'number'   => 18,
                'symbol'   => '☾',
                'questions' => [
                    'What fear lives so deep in you that you have never once examined it in daylight?',
                    'Where are you navigating your life by illusion — and what would you see if the fog cleared?',
                    'What part of your shadow are you projecting onto others instead of owning in yourself?',
                    'If your unconscious mind sent you a message tonight, what do you think it would say?',
                ],
            ],
            [
                'key'      => 'the-sun',
                'name'     => 'The Sun',
                'arcana'   => 'major',
                'number'   => 19,
                'symbol'   => '☀',
                'questions' => [
                    'When did you last feel purely, uncomplicatedly joyful — and what has changed since then?',
                    'What part of yourself do you hide because you were taught that too much joy is dangerous or selfish?',
                    'Where in your life are you being asked to simply celebrate what is — rather than fix what is not?',
                    'What would you do tomorrow if you were not managing your happiness — but simply living it?',
                ],
            ],
            [
                'key'      => 'judgement',
                'name'     => 'Judgement',
                'arcana'   => 'major',
                'number'   => 20,
                'symbol'   => '☍',
                'questions' => [
                    'What call have you been ignoring — from life, from yourself — because answering it would change everything?',
                    'Where are you still haunted by a version of yourself you have not yet forgiven?',
                    'If this were the moment of reckoning for your entire life so far, what would you wish you had done differently?',
                    'What would you reclaim about yourself if you stopped waiting for someone else to tell you that you are enough?',
                ],
            ],
            [
                'key'      => 'the-world',
                'name'     => 'The World',
                'arcana'   => 'major',
                'number'   => 21,
                'symbol'   => '⊛',
                'questions' => [
                    'What completion are you refusing to acknowledge because you are afraid of what comes after?',
                    'If this chapter of your life truly ended today, what would you say it was for?',
                    'Where in your life have you achieved something significant and immediately minimised it — and why?',
                    'What does wholeness mean to you — not as a concept, but as a felt experience in your body?',
                ],
            ],

            // ─── MINOR ARCANA — WANDS ────────────────────────────────────────────
            [
                'key'      => 'ace-of-wands',
                'name'     => 'Ace of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 1,
                'symbol'   => '🔥',
                'questions' => [
                    'What spark inside you has been waiting for you to stop overthinking and simply ignite it?',
                    'If passion were your only compass, where would it point right now?',
                ],
            ],
            [
                'key'      => 'two-of-wands',
                'name'     => 'Two of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 2,
                'symbol'   => '🔥',
                'questions' => [
                    'You are standing at a crossroads — what horizon are you pretending you cannot see?',
                    'What future self are you too comfortable to become?',
                ],
            ],
            [
                'key'      => 'three-of-wands',
                'name'     => 'Three of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 3,
                'symbol'   => '🔥',
                'questions' => [
                    'What are you waiting to arrive from the horizon when you could already be sailing toward it?',
                    'Where are you confusing watching with preparing, and preparation with action?',
                ],
            ],
            [
                'key'      => 'four-of-wands',
                'name'     => 'Four of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 4,
                'symbol'   => '🔥',
                'questions' => [
                    'What milestone in your life have you never truly celebrated — and why do you keep moving the goalpost?',
                    'What would it feel like to rest inside your achievements instead of immediately reaching for the next one?',
                ],
            ],
            [
                'key'      => 'five-of-wands',
                'name'     => 'Five of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 5,
                'symbol'   => '🔥',
                'questions' => [
                    'Are the conflicts in your life about genuine disagreement — or about the need to prove you exist?',
                    'What would you stop competing for if you no longer needed external validation?',
                ],
            ],
            [
                'key'      => 'six-of-wands',
                'name'     => 'Six of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 6,
                'symbol'   => '🔥',
                'questions' => [
                    'When people applaud you, are they seeing the real you — or a version of yourself you have curated for their approval?',
                    'What would success mean if no one else ever knew about it?',
                ],
            ],
            [
                'key'      => 'seven-of-wands',
                'name'     => 'Seven of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 7,
                'symbol'   => '🔥',
                'questions' => [
                    'What are you defending so fiercely — and is it truly worth the energy that defence is costing you?',
                    'Where are you confusing standing your ground with being unable to move?',
                ],
            ],
            [
                'key'      => 'eight-of-wands',
                'name'     => 'Eight of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 8,
                'symbol'   => '🔥',
                'questions' => [
                    'If everything accelerated right now — if the thing you want arrived tomorrow — are you actually ready?',
                    'Where in your life are you moving fast to avoid feeling?',
                ],
            ],
            [
                'key'      => 'nine-of-wands',
                'name'     => 'Nine of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 9,
                'symbol'   => '🔥',
                'questions' => [
                    'What battle are you still fighting long after the war has ended?',
                    'Where is your vigilance protecting you from something that no longer exists?',
                ],
            ],
            [
                'key'      => 'ten-of-wands',
                'name'     => 'Ten of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 10,
                'symbol'   => '🔥',
                'questions' => [
                    'Which burdens are you carrying that were never yours to carry — and what would it take to set them down?',
                    'Where have you confused suffering with purpose, and martyrdom with meaning?',
                ],
            ],
            [
                'key'      => 'page-of-wands',
                'name'     => 'Page of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 11,
                'symbol'   => '🔥',
                'questions' => [
                    'What enthusiasm in you has been waiting for permission — and from whom are you waiting?',
                    'When did you last begin something purely because it excited you, with no plan beyond the excitement?',
                ],
            ],
            [
                'key'      => 'knight-of-wands',
                'name'     => 'Knight of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 12,
                'symbol'   => '🔥',
                'questions' => [
                    'Are you chasing the goal — or running from the stillness you would have to face if you stopped?',
                    'What would it mean to act with full conviction rather than confident impulsiveness?',
                ],
            ],
            [
                'key'      => 'queen-of-wands',
                'name'     => 'Queen of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 13,
                'symbol'   => '🔥',
                'questions' => [
                    'Where in your life are you dimming your fire to make others more comfortable?',
                    'What would you lead differently if you fully trusted your own vision?',
                ],
            ],
            [
                'key'      => 'king-of-wands',
                'name'     => 'King of Wands',
                'arcana'   => 'minor',
                'suit'     => 'wands',
                'number'   => 14,
                'symbol'   => '🔥',
                'questions' => [
                    'What vision are you capable of holding steady for others — even when your own faith wavers?',
                    'Where have you been a leader in title but not yet in spirit?',
                ],
            ],

            // ─── MINOR ARCANA — CUPS ─────────────────────────────────────────────
            [
                'key'      => 'ace-of-cups',
                'name'     => 'Ace of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 1,
                'symbol'   => '💧',
                'questions' => [
                    'What would you allow yourself to feel if you stopped managing your emotions like a project?',
                    'Where is love trying to enter your life through a door you have closed?',
                ],
            ],
            [
                'key'      => 'two-of-cups',
                'name'     => 'Two of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 2,
                'symbol'   => '💧',
                'questions' => [
                    'What relationship in your life would transform if you chose genuine vulnerability over self-protection?',
                    'Are you in this relationship fully, or are you still keeping an exit route open?',
                ],
            ],
            [
                'key'      => 'three-of-cups',
                'name'     => 'Three of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 3,
                'symbol'   => '💧',
                'questions' => [
                    'Who in your life deserves more celebration from you — and when did you last give it?',
                    'Where is your solitude isolating rather than restoring you?',
                ],
            ],
            [
                'key'      => 'four-of-cups',
                'name'     => 'Four of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 4,
                'symbol'   => '💧',
                'questions' => [
                    'What is being offered to you right now that your boredom or dissatisfaction is making invisible?',
                    'Where is introspection becoming avoidance?',
                ],
            ],
            [
                'key'      => 'five-of-cups',
                'name'     => 'Five of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 5,
                'symbol'   => '💧',
                'questions' => [
                    'What loss are you still grieving that you have not yet allowed yourself to grieve properly?',
                    'Where are you so focused on what was spilled that you cannot see what remains?',
                ],
            ],
            [
                'key'      => 'six-of-cups',
                'name'     => 'Six of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 6,
                'symbol'   => '💧',
                'questions' => [
                    'Are you returning to the past because it was truly good — or because the present feels unbearable?',
                    'What childhood wound is still quietly shaping every major decision you make as an adult?',
                ],
            ],
            [
                'key'      => 'seven-of-cups',
                'name'     => 'Seven of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 7,
                'symbol'   => '💧',
                'questions' => [
                    'How many of your desires are truly yours — and how many were handed to you by someone else\'s idea of a good life?',
                    'Where are you paralyzed by possibility because choosing one thing means losing all the others?',
                ],
            ],
            [
                'key'      => 'eight-of-cups',
                'name'     => 'Eight of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 8,
                'symbol'   => '💧',
                'questions' => [
                    'What are you walking away from that you have not yet fully acknowledged you are leaving behind?',
                    'Where does the courage to leave require more of you than the courage to stay?',
                ],
            ],
            [
                'key'      => 'nine-of-cups',
                'name'     => 'Nine of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 9,
                'symbol'   => '💧',
                'questions' => [
                    'If you got everything you wanted tomorrow, how long before you started wanting something else — and what does that tell you?',
                    'What would true contentment — not happiness, but contentment — actually look like in your daily life?',
                ],
            ],
            [
                'key'      => 'ten-of-cups',
                'name'     => 'Ten of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 10,
                'symbol'   => '💧',
                'questions' => [
                    'What does a truly fulfilling life look like to you — not in theory, but in a single ordinary Tuesday?',
                    'Where are you pursuing an idea of happiness rather than the actual experience of it?',
                ],
            ],
            [
                'key'      => 'page-of-cups',
                'name'     => 'Page of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 11,
                'symbol'   => '💧',
                'questions' => [
                    'What message from your own heart have you been too rational to take seriously?',
                    'When did you last allow yourself to be genuinely, naively moved by something?',
                ],
            ],
            [
                'key'      => 'knight-of-cups',
                'name'     => 'Knight of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 12,
                'symbol'   => '💧',
                'questions' => [
                    'Are you pursuing this dream — or the romantic idea of pursuing it?',
                    'What would you have to stop idealising in order to start truly loving?',
                ],
            ],
            [
                'key'      => 'queen-of-cups',
                'name'     => 'Queen of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 13,
                'symbol'   => '💧',
                'questions' => [
                    'Whose pain are you absorbing as your own — and at what cost to yourself?',
                    'What would it mean to be emotionally generous without becoming emotionally depleted?',
                ],
            ],
            [
                'key'      => 'king-of-cups',
                'name'     => 'King of Cups',
                'arcana'   => 'minor',
                'suit'     => 'cups',
                'number'   => 14,
                'symbol'   => '💧',
                'questions' => [
                    'Where are you being asked to hold space for another person\'s chaos while remaining anchored in your own calm?',
                    'What emotion do you find the hardest to feel — and what do you do instead of feeling it?',
                ],
            ],

            // ─── MINOR ARCANA — SWORDS ───────────────────────────────────────────
            [
                'key'      => 'ace-of-swords',
                'name'     => 'Ace of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 1,
                'symbol'   => '⚔',
                'questions' => [
                    'What truth, if you spoke it clearly today, would change everything?',
                    'Where is your thinking serving your growth — and where is it serving your avoidance?',
                ],
            ],
            [
                'key'      => 'two-of-swords',
                'name'     => 'Two of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 2,
                'symbol'   => '⚔',
                'questions' => [
                    'What decision are you avoiding by keeping the blindfold on?',
                    'What would you choose if you trusted that either path would teach you exactly what you need?',
                ],
            ],
            [
                'key'      => 'three-of-swords',
                'name'     => 'Three of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 3,
                'symbol'   => '⚔',
                'questions' => [
                    'What heartbreak have you intellectualised instead of feeling all the way through?',
                    'What would it mean to let this grief break you open rather than harden you?',
                ],
            ],
            [
                'key'      => 'four-of-swords',
                'name'     => 'Four of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 4,
                'symbol'   => '⚔',
                'questions' => [
                    'What are you refusing to rest from because stopping feels like surrendering?',
                    'What would you hear if you finally gave your mind permission to go quiet?',
                ],
            ],
            [
                'key'      => 'five-of-swords',
                'name'     => 'Five of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 5,
                'symbol'   => '⚔',
                'questions' => [
                    'Is winning this argument worth the relationship it is costing you?',
                    'Where is your need to be right more important to you than the need to be in genuine connection?',
                ],
            ],
            [
                'key'      => 'six-of-swords',
                'name'     => 'Six of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 6,
                'symbol'   => '⚔',
                'questions' => [
                    'What turbulent waters are you moving through right now — and what are you leaving on the shore?',
                    'Where is healing requiring you to move toward something you cannot yet clearly see?',
                ],
            ],
            [
                'key'      => 'seven-of-swords',
                'name'     => 'Seven of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 7,
                'symbol'   => '⚔',
                'questions' => [
                    'What are you taking that does not belong to you — whether credit, energy, space, or someone else\'s story?',
                    'Where are you being clever rather than honest — and what is that cleverness protecting?',
                ],
            ],
            [
                'key'      => 'eight-of-swords',
                'name'     => 'Eight of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 8,
                'symbol'   => '⚔',
                'questions' => [
                    'What prison are you living in that your own mind constructed — and what would you see if you removed the blindfold?',
                    'Who told you that you were trapped — and did you ever actually verify that the cage was real?',
                ],
            ],
            [
                'key'      => 'nine-of-swords',
                'name'     => 'Nine of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 9,
                'symbol'   => '⚔',
                'questions' => [
                    'What wakes you up at 3am — and is it a real problem or a real fear disguised as one?',
                    'How much of your suffering exists in your mind before it has happened in your life?',
                ],
            ],
            [
                'key'      => 'ten-of-swords',
                'name'     => 'Ten of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 10,
                'symbol'   => '⚔',
                'questions' => [
                    'What has ended in your life that you are still refusing to let be over?',
                    'What would rise from the ruins of this — if you stopped trying to put the ruins back together?',
                ],
            ],
            [
                'key'      => 'page-of-swords',
                'name'     => 'Page of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 11,
                'symbol'   => '⚔',
                'questions' => [
                    'What question have you been afraid to ask — and who are you protecting by not asking it?',
                    'Where is your curiosity leading you somewhere your fear does not want to go?',
                ],
            ],
            [
                'key'      => 'knight-of-swords',
                'name'     => 'Knight of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 12,
                'symbol'   => '⚔',
                'questions' => [
                    'Are you charging toward truth — or toward the argument that proves you were right?',
                    'What would slow down and actually being present reveal to you that speed and action are hiding?',
                ],
            ],
            [
                'key'      => 'queen-of-swords',
                'name'     => 'Queen of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 13,
                'symbol'   => '⚔',
                'questions' => [
                    'Where is your clarity a gift to others — and where is it a weapon you use against yourself?',
                    'What would you see clearly about your life if you removed every sentimental distortion from your view?',
                ],
            ],
            [
                'key'      => 'king-of-swords',
                'name'     => 'King of Swords',
                'arcana'   => 'minor',
                'suit'     => 'swords',
                'number'   => 14,
                'symbol'   => '⚔',
                'questions' => [
                    'Where has your intellect become a barrier to your wisdom?',
                    'What would you decide if you were guided by both complete clarity and complete compassion at once?',
                ],
            ],

            // ─── MINOR ARCANA — PENTACLES ─────────────────────────────────────────
            [
                'key'      => 'ace-of-pentacles',
                'name'     => 'Ace of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 1,
                'symbol'   => '◉',
                'questions' => [
                    'What seed are you being asked to plant right now — and do you trust the soil of your own life?',
                    'What material or physical reality are you neglecting in favour of ideals that live only in your head?',
                ],
            ],
            [
                'key'      => 'two-of-pentacles',
                'name'     => 'Two of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 2,
                'symbol'   => '◉',
                'questions' => [
                    'What would you stop juggling if you admitted that you are only keeping all these balls in the air to feel needed?',
                    'Where in your life is balance a disguise for never fully committing to anything?',
                ],
            ],
            [
                'key'      => 'three-of-pentacles',
                'name'     => 'Three of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 3,
                'symbol'   => '◉',
                'questions' => [
                    'What would you be capable of building if you were willing to let others contribute rather than doing it all alone?',
                    'Where is your independence actually a fear of being seen to need anyone?',
                ],
            ],
            [
                'key'      => 'four-of-pentacles',
                'name'     => 'Four of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 4,
                'symbol'   => '◉',
                'questions' => [
                    'What are you hoarding — money, energy, love, praise — out of a scarcity that no longer exists?',
                    'What would you give away if you truly believed there was enough?',
                ],
            ],
            [
                'key'      => 'five-of-pentacles',
                'name'     => 'Five of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 5,
                'symbol'   => '◉',
                'questions' => [
                    'Are you standing outside in the cold because there is truly no door open — or because you are afraid to knock?',
                    'What would it cost your pride to ask for the help you genuinely need?',
                ],
            ],
            [
                'key'      => 'six-of-pentacles',
                'name'     => 'Six of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 6,
                'symbol'   => '◉',
                'questions' => [
                    'In your giving, are you offering what others need — or what makes you feel powerful to give?',
                    'Where does your generosity come from abundance — and where does it come from the need to be needed?',
                ],
            ],
            [
                'key'      => 'seven-of-pentacles',
                'name'     => 'Seven of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 7,
                'symbol'   => '◉',
                'questions' => [
                    'Are you investing your time in things that will grow — or in things that simply feel familiar and safe?',
                    'What long-term harvest are you sacrificing for short-term comfort?',
                ],
            ],
            [
                'key'      => 'eight-of-pentacles',
                'name'     => 'Eight of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 8,
                'symbol'   => '◉',
                'questions' => [
                    'What craft — in life, in relationship, in work — are you not yet willing to practise badly enough to become good?',
                    'Where are you waiting to feel ready instead of getting better through doing?',
                ],
            ],
            [
                'key'      => 'nine-of-pentacles',
                'name'     => 'Nine of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 9,
                'symbol'   => '◉',
                'questions' => [
                    'What have you built with your own hands and mind that you have never allowed yourself to fully enjoy?',
                    'Where is your independence isolating rather than liberating you?',
                ],
            ],
            [
                'key'      => 'ten-of-pentacles',
                'name'     => 'Ten of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 10,
                'symbol'   => '◉',
                'questions' => [
                    'What legacy are you building — not in grand gestures, but in the small things you do every single day?',
                    'What would you want the people who love you most to say about how you lived?',
                ],
            ],
            [
                'key'      => 'page-of-pentacles',
                'name'     => 'Page of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 11,
                'symbol'   => '◉',
                'questions' => [
                    'What new skill or discipline would change your life — if you were willing to be a complete beginner at it?',
                    'Where is your perfectionism preventing you from starting?',
                ],
            ],
            [
                'key'      => 'knight-of-pentacles',
                'name'     => 'Knight of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 12,
                'symbol'   => '◉',
                'questions' => [
                    'Are you being diligent — or are you using diligence as a reason to never take a risk?',
                    'What would change in your life if slow and steady were replaced, just once, by bold and immediate?',
                ],
            ],
            [
                'key'      => 'queen-of-pentacles',
                'name'     => 'Queen of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 13,
                'symbol'   => '◉',
                'questions' => [
                    'What would it mean to care for your body, your home, and your finances as sacred rather than as obligations?',
                    'Where is your practicality a gift — and where is it a wall against anything that cannot be measured?',
                ],
            ],
            [
                'key'      => 'king-of-pentacles',
                'name'     => 'King of Pentacles',
                'arcana'   => 'minor',
                'suit'     => 'pentacles',
                'number'   => 14,
                'symbol'   => '◉',
                'questions' => [
                    'What does true security feel like to you — and has accumulating more of it ever actually produced that feeling?',
                    'What would you do with your resources if their purpose were not security but generativity?',
                ],
            ],
        ];
    }

    /**
     * Pick a random card from the deck.
     */
    public static function drawRandom(): array
    {
        $cards = self::getCards();
        $card  = $cards[array_rand($cards)];

        // Pick one random question from the card's pool
        $card['question'] = $card['questions'][array_rand($card['questions'])];

        return $card;
    }

    /**
     * Returns a card by its key.
     */
    public static function getByKey(string $key): ?array
    {
        foreach (self::getCards() as $card) {
            if ($card['key'] === $key) {
                $card['question'] = $card['questions'][array_rand($card['questions'])];
                return $card;
            }
        }
        return null;
    }
}
