<?php

namespace MyApp;

class Media {

    /** @var string */
    private $url;

    public function __construct(string $url)
    {
        $this->setUrl($url);
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function __toString()
    {
        return $this->getUrl();
    }



}