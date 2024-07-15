<?php
//--------------------------------------------------\\
// This script can be used on a Hetzner webserver   \\
// to create the symlinks for a TYPO3 installation. \\
//--------------------------------------------------\\
//show the absolute path of the webspace.

echo 'Arbeitsverzeichnis: '.realpath(getcwd()).'<br/>';
echo 'Arbeitsverzeichnis SRC: '.realpath(getcwd().'/../').'<br/>';

//the path to the folder which will be linked.
//$version_folder = realpath(getcwd() . '/../typo3_src-11.5.36');
$version_folder = '../typo3_src-12.4.14';
echo 'Version Folder: ' . $version_folder . '<br/>';
   
//check if the source folder is available.

if (is_dir($version_folder)) {
    echo 'Source-Verzeichnis vorhanden!<br/>';
    unlink('typo3_src');    
    unlink('typo3');
    unlink('index.php');
    
    echo 'Source-Verzeichnis etc. unlinked!<br/>';
    
    symlink($version_folder, 'typo3_src');
    symlink('typo3_src/typo3', 'typo3');
    symlink('typo3_src/index.php', 'index.php');
    
    echo 'Symlinks wurden erstellt!<br/>';
    
} else {
    echo 'Das Source-Verzeichnis ist nicht vorhanden!<br/>';
    echo 'Es wurden keine Änderungen vorgenommen.';
}
