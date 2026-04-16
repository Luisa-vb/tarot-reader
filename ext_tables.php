<?php

defined('TYPO3') or die();

// Register module icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);

$iconRegistry->registerIcon(
    'tarot-reader-module',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:tarot_reader/Resources/Public/Icons/module-tarot.svg']
);
