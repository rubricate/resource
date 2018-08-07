<?php 

/*
 * @package     Rubricate
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate
 * @copyright   2017 - 2018
 * 
 */



namespace Rubricate\Import;


class PathImport implements IPathImport
{
    private $path;



    public function __construct($path = null)
    {
        self::init($path);
    }


    public function getPath()
    {
        return $this->path;
    } 



    private function init($path)
    {
        $path = (!empty($path))? $path: '.';

        $this->path = '' 
            . rtrim($path, '\\/') 
            . DIRECTORY_SEPARATOR;

        return $this;


    } 

}

