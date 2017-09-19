<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 19.09.17
 * Time: 22:55
 */

namespace observer;


class WeatherData implements Subject
{
    /**
     * @var Observer[]
     */
    public $observers = [];

    /** @var */
    public $temp;

    /** @var */
    public $humidity;

    /** @var */
    public $pressure;

    /**
     * @param Observer $o
     * @return void
     */
    public function registerObserver(Observer $o)
    {
        if (!in_array($o, $this->observers))
            $this->observers[] = $o;
    }

    /**
     * @param Observer $o
     * @return bool
     */
    public function removeObserver(Observer $o)
    {
        $key = array_search($o, $this->observers);

        if ($key == false)
            return false;

        unset($this->observers[$key]);

        return true;
    }

    /**
     *
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temp, $this->humidity, $this->pressure);
        }
    }

    /**
     *
     */
    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    /**
     * @param $temp
     * @param $humidity
     * @param $pressure
     */
    public function setMeasurements($temp, $humidity, $pressure)
    {
        $this->temp = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }


}