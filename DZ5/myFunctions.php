<?php
function getUsersList()
{//  возвращает массив пользователей и их захешенные пароли
$users = [
     ['login' => 'Vasya' , 'password' => '$2y$10$jX5s54otd9sNGysTSj3YXuVUJx9HXrarsBrJVjl4BE/avPoZs9kxC'], //123
     ['login' => 'Petya' , 'password' => '$2y$10$jQJrK6bJHGLChc2jsStOWeAOEubB4QOaxu0q1bqq5lSi1jOlxKVgO'],  //1234
     ['login' => 'Misha' , 'password' => '$2y$10$/N2lGfADrOsgcZjHgNKSc.FYaFJB1eTGGFDDYtg99Ytj9js3R05mm'],  //12345
     ['login' => 'Andrey' , 'password' => '$2y$10$gUzuVfP1N6kQ24AJ8U/XNO/z/OjhOCoY8yL8I3Slgy..jijrFEhFW'],  //123456
     ['login' => 'Albert' , 'password' => '$2y$10$WDCB6IyUfXulNjVvFBPDCOwkMHEKsWukT9SOD6uwPgEUs1Pa0gW66'] //1234567
    ];
return $users;
}
//echo password_hash('124567', PASSWORD_DEFAULT);
//echo password_verify('124567','$2y$10$WDCB6IyUfXulNjVvFBPDCOwkMHEKsWukT9SOD6uwPgEUs1Pa0gW66');

function existsUser( $login )
{   // существует ли пользователь с заданным логином?
    return in_array( $login, array_column( getUsersList(), 'login') ) ;
}

function checkPassword($login, $password)
{
    if ( true === existsUser($login) ) {
        foreach ( getUsersList() as $users ) {
            if ( $login === $users['login'] ) {
                return password_verify( $password, $users['password'] );
            }
        }
    }
    return false;
}

function getCurrentUser()
{
    if ( isset($_SESSION['login']) ) { //пользователь стартанул сессию
            if ( existsUser($_SESSION['login']) ) {  //есть ли пользователь с таким логином
                return $_SESSION['login'];
            }
        }
}