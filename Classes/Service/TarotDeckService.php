<?php

declare(strict_types=1);

namespace Visionbites\TarotReader\Service;

use Visionbites\TarotReader\Domain\Model\TarotCard;

/**
 * Provides the full 78-card Tarot deck with deep life questions.
 * Each card carries multiple questions — one is chosen at random during a reading.
 */
final class TarotDeckService
{
    /**
     * Draw a random card from the full deck.
     * Cards can appear reversed (30% chance) for added depth.
     */
    public function drawCard(): TarotCard
    {
        $deck = $this->buildDeck();
        $card = $deck[array_rand($deck)];
        $reversed = (random_int(1, 10) <= 3); // 30% reversed
        return $card->withReversed($reversed);
    }

    /**
     * Get all 78 cards (for a full deck display if needed).
     */
    public function getDeck(): array
    {
        return $this->buildDeck();
    }

    private function buildDeck(): array
    {
        return $this->getMajorArcana();
    }

    private function getMajorArcana(): array
    {
        return [
            new TarotCard(0, 'The Fool', 'Major', 'none', 'Beginnings, Innocence, Spontaneity', [
                'What would you do today if you truly believed you could not fail?',
                'Where in your life are you holding back out of fear of looking foolish?',
                'What leap of faith have you been postponing, and what would it mean to take it right now?',
                'If you had no history and no future, just this exact moment — what would you choose?',
                'Identify one situation at work where you hesitate — write down what specifically scares you and what the first small step could be.',
            ], 'A young figure steps off a cliff, eyes skyward, unburdened.'),

            new TarotCard(1, 'The Magician', 'Major', 'none', 'Willpower, Skill, Manifestation', [
                'What tools do you already possess that you are choosing not to use?',
                'Where are you waiting for permission that only you can give yourself?',
                'What is the difference between who you are and who you know you could be?',
                'If your thoughts were blueprints, what would they be building right now?',
                'List three skills you are currently underusing and describe one way to apply one of them this week.',
            ], 'A figure channels all four elements through focused will.'),

            new TarotCard(2, 'The High Priestess', 'Major', 'none', 'Intuition, Mystery, Inner Knowledge', [
                'What does your body know that your mind refuses to accept?',
                'Which truth are you avoiding by demanding more evidence?',
                'When did you last sit in complete silence long enough to hear yourself think?',
                'What are you not saying — even to yourself?',
                'Write down a gut feeling you have about your work situation and explore why you might be ignoring it.',
            ], 'A veiled figure guards the threshold between conscious and unconscious.'),

            new TarotCard(3, 'The Empress', 'Major', 'none', 'Abundance, Fertility, Nurturing', [
                'In what ways have you stopped nurturing the things that matter most to you?',
                'What would bloom in your life if you gave it as much care as you give your worries?',
                'Are you allowing yourself to receive as freely as you give?',
                'What does true abundance feel like to you — and how far are you from it?',
                'Reflect on where you feel drained — then note one way you could bring more support, creativity, or care into that area.',
            ], 'A lush figure seated in nature, crown of stars, surrounded by growth.'),

            new TarotCard(4, 'The Emperor', 'Major', 'none', 'Authority, Structure, Stability', [
                'What areas of your life are crumbling because you have refused to lead yourself?',
                'Where do you confuse control with security?',
                'What would it look like to take complete, unflinching responsibility for your life?',
                'Who taught you what authority means — and do you still believe them?',
                'Identify one area in your work that feels chaotic and define one concrete structure or boundary you could set.',
            ], 'A rigid figure on a stone throne, commanding the world through order.'),

            new TarotCard(5, 'The Hierophant', 'Major', 'none', 'Tradition, Conformity, Belief', [
                'Which of your beliefs were handed to you, and which have you truly chosen?',
                'What would you stop doing tomorrow if you stopped caring what others thought?',
                'Is the path you are on yours — or someone else\'s idea of what your path should be?',
                'What institution, tradition, or rule are you following out of habit rather than conviction?',
                'Write down one belief you hold about "how work should be" and question whether it actually serves you.',
            ], 'A religious figure sits between two pillars, passing doctrine to kneeling figures.'),

            new TarotCard(6, 'The Lovers', 'Major', 'none', 'Love, Harmony, Choice', [
                'What are you choosing when you refuse to choose?',
                'If love were a mirror, what would it be showing you about yourself right now?',
                'What relationship in your life are you maintaining out of fear rather than love?',
                'What would you have to give up to fully commit to what you love most?',
                'Think about a recent decision — write down what you truly wanted versus what you felt expected to do.',
            ], 'Two figures stand beneath an angel, a choice of paths before them.'),

            new TarotCard(7, 'The Chariot', 'Major', 'none', 'Control, Willpower, Victory', [
                'What opposing forces within you are pulling in different directions — and how are you steering?',
                'What have you been fighting for so long you forgot why you started?',
                'Where are you using sheer willpower to avoid feeling something important?',
                'What would victory actually feel like — and would it be enough?',
                'List your current tasks and identify which one actually moves you forward — focus on why.',
            ], 'A warrior rides a chariot pulled by two sphinxes of opposing natures.'),

            new TarotCard(8, 'Strength', 'Major', 'none', 'Courage, Patience, Inner Power', [
                'What fear are you calling weakness that might actually be wisdom?',
                'Where is your greatest strength hiding because you are afraid to need it?',
                'What would you do differently if you knew you were braver than you think?',
                'What wild part of you are you taming — and should it be tamed at all?',
                'Recall a recent challenge and reflect on how you reacted — then write how you could respond more calmly next time.',
            ], 'A gentle figure holds open the mouth of a lion without force.'),

            new TarotCard(9, 'The Hermit', 'Major', 'none', 'Solitude, Introspection, Guidance', [
                'What truth have you been running from that only solitude can reveal?',
                'What would you find if you stopped being available to everyone else for a day?',
                'Who are you when no one is watching — and is that person someone you respect?',
                'What is the lantern you are carrying for others that you forget to use for yourself?',
                'Step back and write what direction your work is currently taking — and whether that feels intentional.',
            ], 'A cloaked elder stands alone on a mountain, lantern illuminating a single step.'),

            new TarotCard(10, 'Wheel of Fortune', 'Major', 'none', 'Change, Cycles, Fate', [
                'What cycle in your life keeps repeating — and what is your part in it?',
                'How would you live differently if you truly accepted that nothing lasts?',
                'Are you clinging to a chapter that has already ended?',
                'What would change if you stopped trying to control what was never yours to control?',
                'Describe a recent change at work and write how you reacted — then explore one more adaptive response.',
            ], 'A great wheel turns, creatures ascending and descending endlessly.'),

            new TarotCard(11, 'Justice', 'Major', 'none', 'Truth, Fairness, Law', [
                'What truth are you unwilling to face about a situation in your life?',
                'Where are you holding someone to a standard you do not hold yourself to?',
                'What decision have you been avoiding because you already know the right answer?',
                'What would you need to forgive in yourself before you could forgive someone else?',
                'Reflect on a recent situation where you made a decision — evaluate whether it was fair to all sides.',
            ], 'A blindfolded figure holds scales and sword in perfect balance.'),

            new TarotCard(12, 'The Hanged Man', 'Major', 'none', 'Suspension, Sacrifice, New Perspective', [
                'What would you see if you looked at your biggest problem from exactly the opposite angle?',
                'What are you refusing to let go of that is keeping you suspended?',
                'What sacrifice has been asked of you that you keep refusing to make?',
                'Is your current stillness a gift or a prison — and who decided which?',
                'Take a current problem and write it down from a completely different perspective (e.g. your boss, colleague, or future self).',
            ], 'A figure hangs willingly upside-down from a tree, face serene.'),

            new TarotCard(13, 'Death', 'Major', 'none', 'Endings, Transformation, Transition', [
                'What version of yourself needs to die so a truer one can live?',
                'What are you still carrying that ended years ago?',
                'What would become possible if you stopped being afraid of endings?',
                'What identity are you protecting that no longer fits who you are becoming?',
                'Identify one habit, task, or mindset that no longer serves you — and write what letting it go would look like.',
            ], 'A skeletal figure rides forward; a sun rises between two towers in the distance.'),

            new TarotCard(14, 'Temperance', 'Major', 'none', 'Balance, Patience, Moderation', [
                'What in your life is out of balance — and what are you pretending you do not notice?',
                'Where are you rushing something that needs time to mature?',
                'What would heal in your life if you approached it with patience instead of force?',
                'What are you consuming more of than is serving you?',
                'Review your last few workdays and note where you were out of balance — then define one adjustment.',
            ], 'An angel pours water between cups, one foot on land, one in water.'),

            new TarotCard(15, 'The Devil', 'Major', 'none', 'Bondage, Addiction, Shadow', [
                'What are you addicted to that you are pretending is not an addiction?',
                'What shadow part of yourself are you projecting onto someone else?',
                'What chains are you wearing that you have the key to — but keep choosing not to use?',
                'What pleasure are you chasing that is costing you something precious?',
                'Write down one pattern you feel stuck in at work and explore what keeps you attached to it.',
            ], 'A horned figure looms over two chained beings who could free themselves.'),

            new TarotCard(16, 'The Tower', 'Major', 'none', 'Chaos, Revelation, Awakening', [
                'What structure in your life was built on a foundation that was never stable?',
                'What collapse in your life was actually a liberation in disguise?',
                'What would you build differently if the thing you feared losing was already gone?',
                'What truth, if you finally spoke it, might feel like lightning?',
                'Think about something unstable or frustrating — write what truth might be revealed if it broke down completely.',
            ], 'A lightning bolt strikes a tall tower; figures fall, crowns tumble.'),

            new TarotCard(17, 'The Star', 'Major', 'none', 'Hope, Inspiration, Serenity', [
                'What do you hope for that you have been too afraid to hope for out loud?',
                'What would you do if you believed, just for today, that things were going to be okay?',
                'When did you stop believing in something beautiful about the future?',
                'What guides you when everything else has gone dark?',
                'Reflect on a moment when you felt motivated or inspired — write what exactly created that feeling.',
            ], 'A nude figure pours water under a vast starlit sky, serene and unguarded.'),

            new TarotCard(18, 'The Moon', 'Major', 'none', 'Illusion, Fear, Subconscious', [
                'What fear are you navigating in the dark that would dissolve in full light?',
                'What are you seeing that you are unsure is real — and what would it mean if it were?',
                'What dream, recurring image, or gut feeling have you been dismissing?',
                'What part of yourself do you only allow out at night?',
                'Identify a situation that feels unclear — list what you know for sure vs. what you are assuming.',
            ], 'A moon illuminates a path between two towers; a lobster emerges from dark water.'),

            new TarotCard(19, 'The Sun', 'Major', 'none', 'Joy, Success, Vitality', [
                'When did you last feel purely, unconditionally joyful — and what was different then?',
                'What would you do today if you were not managing your happiness, but simply living it?',
                'What part of yourself do you hide because it feels too bright, too much, too alive?',
                'If your life were a garden in full bloom, what would be growing?',
                'Write down one thing you did well recently — and reflect on why you might not fully acknowledge it.',
            ], 'A radiant sun shines above a child riding freely, arms open.'),

            new TarotCard(20, 'Judgement', 'Major', 'none', 'Reflection, Reckoning, Awakening', [
                'What would you do differently if you knew this was your second chance?',
                'What call have you been hearing for years that you keep not answering?',
                'What would you need to forgive — in yourself or others — to finally feel free?',
                'If your life were evaluated not by what you achieved but by how fully you lived — how would it look?',
                'Think about an opportunity or inner push you\'ve been ignoring — write what responding to it would require.',
            ], 'An angel blows a horn; figures rise from their coffins toward the light.'),

            new TarotCard(21, 'The World', 'Major', 'none', 'Completion, Integration, Wholeness', [
                'What would it feel like to be exactly where you are supposed to be?',
                'What chapter of your life is complete — and are you allowing yourself to celebrate it?',
                'What does wholeness feel like to you — and how close are you?',
                'What have you been seeking outside yourself that was already inside you?',
                'List something you\'ve completed or achieved — and reflect on what you\'ve learned from it before moving on.',
            ], 'A dancing figure inside a laurel wreath, four elements surrounding in harmony.'),
        ];
    }

