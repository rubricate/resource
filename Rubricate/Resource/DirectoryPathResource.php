<?php 

declare(strict_types=1);

namespace Rubricate\Resource;

use InvalidArgumentException;

class DirectoryPathResource implements IDirectoryPathResource
{
    private ?string $dirPath;

    public function __construct($dirPath = null)
    {
        self::init($dirPath);
    }

    public function getDirectoryPath(): ?string
    {
        return $this->dirPath;
    } 

    private function init($dir): void
    {
        $dirPath = rtrim($dir ?? '.', '\\/') . DIRECTORY_SEPARATOR;

        if(!is_dir($dirPath)){
            throw new InvalidArgumentException(
                sprintf( "Directory Not Found. Path:'%s'", $dirPath)
            );
        }

        $this->dirPath = $dirPath;

    } 

}

