<?php


namespace MyApp\Video;


class Vimeo extends Video
{

    /** @var $color string */
    private $color;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

}