<?php

abstract class Shape{

    abstract function area();
    abstract function environment();

}
class Rectangle extends Shape{

    public $short_edge;
    public $long_edge;


    public function __construct($short_edge, $long_edge){
        $this->short_edge = $short_edge;
        $this->long_edge = $long_edge;
    }


    function area(){
        return $this->long_edge*$this->short_edge;

    }

    function environment()
    {
        return $this->long_edge*2+$this->short_edge*2;
    }
}
class Square extends Shape{
    public $edge;


    public function __construct($edge)
    {
        $this->edge = $edge;
    }

    function area()
    {
        return $this->edge*$this->edge;
    }

    function environment()
    {
        return $this->edge*4;
    }
}
class Triangle extends Shape{
    public $edge3;
    public $edge1;
    public $edge2;


    public function __construct($edge3, $edge1, $edge2){
        $this->edge3 = $edge3;
        $this->edge1 = $edge1;
        $this->edge2 = $edge2;
    }


    function area(){
        // Heron's formula:
        // A = SquareRoot(s * (s - a) * (s - b) * (s - c))
        // where s = (a + b + c) / 2, or 1/2 of the perimeter of the triangle

        $s=($this->edge1+$this->edge2+$this->edge3)/2;
        return ($s*($s-$this->edge1)*($s-$this->edge2)*($s-$this->edge3));
    }

    function environment()
    {
       return $this->edge3+$this->edge2+$this->edge1;
    }
}