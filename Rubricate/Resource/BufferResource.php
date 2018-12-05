<?php

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/resource
 * @copyright   2018
 * 
 */

namespace Rubricate\Resource;

class BufferResource implements IIncorporateResource
{

    private $ob;

    
    public function __construct(IIncorporateResource $ob)
    {
        $this->ob = $ob;
    }


    public function incorporate($filename, $data = array())
    {
        ob_start();

        $this->ob->incorporate($filename, $data);
        $resource = ob_get_contents();

        ob_end_clean();

        return $resource;
    } 


}

