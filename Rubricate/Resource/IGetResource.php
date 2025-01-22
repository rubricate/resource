<?php 

namespace Rubricate\Resource;

interface IGetResource
{
    public function get(string $filename): string;
}    

