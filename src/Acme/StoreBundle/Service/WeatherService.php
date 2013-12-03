<?php

namespace Acme\StoreBundle\Service;


class WeatherService {
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getCity()
    {
        return $this->name;
    }

    public function getWeather()
    {
        $url = "http://meteo.ua/56/cherkassyi";
        $code = file_get_contents($url);
//        var_dump($code);
        preg_match("|<div class=\"win_tmp\">(.*)</div>|isU",$code,$match);

        return $match[1];

    }
}