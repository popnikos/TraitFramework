<?php

namespace Popnikos\TraitFramework\FileSystem;

use DirectoryIterator;

trait DirectoryTrait
{
	use Popnikos\TraitFramework\FileSystem\PathTrait;
    
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
