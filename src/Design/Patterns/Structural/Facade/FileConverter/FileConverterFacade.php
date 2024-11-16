<?php

namespace DesignPattern\Design\Patterns\Structural\Facade\FileConverter;

use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Compress\Compress;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Compress\Types\GZCompress;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Compress\Types\ZipCompress;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter\Audio\AudioConverter;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter\Audio\AudioTypes;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter\Converter;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter\Video\VideoConverter;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Converter\Video\VideoTypes;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\FileScanner\Audio\MP3Scanner;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\FileScanner\Video\MP4Scanner;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Normalizer\Normalizer;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\FileScanner\FileScanner;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Normalizer\Audio\AudioNormlizer;
use DesignPattern\Design\Patterns\Structural\Facade\FileConverter\Normalizer\Video\VideoNormlizer;

class FileConverterFacade
{
    private bool $isAudio = true;
    private FileScanner $fileScanner;
    private Normalizer $normalizer;
    private Converter $converter;
    private Compress $compress;

    /**
     * Summary of __construct
     * @param string $file
     */
    public function __construct(
        private string $file
    ) {
        $this->detectType();
        $this->load();
    }

    private function detectType()
    {
        if (preg_match("/\.(mp3|aa|aac)/i", $this->file)) {
            $this->fileScanner = new MP3Scanner($this->file);
            $this->normalizer = new AudioNormlizer();
            $this->converter = new AudioConverter();
            $this->compress = new ZipCompress();
        } else {
            $this->fileScanner = new MP4Scanner($this->file);
            $this->normalizer = new VideoNormlizer();
            $this->converter = new VideoConverter();
            $this->compress = new GZCompress();
            $this->isAudio = false;
        }
    }

    /**
     * Summary of load
     * @throws CorruptedFileException
     */
    private function load()
    {
        if ($this->fileScanner->scan()) {
            $this->normalizer->normalize($this->file);
        } else {
            throw new CorruptedFileException;
        }
    }

    public function convert(): void
    {
        if ($this->isAudio) {
            $this->converter->convert($this->file, AudioTypes::AUDIO_MP3, AudioTypes::AUDIO_MP3);
        } else {
            $this->converter->convert($this->file, VideoTypes::VIDEO_AVI, VideoTypes::VIDEO_MP4);
        }
        $this->compress->compress($this->file);
    }
}
