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
            if ( isset($_SESSION) ) {
                if ( isset( $_SESSION['username']) ) {
                    if ( is_string( $_SESSION['username'] ) ) {

                        $this->userName = $_SESSION['username'];
                    }
                }
            }
        }
    }


    public function getUserName()
    {
        return $this->userName;
    }

    public function verification( $login, $password )
    {
        $ar = require $this->path;

        if ( is_array( $ar ) ) {
            if ( isset( $ar['login'] ) ) {
                if ( isset( $ar['hash'] ) ) {
                    if ( $login === $ar['login'] ) {
                        if ( password_verify( $password, $ar['hash'] ) ) {
                            if ( isset($_SESSION) ) {

                                $this->userName = $login;
                                $_SESSION['username'] = $this->userName;

                                return true;
                            }
                        }
                    }
                }
            }
        }

        return false;
    }

    public function exitUser() {

        session_destroy();
    }
}


