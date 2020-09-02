<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'] . '../v2/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/';
symlink($targetFolder, $linkFolder) or die("error creating symlink");
echo 'Symlink process successfully completed';