<?php


namespace MyApp\Video;


use MyApp\Media;

class Video extends Media
{

    /** @var $autoplay bool */
    private $autoplay;

    /** @var $frameborder int */
    private $frameborder;

    /** @var $allowFullScreen bool */
    private $allowFullScreen;

    /**
     * @return bool
     */
    public function isAutoplay(): bool
    {
        return $this->autoplay;
    }

    /**
     * @param bool $autoplay
     */
    public function setAutoplay(bool $autoplay)
    {
        $this->autoplay = $autoplay;
    }

    /**
     * @return int
     */
    public function getFrameborder(): int
    {
        return $this->frameborder;
    }

    /**
     * @param int $frameborder
     */
    public function setFrameborder(int $frameborder)
    {
        $this->frameborder = $frameborder;
    }

    /**
     * @return bool
     */
    public function isAllowFullScreen(): bool
    {
        return $this->allowFullScreen;
    }

    /**
     * @param bool $allowFullScreen
     */
    public function setAllowFullScreen(bool $allowFullScreen)
    {
        $this->allowFullScreen = $allowFullScreen;
    }

}