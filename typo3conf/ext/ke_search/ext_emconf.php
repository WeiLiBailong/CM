<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ke_search".
 *
 * Auto generated 25-06-2024 10:18
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Faceted Search',
  'description' => 'Faceted fulltext search for TYPO3. Fast, flexible and easy to install and use. Indexes content directly from the databases. Features faceting / filtering, file indexing, images in result lists and respects access restrictions.',
  'category' => 'plugin',
  'version' => '5.5.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'ke_search Dev Team',
  'author_email' => 'ke_search@tpwd.de',
  'author_company' => 'TPWD AG',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.4.0-8.9.99',
      'typo3' => '11.5.11-12.99.99',
    ),
    'suggests' => 
    array (
      'dashboard' => '11.5.11-12.99.99',
    ),
    'conflicts' => 
    array (
    ),
  ),
);

