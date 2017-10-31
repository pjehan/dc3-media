<?php


namespace MyApp\Picture;


use MyApp\Media;

class Picture extends Media
{

    /** @var $alt string */
    private $alt;

    /**
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     */
    public function setAlt(string $alt)
    {
        $this->alt = $alt;
    }

}