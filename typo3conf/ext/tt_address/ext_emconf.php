<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "tt_address".
 *
 * Auto generated 23-06-2024 14:48
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Address List',
  'description' => 'Displays a list of addresses from an address table on the page.',
  'category' => 'plugin',
  'version' => '8.1.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => true,
  'author' => 'tt_address Development Team',
  'author_email' => 'friendsof@typo3.org',
  'author_company' => NULL,
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '11.5.0-12.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'FriendsOfTYPO3\\TtAddress\\' => 'Classes',
    ),
  ),
);

