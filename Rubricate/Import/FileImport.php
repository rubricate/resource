<?php 

/*
 * @package     Rubricate
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate
 * @copyright   2017 - 2018
 * 
 */



namespace Rubricate\Import;


class FileImport extends AbstractFileImport
{

    private $returnFile;

    public function __construct(IPathImport $p)
    {
        parent::__construct($p);
    }



    protected function getError($message)
    {
        return sprintf("File: '%s' not found.\n", $message);
    } 



    protected function loadFile()
    {
        if (self::isReturnFile()) {

            return include parent::getFullPathAndFileName();

        }

        include parent::getFullPathAndFileName();
    } 



    public function getImport($filename)
    {
        self::enableReturnFile();

        return parent::import($filename);
    } 



    private function isReturnFile()
    {
        return $this->returnFile;
    } 



    private function enableReturnFile()
    {
        $this->returnFile = true;

        return $this;
    } 



}

