<?php

namespace Popnikos\TraitFramework\Filesystem;

trait PathTrait
{
    private $path;
    
    public function getPath() 
	{
        return $this->path;
    }
    
    public function setPath($path) 
	{
        $this->path = $path;
    }
	
	/**
	 * Check if the path is a regular existing one
	 * @param boolean $force If set to true, PHP stat cache is cleared before check file_exists 
	 * @return boolean
	 */
	public function exists($force=false)
	{
		if ($force) {
			$this->clearCache();
		}
		return file_exists($this->getPath());
	}
	
	/**
	 * Clear the stat cache for the path
	 * @link http://php.net/manual/fr/function.clearstatcache.php
	 */
	public function clearCache()
	{
		@clearstatcache(true, $this->getPath());
	}
}