    private function getWands(): array
    {
        return [
            new TarotCard(22, 'Ace of Wands', 'Minor', 'Wands', 'Inspiration, New energy, Potential', [
                'What spark of inspiration are you letting flicker out before you act on it?',
                'What would you start today if you had all the energy in the world?',
            ], 'A single wand bursts with new leaves, held aloft from a cloud.'),
            new TarotCard(23, 'Two of Wands', 'Minor', 'Wands', 'Planning, Future vision, Discovery', [
                'What future are you planning for — and do you actually want it?',
                'What horizon are you staring at instead of walking toward?',
            ], 'A figure holds the world in one hand, gazing at two wands on a battlement.'),
            new TarotCard(24, 'Three of Wands', 'Minor', 'Wands', 'Expansion, Foresight, Overseas opportunity', [
                'What has already launched in your life that you have not allowed yourself to celebrate?',
                'Where are your efforts already bearing fruit that you are too impatient to see?',
            ], 'A figure watches ships sail toward the horizon, wands behind them.'),
            new TarotCard(25, 'Four of Wands', 'Minor', 'Wands', 'Celebration, Harmony, Community', [
                'What milestone in your life have you moved past without pausing to mark it?',
                'Where do you belong — and are you actually allowing yourself to belong there?',
            ], 'Four wands form a canopy beneath which figures celebrate.'),
            new TarotCard(26, 'Five of Wands', 'Minor', 'Wands', 'Conflict, Competition, Tension', [
                'What fight are you engaged in that is actually a fight with yourself?',
                'What would happen if you stopped competing and started collaborating?',
            ], 'Five figures clash with wands in apparent conflict, but none are wounded.'),
            new TarotCard(27, 'Six of Wands', 'Minor', 'Wands', 'Victory, Recognition, Confidence', [
                'What victory are you minimizing because you were taught not to take up too much space?',
                'Whose approval are you still waiting for — and do you still believe they can give it to you?',
            ], 'A rider crowned with laurel leads a crowd, wand held high.'),
            new TarotCard(28, 'Seven of Wands', 'Minor', 'Wands', 'Perseverance, Defensiveness, Standing ground', [
                'What are you defending that is worth defending — and what are you defending out of habit?',
                'When does standing your ground become an excuse to never move?',
            ], 'A figure on high ground fends off six wands from below.'),
            new TarotCard(29, 'Eight of Wands', 'Minor', 'Wands', 'Speed, Action, Air travel', [
                'What have you been overthinking that simply needs to be released into motion?',
                'What would move in your life if you stopped waiting for the perfect moment?',
            ], 'Eight wands fly through clear air, direct and purposeful.'),
            new TarotCard(30, 'Nine of Wands', 'Minor', 'Wands', 'Resilience, Persistence, Last push', [
                'What would it mean to keep going one more time, even though you are tired?',
                'What wound are you protecting that is actually limiting your range of motion?',
            ], 'A weary figure leans on a wand, eight more behind them.'),
            new TarotCard(31, 'Ten of Wands', 'Minor', 'Wands', 'Burden, Overwork, Duty', [
                'What are you carrying that is not yours to carry?',
                'What would you put down if you gave yourself permission to put it down?',
            ], 'A bent figure struggles toward a village under the weight of ten wands.'),
            new TarotCard(32, 'Page of Wands', 'Minor', 'Wands', 'Enthusiasm, Adventure, Free spirit', [
                'What adventure are you too old to believe in — and what would happen if you believed in it anyway?',
                'What message is trying to reach you right now?',
            ], 'A young figure holds a wand and stares into the distance with curiosity.'),
            new TarotCard(33, 'Knight of Wands', 'Minor', 'Wands', 'Energy, Passion, Action', [
                'What are you charging toward — and have you checked whether it is actually where you want to go?',
                'Where is your passion outrunning your wisdom?',
            ], 'An armored knight charges forward on a rearing horse, wand held high.'),
            new TarotCard(34, 'Queen of Wands', 'Minor', 'Wands', 'Courage, Determination, Charisma', [
                'What would you claim as your own if you were not afraid of seeming arrogant?',
                'How would you lead differently if you trusted your own fire completely?',
            ], 'A confident queen sits with a sunflower, black cat at her feet.'),
            new TarotCard(35, 'King of Wands', 'Minor', 'Wands', 'Leadership, Vision, Boldness', [
                'What vision are you holding back because you are waiting for others to believe in it first?',
                'What kind of leader would you be if you led from exactly who you are?',
            ], 'A king enthroned in fire and salamanders, commanding but not controlling.'),
        ];
    }

