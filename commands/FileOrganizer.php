<?php

namespace Commands;

class FileOrganizer
{
    private string $dir;
    private string $ext;


    public function __construct(string $dir,string $ext) {
        $this->dir = $dir;
        $this->ext = $ext;
    }


    public function handle()
    {
        $files = scandir($this->dir);

        foreach ($files as $filename) 
        {
            if (pathinfo($filename, PATHINFO_EXTENSION) === $this->ext) 
            {
                $lang = explode('-', $filename)[0];
                $subfolder = $this->dir . DIRECTORY_SEPARATOR . $lang;
                
                if (!file_exists($subfolder)) {
                    mkdir($subfolder);
                }
                
                $file = $this->dir . DIRECTORY_SEPARATOR . $filename;
                $target = $subfolder . DIRECTORY_SEPARATOR . $filename;
                
                yield rename($file, $target);
            }
        }
    } 
}