<?php

namespace App\Services;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class FileUploader
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function upload($uploadDir, $file, $filename)
    {
        try {

            $file->move($uploadDir, $filename);
        } catch (FileException $e){

            $this->logger->error('Échec du téléchargement de l\'image : ' . $e->getMessage());
            throw new FileException('Échec du téléchargement du fichier');
        }
    }
}