<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clases_3</title>
</head>
<body>
    <?php

        class cube{
            //variables
        public $height;
        public $width;
        public $length;
        
        // set dimensions
        public function set_heigth($height){
        $this->height = $height;
        }
        public function set_width($width){
        $this->width = $width;
        }
        public function set_length($length){
        $this->length = $length;
        }
        //this methods prints datas
        public function print_height_data(){
        echo "კუბის სიმაღლე არის: ". $this->height;
        }
        public function print_width_data(){
        echo "კუბის სიგანე არის: ". $this->width;
        }
        public function print_length_data(){
        echo "კუბის სიგრძე არის: ". $this->length;
        }
        }

        // create new obgect named cube
        $Cube_Height = new cube();

        $Cube_Height->set_heigth("22 სმ.");
        $Cube_Height->print_height_data();
        echo "<br/>";
        $Cube_Height->set_width("22 სმ.");
        $Cube_Height->print_width_data();
        echo "<br/>";
        $Cube_Height->set_length("22 სმ.");
        $Cube_Height->print_length_data();


    ?>
</body>
</html>