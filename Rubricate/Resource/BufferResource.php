<?php

declare(strict_types=1);

namespace Rubricate\Resource;

class BufferResource implements IIncorporateResource
{
    private IIncorporateResource $ob;
    
    public function __construct(IIncorporateResource $ob)
    {
        $this->ob = $ob;
    }

    public function incorporate(string $filename, array $data = []): ?string
    {
        ob_start();

        $this->ob->incorporate($filename, $data);
        $resource = ob_get_contents();

        ob_end_clean();

        return $resource ?? '';
    } 

}