    private function getCups(): array
    {
        return [
            new TarotCard(36, 'Ace of Cups', 'Minor', 'Cups', 'New love, Compassion, Creativity', [
                'What would you love unconditionally if you were not afraid of being hurt?',
                'Where are you withholding compassion — from others or from yourself?',
            ], 'A cup overflows with water, a dove descends into it.'),
            new TarotCard(37, 'Two of Cups', 'Minor', 'Cups', 'Partnership, Attraction, Union', [
                'What relationship in your life is asking for more honesty than you are giving it?',
                'What do you need in a relationship that you have never asked for?',
            ], 'Two figures exchange cups in a gesture of mutual recognition.'),
            new TarotCard(38, 'Three of Cups', 'Minor', 'Cups', 'Friendship, Celebration, Reunion', [
                'Who nourishes you — and when did you last let them?',
                'What would you celebrate if you decided your current life was worth celebrating?',
            ], 'Three figures dance together in a circle, cups raised.'),
            new TarotCard(39, 'Four of Cups', 'Minor', 'Cups', 'Apathy, Contemplation, Boredom', [
                'What gift is being offered to you right now that you are too distracted to see?',
                'What would become interesting if you stopped waiting for life to interest you?',
            ], 'A figure sits under a tree, arms crossed, ignoring a cup offered from a cloud.'),
            new TarotCard(40, 'Five of Cups', 'Minor', 'Cups', 'Loss, Grief, Disappointment', [
                'What loss are you still not allowing yourself to grieve?',
                'What is still standing behind you that you cannot see because you are focused on what was spilled?',
            ], 'A cloaked figure stares at three spilled cups; two still stand behind them.'),
            new TarotCard(41, 'Six of Cups', 'Minor', 'Cups', 'Nostalgia, Memories, Innocence', [
                'What from your past are you romanticizing that was actually painful to live through?',
                'What innocent part of yourself did you leave behind — and would it be safe to reclaim it?',
            ], 'A child offers flowers to another in a garden of the past.'),
            new TarotCard(42, 'Seven of Cups', 'Minor', 'Cups', 'Illusion, Fantasy, Choices', [
                'Which of your options is a genuine path forward — and which are comfortable fantasies?',
                'What are you imagining about your life that is more real to you than your actual life?',
            ], 'Cups filled with visions float in clouds before a dazzled figure.'),
            new TarotCard(43, 'Eight of Cups', 'Minor', 'Cups', 'Abandonment, Walking away, Seeking meaning', [
                'What would you walk away from if you were brave enough to admit it is no longer enough?',
                'What are you seeking that you know cannot be found where you are currently looking?',
            ], 'A figure walks away by moonlight, leaving eight neatly stacked cups.'),
            new TarotCard(44, 'Nine of Cups', 'Minor', 'Cups', 'Satisfaction, Wishes fulfilled, Contentment', [
                'If you got exactly what you wished for, what would you wish for next?',
                'What does satisfaction feel like to you — and are you allowing yourself to feel it?',
            ], 'A satisfied figure sits before nine cups arranged like trophies.'),
            new TarotCard(45, 'Ten of Cups', 'Minor', 'Cups', 'Harmony, Happiness, Family', [
                'What would it feel like to let yourself be this happy without waiting for the other shoe to drop?',
                'What version of home — internal or external — are you still searching for?',
            ], 'A family celebrates under a rainbow of cups; a house in the distance.'),
            new TarotCard(46, 'Page of Cups', 'Minor', 'Cups', 'Creativity, Intuition, Sensitivity', [
                'What creative impulse have you been intellectualizing instead of simply expressing?',
                'What message from your deeper self are you too busy to receive?',
            ], 'A young figure is surprised by a fish leaping from their cup.'),
            new TarotCard(47, 'Knight of Cups', 'Minor', 'Cups', 'Romance, Idealism, Following the heart', [
                'Where is your heart pointing — and what is your head doing to override it?',
                'What are you pursuing because it is beautiful, even if it is not practical?',
            ], 'A knight in calm armor rides slowly, offering a cup with quiet purpose.'),
            new TarotCard(48, 'Queen of Cups', 'Minor', 'Cups', 'Compassion, Intuition, Emotional maturity', [
                'What emotion are you carrying for someone else that they need to carry for themselves?',
                'How well do you actually listen — to others, and to yourself?',
            ], 'A queen holds an ornate cup aloft, the sea calm around her.'),
            new TarotCard(49, 'King of Cups', 'Minor', 'Cups', 'Emotional balance, Diplomacy, Wisdom', [
                'What emotion are you managing so tightly that you have stopped being able to feel it?',
                'What would you say to someone you love if you spoke from both wisdom and vulnerability at once?',
            ], 'A king on a stone amid turbulent seas holds his cup with steady grace.'),
        ];
    }

