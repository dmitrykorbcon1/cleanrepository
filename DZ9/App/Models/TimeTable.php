<?php

namespace App\Models;

class TimeTable
{
    protected $trains;

    protected $dataBase;

    public function __construct($path)
    {
        $this->dataBase = new DB($path);

    }

    public function getTrains()
    {
        $sql = 'SELECT * FROM trains';
        $data = [];
        $arr = $this->dataBase->query( $sql, $data );

        $this->trains = [];

        if ( is_array($arr) ) {
            foreach ($arr as $s) {
                if (is_array($s)) {
                    if (isset($s['trnum'])) {
                        if (isset($s['trname'])) {
                            if (isset($s['arriv'])) {
                                if (isset($s['depa'])) {
                                    if (isset($s['id'])) {

                                        $this->trains[$s['id']] = new Train($s['trnum'], $s['trname'], $s['arriv'], $s['depa']);

                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        return $this->trains;

    }

    public function addTrain(string $trnum, string $trname, string $arriv, string $depa)
    {
        $sql = 'INSERT INTO trains (trnum, trname, arriv, depa) VALUES (:trnum, :trname, :arriv, :depa)';   //делаем запрос к базе данных
        $data = [':trnum' => $trnum, ':trname' => $trname, ':arriv' => $arriv, ':depa' => $depa];
        $this->dataBase->query( $sql, $data );

    }

    public function deleteTrain($trnum)
    {
        $sql = 'DELETE FROM trains WHERE trnum=:trnum';   //удаляем строку с определённым номером поезда
        $data = [':trnum' => $trnum];
        $this->dataBase->query( $sql, $data );

    }

}

