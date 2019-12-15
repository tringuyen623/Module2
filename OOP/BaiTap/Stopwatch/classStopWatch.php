<?php
class StopWatch
{
    private $startTime;
    private $endTime;
    public function __construct()
    {
        $this->startTime = $this->gettime();
        $this->endTime = $this->gettime();
    }
    public function gettime()
    {
        return time();
    }

    public function start()
    {
        return $this->startTime = $this->gettime();
    }

    public function stop()
    {
        return $this->endTime = $this->gettime();
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}