    private function getSwords(): array
    {
        return [
            new TarotCard(50, 'Ace of Swords', 'Minor', 'Swords', 'Truth, Clarity, Breakthrough', [
                'What truth, if you finally spoke it, would cut through everything?',
                'What illusion is ready to be severed so reality can enter?',
            ], 'A sword rises from a cloud crowned with laurel.'),
            new TarotCard(51, 'Two of Swords', 'Minor', 'Swords', 'Indecision, Blocked information, Stalemate', [
                'What decision are you holding at sword\'s length that you already know the answer to?',
                'What would you see if you put down both swords and removed the blindfold?',
            ], 'A blindfolded figure holds two crossed swords before a crescent sea.'),
            new TarotCard(52, 'Three of Swords', 'Minor', 'Swords', 'Grief, Heartbreak, Sorrow', [
                'What heartbreak are you still carrying as if it just happened?',
                'What pain, if you allowed yourself to fully feel it, might finally begin to heal?',
            ], 'Three swords pierce a floating heart above stormy clouds.'),
            new TarotCard(53, 'Four of Swords', 'Minor', 'Swords', 'Rest, Recovery, Contemplation', [
                'What part of you is desperately in need of rest that you keep refusing to give?',
                'What would become clear if you stopped fighting for long enough to listen?',
            ], 'A knight lies in effigy under a stained glass window, at rest.'),
            new TarotCard(54, 'Five of Swords', 'Minor', 'Swords', 'Conflict, Defeat, Hollow victory', [
                'What have you won that cost you more than it was worth?',
                'What would it take to end a conflict that everyone involved is tired of?',
            ], 'A smirking figure gathers swords while others walk away in defeat.'),
            new TarotCard(55, 'Six of Swords', 'Minor', 'Swords', 'Transition, Leaving, Moving on', [
                'What calmer shore are you being guided toward that you keep refusing to sail toward?',
                'What would you leave behind if you knew something better was waiting?',
            ], 'A ferryman guides a cloaked figure and child across still water.'),
            new TarotCard(56, 'Seven of Swords', 'Minor', 'Swords', 'Deception, Strategy, Secrecy', [
                'Where are you being dishonest — with others, or more importantly, with yourself?',
                'What are you trying to get away with that is costing you your own integrity?',
            ], 'A figure sneaks away from a camp carrying five swords, leaving two behind.'),
            new TarotCard(57, 'Eight of Swords', 'Minor', 'Swords', 'Entrapment, Helplessness, Self-limitation', [
                'What prison are you in that would dissolve if you simply removed the blindfold?',
                'What story are you telling yourself about being trapped that is not actually true?',
            ], 'A bound and blindfolded figure stands surrounded by swords, yet could walk free.'),
            new TarotCard(58, 'Nine of Swords', 'Minor', 'Swords', 'Anxiety, Nightmares, Dread', [
                'What do you lie awake thinking about — and what would happen if you thought about it in daylight?',
                'How much of your suffering right now is happening in reality versus in your mind?',
            ], 'A figure sits up in bed in anguish, hands over face.'),
            new TarotCard(59, 'Ten of Swords', 'Minor', 'Swords', 'Painful endings, Defeat, Betrayal', [
                'What is completely, truly over — and are you willing to let it be over?',
                'What dawn is waiting just beyond this ending that you cannot see yet?',
            ], 'A figure lies face down, ten swords in their back, sun rising on the horizon.'),
            new TarotCard(60, 'Page of Swords', 'Minor', 'Swords', 'Curiosity, Vigilance, Mental agility', [
                'What idea are you so in love with that you have stopped questioning whether it is actually true?',
                'What are you watching closely that others are choosing not to see?',
            ], 'A young figure holds a sword aloft in a windy landscape, alert and curious.'),
            new TarotCard(61, 'Knight of Swords', 'Minor', 'Swords', 'Ambition, Speed, Assertiveness', [
                'Where is your certainty outrunning your wisdom?',
                'What are you rushing toward without knowing if it is actually what you want?',
            ], 'A knight charges at full speed, clouds torn by the force of movement.'),
            new TarotCard(62, 'Queen of Swords', 'Minor', 'Swords', 'Clarity, Independence, Direct communication', [
                'What are you softening in your communication that needs to be said clearly?',
                'What hard truth are you withholding from someone out of kindness that is actually preventing their growth?',
            ], 'A queen sits alone with her sword raised, clear-eyed and uncompromising.'),
            new TarotCard(63, 'King of Swords', 'Minor', 'Swords', 'Truth, Intellect, Authority', [
                'Where are you using intellect to avoid feeling?',
                'What judgment are you making based on reason alone that your heart disagrees with?',
            ], 'A king holds a sword upright, facing forward with cool authority.'),
        ];
    }

