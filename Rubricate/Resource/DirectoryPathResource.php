<?php 

/*
 * @package     Rubricate
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/resource
 * @copyright   2017 - 2018
 * 
 */



namespace Rubricate\Resource;


class DirectoryPathResource implements IDirectoryPathResource
{
    private $dirPath;



    public function __construct($dirPath = null)
    {
        self::init($dirPath);
    }


    public function getDirectoryPath()
    {
        return $this->dirPath;
    } 



    private function init($dirPath)
    {
        $dirPath = (!empty($dirPath))? $dirPath: '.';

        $this->dirPath = '' 
            . rtrim($dirPath, '\\/') 
            . DIRECTORY_SEPARATOR;

        return $this;


    } 

}

