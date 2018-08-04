<?php

namespace App\Models;

class Authorize
{

    protected $userName;

    protected $path;

    public function __construct()
    {
        $this->path = __DIR__ . '/../../text/admin.php';

        $this->userName = null;

        if ( !$this->userName ) {
            //if ( isset($_SESSION) ) {
                if ( isset( $_SESSION['username']) ) {

                        $this->userName = $_SESSION['username'];

                }
            //}
        }
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function verification( $login, $password )
    {
        $arr = require $this->path;

            if ( $login === $arr['login'] ) {
                if ( password_verify( $password, $arr['hash'] ) ) {

                        $this->userName = $login;
                        $_SESSION['username'] = $login;
                        return true;
                }

                return false;
            }
    }

    public function exitUser() {

        session_destroy();
    }
}