    private function getPentacles(): array
    {
        return [
            new TarotCard(64, 'Ace of Pentacles', 'Minor', 'Pentacles', 'Opportunity, Prosperity, New beginnings', [
                'What practical opportunity have you been treating as too good to be real?',
                'What seed are you refusing to plant because you cannot see where it would grow?',
            ], 'A hand offers a pentacle through a cloud, a garden gate in the distance.'),
            new TarotCard(65, 'Two of Pentacles', 'Minor', 'Pentacles', 'Balance, Adaptability, Juggling', [
                'What are you balancing that is taking all your energy to maintain?',
                'What would you stop juggling if you admitted that something has to be put down?',
            ], 'A figure dances while juggling two pentacles in a figure-eight loop.'),
            new TarotCard(66, 'Three of Pentacles', 'Minor', 'Pentacles', 'Teamwork, Skill, Collaboration', [
                'What are you trying to build alone that would be better built together?',
                'What craft or skill are you developing — and are you giving it enough devotion?',
            ], 'Three figures collaborate on a cathedral with equal respect.'),
            new TarotCard(67, 'Four of Pentacles', 'Minor', 'Pentacles', 'Security, Conservation, Possessiveness', [
                'What are you holding so tightly that you cannot use your hands for anything else?',
                'What is the difference between security and imprisonment — and which are you living in?',
            ], 'A crowned figure clutches four pentacles, city behind them, going nowhere.'),
            new TarotCard(68, 'Five of Pentacles', 'Minor', 'Pentacles', 'Hardship, Poverty, Insecurity', [
                'What warmth or help is available to you right now that your pride is preventing you from entering?',
                'What story about scarcity are you carrying that might not be as true as it feels?',
            ], 'Two cold figures pass a lit church window in the snow.'),
            new TarotCard(69, 'Six of Pentacles', 'Minor', 'Pentacles', 'Generosity, Charity, Balance of power', [
                'Are you giving from abundance or from a fear of what happens if you do not?',
                'Where in your life is the balance between giving and receiving completely off?',
            ], 'A merchant weighs coins and distributes them, scales in hand.'),
            new TarotCard(70, 'Seven of Pentacles', 'Minor', 'Pentacles', 'Patience, Investment, Harvest', [
                'What are you growing that will not bear fruit on your timeline — and can you stay with it anyway?',
                'What long-term investment of your time or energy are you abandoning right before the harvest?',
            ], 'A gardener pauses to contemplate seven pentacles growing on a vine.'),
            new TarotCard(71, 'Eight of Pentacles', 'Minor', 'Pentacles', 'Mastery, Craft, Dedication', [
                'What would mastery look like in the one area of your life where you keep only going halfway?',
                'What are you practicing — and are you practicing it with full presence or just going through the motions?',
            ], 'A craftsperson carves pentacles one by one with quiet dedication.'),
            new TarotCard(72, 'Nine of Pentacles', 'Minor', 'Pentacles', 'Abundance, Self-sufficiency, Luxury', [
                'What have you built in your life that you forget to enjoy?',
                'What would self-sufficiency feel like if it came from wholeness rather than self-protection?',
            ], 'A figure walks among grapevines, falcon on wrist, alone but fulfilled.'),
            new TarotCard(73, 'Ten of Pentacles', 'Minor', 'Pentacles', 'Legacy, Wealth, Inheritance', [
                'What legacy are you building — and is it one you would be proud for others to inherit?',
                'What does wealth mean to you beyond money — and how much of it do you already have?',
            ], 'An elder sits surrounded by family and abundance, ten pentacles arranged in the tree of life.'),
            new TarotCard(74, 'Page of Pentacles', 'Minor', 'Pentacles', 'Manifestation, Study, Diligence', [
                'What skill or goal deserves more of your serious, undistracted attention than you are giving it?',
                'What are you studying without really committing to learning?',
            ], 'A young figure gazes intently at a pentacle, grounded and focused.'),
            new TarotCard(75, 'Knight of Pentacles', 'Minor', 'Pentacles', 'Responsibility, Hard work, Persistence', [
                'What would you accomplish if you simply kept showing up, day after day, without looking for shortcuts?',
                'Where does your reliability become rigidity?',
            ], 'A knight on a still horse surveys a plowed field, methodical and sure.'),
            new TarotCard(76, 'Queen of Pentacles', 'Minor', 'Pentacles', 'Practicality, Nurturing abundance, Resourcefulness', [
                'How well are you tending to your own physical and material wellbeing — not as indulgence, but as care?',
                'What would flourish in your life if you treated it with the same practical love you give to others?',
            ], 'A queen sits outdoors holding a pentacle in a garden of abundance.'),
            new TarotCard(77, 'King of Pentacles', 'Minor', 'Pentacles', 'Abundance, Security, Discipline', [
                'What empire are you building — and are you building it on values you will still respect in twenty years?',
                'What does it mean to be truly, sustainably wealthy in the way that actually matters to you?',
            ], 'A king on a throne adorned with bulls and vines holds a pentacle and scepter.'),
        ];
    }
}
