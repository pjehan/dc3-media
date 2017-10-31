<?php


namespace MyApp\Audio;


class Audio extends Media
{

    /** @var $controls bool */
    private $controls;

    /**
     * @return bool
     */
    public function isControls(): bool
    {
        return $this->controls;
    }

    /**
     * @param bool $controls
     */
    public function setControls(bool $controls)
    {
        $this->controls = $controls;
    }

}