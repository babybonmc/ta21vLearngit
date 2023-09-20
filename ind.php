<?php 

class Box {
    private $width;
    private $height;
    private $length;

    public function __construct($width, $height, $length){
        $this->width = $width;
        $this->height= $height;
        $this->length = $length;
    }
    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box{
    use Colorful;
    
    public $weight;

    public function mass(){
        return $this->volume() * $this->weight;
    }
}

trait Colorful {
    public $color;

    public function getColor(){
        return $this->color;
    }
}

$box = new Box(1, 2, 3);
var_dump($box);
$box2 = new Box(4, 5, 6);
var_dump($box2);
var_dump($box);
var_dump($box->volume());
$metalbox = new MetalBox(5, 2, 5);
$metalbox->weight - 2;
var_dump($mentalbox->height);
var_dump($metalbox->volume());
var_dump($metalbox->mass());