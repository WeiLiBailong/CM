<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "powermail".
 *
 * Auto generated 27-06-2024 16:43
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'powermail',
  'description' => 'Powermail is a well-known, editor-friendly, powerful
        and easy to use mailform extension with a lots of features
        (spam prevention, marketing information, optin, ajax submit, diagram analysis, etc...)',
  'category' => 'plugin',
  'version' => '12.3.1',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Powermail Development Team',
  'author_email' => 'service@in2code.de',
  'author_company' => 'in2code.de',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '12.2.0-12.5.99',
      'php' => '8.1.0 - 8.3.99',
    ),
    'suggests' => 
    array (
      'static_info_tables' => '',
    ),
    'conflicts' => 
    array (
    ),
  ),
);

