<?php

declare(strict_types=1);

namespace Visionbites\TarotReader\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Visionbites\TarotReader\Service\TarotDeckService;

/**
 * Backend module controller for the Tarot Reader.
 * Presents a card drawing experience each time the module is opened.
 */
class TarotReaderController extends ActionController
{
    public function __construct(
        private readonly TarotDeckService $tarotDeckService,
        private readonly ModuleTemplateFactory $moduleTemplateFactory,
    ) {}

    /**
     * Main reading: automatically draws a card when the module opens.
     */
    public function indexAction(): ResponseInterface
    {
        $moduleTemplate = $this->moduleTemplateFactory->create($this->request);

        $card = $this->tarotDeckService->drawCard();

        $moduleTemplate->assignMultiple([
            'card' => $card,
            'question' => $card->getRandomQuestion(),
            'cardImagePath' => $this->getCardImagePath($card->getId()),
            'arcanaClass' => strtolower(str_replace(' ', '-', $card->getArcana())),
            'suitClass' => strtolower($card->getSuit()),
        ]);

        return $moduleTemplate->renderResponse('Index');
    }

    /**
     * Draw a new card (AJAX-friendly, called via "draw again" button).
     */
    public function drawAction(): ResponseInterface
    {
        return $this->indexAction();
    }

    /**
     * Returns the path to a card image, or a placeholder if not found.
     * Supports .png and .jpg — place images in Resources/Public/Images/Cards/{id}.png or .jpg
     */
    private function getCardImagePath(int $cardId): string
    {
        foreach (['png', 'jpg', 'jpeg', 'webp'] as $ext) {
            $absPath = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName(
                sprintf('EXT:tarot_reader/Resources/Public/Images/Cards/%d.%s', $cardId, $ext)
            );
            if (file_exists($absPath)) {
                return sprintf('Images/Cards/%d.%s', $cardId, $ext);
            }
        }

        // Return empty string — the template will render an SVG placeholder
        return '';
    }
}
