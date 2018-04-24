<?php
/* Создаем класс Утка.
Свойства: 2, оба обязательные. Имя str, возраст в месяцах int, вид str. */
class Duck
{
    private $alias; //имя текстом
    private $age; //возраст в месяцах
    private $spiecy = 'кряква'; //вид текстом

    // конструктор: нужно указать имя, возраст в месяцах и вид
    public function __construct($alias, $age, $spiecy)
    {
        $this->alias = $alias;
        $this->age = $age;
        $this->spiecy = $spiecy;
    }

    // узнать вид утки
    public function getSpiecy()
    {
        echo $this->spiecy;
    }

    // узнать имя утки
    public function getAlias()
    {
        echo $this->alias;
    }
}

echo '<pre>';

print_r($duck1 = new Duck('Funny', 3, 'морянка'));
print_r($duck1 = new Duck('Утёночка', 15, 'кряква'));
print_r($duck1 = new Duck('Утка', 3, 'патагонская хохлатая'));

echo '</pre>';

?>