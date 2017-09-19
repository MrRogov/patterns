<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 19.09.17
 * Time: 23:19
 */

namespace observer;


class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /** @var  number */
    public $temp;
    /** @var  number */
    public $pressure;
    /** @var  WeatherData */
    public $weatherData;


    /**
     * CurrentConditionsDisplay constructor.
     * @param WeatherData $data
     */
    public function __construct(WeatherData $data)
    {
        $this->weatherData = $data;
        $this->weatherData->registerObserver($this);
    }

    /**
     * @param $temp
     * @param $humidity
     * @param $pressure
     * @return void
     */
    public function update($temp, $humidity, $pressure)
    {
        $this->temp = $temp;
        $this->pressure = $pressure;

        $this->display();
    }

    /**
     * display form in console
     * @return void
     */
    public function display()
    {
        echo "========" . self::class . "========" . PHP_EOL;
        echo PHP_EOL;
        echo "-------- Weather info ------" . PHP_EOL;
        echo PHP_EOL;
        echo $this->temp . " *C" . PHP_EOL;
        echo $this->pressure . " mmP" . PHP_EOL;
        echo PHP_EOL;
        echo "-----------------------------" . PHP_EOL;

    }
}