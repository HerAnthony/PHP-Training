<?php
class Square
{
    public $width = 0;
    public function circumference(){
        return ($this->width * 4);
    }
}

class Rectangle
{
        public $length = 0;
        public $width = 0;
        public function testy(){
            echo "it works";
        }
        public function getPerimeter(){
            return (($this->length + $this->width)*2);
        }
        public function getArea(){
            return ($this->length * $this->width);
        }
}

?>