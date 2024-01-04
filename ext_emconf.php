<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Matomo Integration',
    'description' => 'Matomo integration for TYPO3',
    'category' => 'fe',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'state' => 'stable',
    'version' => '2.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'php' => '8.1.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\MatomoIntegration\\' => 'Classes']
    ],
];
