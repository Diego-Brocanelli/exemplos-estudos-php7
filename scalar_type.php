<?php

declare(strict_types=1);

class Pdf
{
    /**
     * paper orientation
     * 
     * @var string
     */
    protected $paper;

    /**
     * Font size
     * 
     * @var int
     */
    protected $fontSize;

    /**
     * Paragraph
     * 
     * @var string
     */
    protected $paragraph;

    /**
     * Configuration document PDF.
     * 
     * @param string $paper     paper orientation
     * @param int    $fontSize  document font size
     * @param string $paragraph text of document
     */
    public function __construct(string $paper, int $fontSize, string $paragraph)
    {
        $this->paper     = $paper;
        $this->fontSize  = $fontSize;
        $this->paragraph = $paragraph;
    }

    /**
     * Return document configuration.
     * 
     * @return array
     */
    public function getDocumentConfiguration()
    {
        return [
            'paper'     => $this->paper,
            'fontSize'  => $this->fontSize,
            'paragraph' => $this->paragraph,
        ];
    }

    //other implementations...
}
