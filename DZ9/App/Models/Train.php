<?php

namespace App\Models;

class Train
{
    protected $trnum;

    protected $trname;

    protected $arriv;

    protected $depa;


    public function __construct($trnum, $trname, $arriv, $depa)

    {
        $this->trnum = $trnum;
        $this->trname = $trname;
        $this->arriv = $arriv;
        $this->depa = $depa;
    }

    public function getTrNum()
    {
        return $this->trnum;
    }

    public function getTrName()
    {
        return $this->trname;
    }


    public function getArriv()
    {
        return $this->arriv;
    }

    public function getDepa()
    {
        return $this->depa;
    }
}

