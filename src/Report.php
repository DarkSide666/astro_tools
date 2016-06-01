<?php
namespace DarkSide666\AstroTools;

class Report
{
    // all report data
    protected $data = [];

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }
}
