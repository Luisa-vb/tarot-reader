# Tarot Reader for TYPO3 Backend🔮

A mystical Tarot Card Reader module for the TYPO3 v14 backend. Every time you open the module, a card is drawn from the Major Arcana. Each card reveals a **deep life question** — crafted to provoke genuine reflection.

---
## Philosophy

This extension is not about prediction. It's about **presence**.

Each card carries questions that were written to resist easy answers — questions that sit with you through the day, that surface in quiet moments, that make you look at your work, your relationships, your choices from a different angle.

Open the module. Draw a card. Let the question find you.

---

## Features

- 🃏 **Major Arcana card deck** — all 22 Major Arcana
- 🔄 **Reversed cards** — 30% chance a card appears reversed, adding depth
- ❓ **Multiple questions per card** — each card has 3–4 unique questions; one is chosen randomly
- 🎨 **Beautiful dark UI** — designed to feel genuinely mystical, not corporate
- 🖼️ **Custom card images** — drop your card images into `Resources/Public/Images/Cards/` (named `0.jpg` through `21.jpg`)
- 🔁 **Draw again** — refresh anytime for a new card

---

## Installation

### Via Composer (recommended)

```bash
ddev composer require visionbites/tarot-reader
```

### Manual

Copy the extension folder to `typo3conf/ext/tarot_reader/` and activate via the Extension Manager.

---

## Adding Custom Card Images

Place your card images in:
```
EXT:tarot_reader/Resources/Public/Images/Cards/
```

Name them by card ID (0–21):

| ID | Card |
|----|------|
| 0 | The Fool |
| 1 | The Magician |
| 2 | The High Priestess |
| 3 | The Empress |
| 4 | The Emperor |
| 5 | The Hierophant |
| 6 | The Lovers |
| 7 | The Chariot |
| 8 | Strength |
| 9 | The Hermit |
| 10 | Wheel of Fortune |
| 11 | Justice |
| 12 | The Hanged Man |
| 13 | Death |
| 14 | Temperance |
| 15 | The Devil |
| 16 | The Tower |
| 17 | The Star |
| 18 | The Moon |
| 19 | The Sun |
| 20 | Judgement |
| 21 | The World |

If no image is found, the extension renders an elegant SVG placeholder card with decorative mandala art.

---

## Module Location

The module appears under **Help → Tarot** in the TYPO3 backend menu.

---

## Requirements

- TYPO3 v14.x
- PHP 8.2+
