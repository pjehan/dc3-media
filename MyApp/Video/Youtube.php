<?php


namespace MyApp\Video;


class Youtube extends Video
{

    public function getCode(): string {
        parse_str(parse_url($this->getUrl(), PHP_URL_QUERY), $urlParts);
        return $urlParts["v"];
    }

}