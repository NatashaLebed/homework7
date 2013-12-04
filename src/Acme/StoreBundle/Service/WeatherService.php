<?php

namespace Acme\StoreBundle\Service;


class WeatherService {
    private $city;

    public function __construct($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getWeather()
    {
        $url = "http://meteo.ua/56/cherkassyi";
        $code = file_get_contents($url);
        preg_match("|<div class=\"win_tmp\">(.*)</div>|isU",$code,$match);

        return $match[1];

    }
}