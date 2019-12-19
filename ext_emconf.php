<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "fp_newsletter"
 *
 * Auto generated by Extension Builder 2018-06-15
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Newsletter subscriber managment',
    'description' => 'Plugin for newsletter subscription and unsubscription with double opt in (and double opt out). Used table: tt_address. A log is written.',
    'category' => 'plugin',
    'author' => 'Kurt Gusbeth',
    'author_company' => 'fixpunkt werbeagentur gmbh',
    'author_email' => 'info@quizpalme.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.18.0',
    'constraints' => [
        'depends' => [
        	'typo3' => '8.7.0-9.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
