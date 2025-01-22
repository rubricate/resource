<?php 

declare(strict_types=1);

namespace Rubricate\Resource;

use InvalidArgumentException;

class FileResource implements IFileResource
{
    private string $dirPath;

    public function __construct(IDirectoryPathResource $i)
    {
        $this->dirPath = $i->getDirectoryPath();

    }

    public function get(string $filename): string
    {
        $absolutePath = $this->dirPath . $filename . '.php';

        self::exceptionFile($absolutePath, $filename);

        return (string) include $absolutePath;
    } 

    public function incorporate($filename, $data = array()): ?string
    {
        $absolutePath = $this->dirPath . $filename . '.php';

        self::exceptionFile($absolutePath, $filename);

        if (!empty($data)) {
            extract($data, EXTR_SKIP);
        }

       return (string) include $absolutePath;
    } 

    private function exceptionFile(string $absolutePath, string $filename)
    {
        if(!file_exists($absolutePath)){
            throw new InvalidArgumentException(
                sprintf("file not found. '%s.php'", $filename)
            );
        }
    }

}

