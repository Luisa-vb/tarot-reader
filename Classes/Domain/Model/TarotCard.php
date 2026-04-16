<?php

declare(strict_types=1);

namespace Visionbites\TarotReader\Domain\Model;

/**
 * Represents a single Tarot card with its associated life questions.
 */
final class TarotCard
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
        private readonly string $arcana,
        private readonly string $suit,
        private readonly string $keywords,
        private readonly array $questions,
        private readonly string $symbolism,
        private readonly bool $reversed = false,
    ) {}

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getArcana(): string { return $this->arcana; }
    public function getSuit(): string { return $this->suit; }
    public function getKeywords(): string { return $this->keywords; }
    public function getSymbolism(): string { return $this->symbolism; }
    public function isReversed(): bool { return $this->reversed; }

    public function getRandomQuestion(): string
    {
        return $this->questions[array_rand($this->questions)];
    }

    public function getDisplayName(): string
    {
        return $this->reversed ? $this->name . ' (Reversed)' : $this->name;
    }

    public function withReversed(bool $reversed): self
    {
        return new self(
            $this->id,
            $this->name,
            $this->arcana,
            $this->suit,
            $this->keywords,
            $this->questions,
            $this->symbolism,
            $reversed,
        );
    }
}
