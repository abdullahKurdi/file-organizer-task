<?php

use Commands\FileOrganizer;

require_once __DIR__ . '/commands/FileOrganizer.php';

$command    = $argv[1] ?? null;
$folderPath = $argv[2] ?? 'public/assets/file' ;  
$extension  = $argv[3] ?? 'txt' ;   

if ($command === 'organize') 
{
    if (!file_exists($folderPath) || !is_dir($folderPath)) {
        echo "Folder does not exist or is not a valid directory.\n";
        exit(1);
    }

    $organizer = new FileOrganizer($folderPath, $extension);

    foreach ($organizer->handle() as $result) 
    {
        if ($result) 
        {
            echo $result;
            echo "File moved successfully." . PHP_EOL;
        } else 
        {
            echo "File move failed." . PHP_EOL;
        }
    }
} 
else {
    echo "Unknown command.\n";
}

