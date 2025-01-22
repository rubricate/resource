<?php 

namespace Rubricate\Resource;

interface IIncorporateResource
{
    public function incorporate(string $filename, array $data = []): ?string;
}    

