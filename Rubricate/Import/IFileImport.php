<?php 

/*
 * @package     Rubricate
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate
 * @copyright   2017 - 2018
 * 
 */
 



namespace Rubricate\Import; 


interface IFileImport
{
    public function import($filename);
}

