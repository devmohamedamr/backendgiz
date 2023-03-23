<?php

// class bmw 
// {
//     public $name;

//     function move(){
//         echo "move ".$this->name."<br>";
//     }
// }



// $b1 = new bmw;
// $b1->name = "bmw x6";
// $b1->move();


// $b2 = new bmw;
// $b2->name = "bmw new ";
// $b2->move();


// class car 
// {
//     public $color;

//     function move()
//     {
//         echo "move";
//     }
// }



// class fiat extends car{
//     function stop () 
//     {
//         echo "stop";
//     }
// }

// $f  = new fiat;
// $f->color = "red";
// print_r($f);

class car 
{
    private $color = "Red";
    function change(){
        echo "color is :".$this->color;
    }
}
// $c = new car;
// $c->change();
// echo $c->color;

class bmw extends car 
{
    function newchange()
    {
        echo "color change is :".$this->color;
    } 
}

$b = new bmw;
$b->newchange();









