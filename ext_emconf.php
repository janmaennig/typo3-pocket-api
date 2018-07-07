<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO§ in the pocket',
    'description' => 'Api to connect with react native app',
    'category' => 'misc',
    'version' => '0.0.1',
    'state' => 'alpha',
    'clearcacheonload' => true,
    'author' => 'Jan Maennig',
    'author_email' => 'janmaennig@gmail.com',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '8.0.0-9.0.99'
                ],
            'conflicts' =>
                [
                ],
            'suggests' =>
                [
                ],
        ],
    'uploadfolder' => false,
    'createDirs' => null,
    'author_company' => null,
];
