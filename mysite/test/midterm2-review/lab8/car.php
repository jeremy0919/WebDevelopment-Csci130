<?php
class Car { //: Create a class defining the type of object that you wish to represent in a website.
    public $brand;
    public $model;
    public $year;
    public $color;
    public $bodyStyle;
    public $transmission;
    public $type;
    public $image;

    function __construct($brand, $model, $year, $color, $bodyStyle, $transmission, $type, $image) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->bodyStyle = $bodyStyle;
        $this->transmission = $transmission;
        $this->type = $type;
        $this->image = $image;
    }
}
?>
