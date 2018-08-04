<?php
class border
{
    public function setColor()
        {
            echo 'red';
        }

    public function setWeight()
        {
            echo '16';
            return $this;
        }
}

$obg = new border;
$obg -> setWeight()->setColor();//конструкцию return $this можно использовать для вызова нескольких методов объекта по цепочке.
//вернёт 16red. Т.е. $obg -> setWeight() вернёт 16, а затем $obg->setColor() вернёт 'red'

