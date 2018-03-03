<?php 

/*
 * @package     Rubricate
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate
 * @copyright   2017 
 * 
 */
 



namespace Rubricate\Config; 


interface IFileLocatorConfig
{
    public function getFile($name);

    public function includeFile($name);
}

