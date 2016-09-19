<?php

namespace Popnikos\FileSystem;

use DirectoryIterator;

Trait Directory
{
    private $path;
    
    public function getPath() {
        return $this->path;
    }
    
    public function setPath( $path) {
        $this->path = $path;
    }
    
    public function find($path, $expression)
    {
        // Returned array
        $found=[];
        if (is_dir($path)) {
            $iterator = new FilesystemIterator($this->path, 
                FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_PATHNAME | FilesystemIterator::SKIP_DOTS);
            $found = preg_grep($expression, iterator_to_array($iterator))    
        }
        return $found;
    }
}
