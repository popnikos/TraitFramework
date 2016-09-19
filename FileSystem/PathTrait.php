<?php

namespace Popnikos\TraitFramework\Filesystem;

Trait PathTrait
{
    private $path;
    
    public function getPath() {
        return $this->path;
    }
    
    public function setPath( $path) {
        $this->path = $path;
    }
}
