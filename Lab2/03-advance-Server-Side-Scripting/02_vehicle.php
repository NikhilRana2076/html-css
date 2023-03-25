<?php 

    class Vehicle{
        public function accelerate(){
            echo "accelerate<br>";
        }
        public function brake(){
            echo "brake<br>";
        }
        public function steering(){
            echo "sterring<br>";
        }
    }

    class Aeroplane extends Vehicle{
       
        public function autoPilotMode(){
            echo "auto pilotMode<br>";
        }

        public function takeOff(){
            echo "takeoff<br>";
        }

        public function Landing(){
            echo "landing<br>";
        }

    }

    class Bike extends Vehicle{
        public function ABS(){
            echo "automatic braking system<br>";
        }

        public function drift(){
            echo "drifting<br>";
        }

        public function gpsMode(){
            echo "gps mode enabled<br>";
        }

    }

    $airbus = new Aeroplane();
    $airbus->accelerate();
    $airbus->brake();
    $airbus->steering();
    $airbus->autoPilotMode();
    $airbus->takeOff();
    $airbus->Landing();


    $splender = new Bike();
    $splender->accelerate();
    $splender->brake();
    $splender->steering();
    $splender->ABS();
    $splender->drift();
    $splender->gpsMode();



?>
