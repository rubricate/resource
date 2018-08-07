<?php 

/*
 * @package     Rubricate
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate
 * @copyright   2017 - 2018
 * 
 */



namespace Rubricate\Import;


abstract class AbstractFileImport implements IFileImport
{

    private $path;
    private $file;


    public function __construct(IPathImport $p)
    {
        $this->path = $p;
    }



    abstract protected function getError($message);
    abstract protected function loadFile();



    protected function getFullPathAndFileName()
    {
        return $this->file;    
    } 



    private function setFile($file)
    {
        $this->file = $this->path->getPath() . $file . '.php';

        return $this;
    } 



    public function import($filename)
    {
        self::setFile($filename);

        if (!file_exists($this->file)) {
            throw new \Exception($this->getError($this->file));
        }

        return $this->loadFile();
    } 



}

