<?php 

declare(strict_types=1);

namespace Rubricate\Resource;

class FileResource implements IFileResource
{
    private $dirPath;

    public function __construct(IDirectoryPathResource $i)
    {
        $this->dirPath = $i->getDirectoryPath();

    }

    public function get($filename): string
    {
        $absolutePath = $this->dirPath . $filename . '.php';

        if(!file_exists($absolutePath)){
            throw new \Exception(
                sprintf("file not found. '%s.php'\n", $filename)
            );
        }

        return include $absolutePath;
    } 

    public function incorporate($filename, $data = array()): void
    {
        $absolutePath = $this->dirPath . $filename . '.php';

        if(!file_exists($absolutePath)){
            throw new \Exception(
                sprintf("file not found. '%s.php'\n", $filename)
            );
        }

        if(is_array($data) && count($data)) {
            extract($data);
        }

        include $absolutePath;
    } 

}

