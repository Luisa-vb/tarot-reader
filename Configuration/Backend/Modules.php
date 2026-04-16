<?php

return [
    'tarot_reader' => [
        'parent' => 'help',
        'position' => ['top'],
        'access' => 'user',
        'workspaces' => 'live',
        'iconIdentifier' => 'tarot-reader-module',
        'path' => '/module/help/tarot-reader',
        'labels' => 'LLL:EXT:tarot_reader/Resources/Private/Language/locallang_mod.xlf',
        'extensionName' => 'TarotReader',
        'controllerActions' => [
            \Visionbites\TarotReader\Controller\TarotReaderController::class => [
                'index',
                'draw',
            ],
        ],
    ],
];
