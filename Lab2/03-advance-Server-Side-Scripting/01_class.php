<?php 

     class Student{
        private $name, $age, $gender, $address;

        public function get_name(){
            return $this->name;
        }

        public function get_age(){
            return $this->age;
        }

        public function get_gender(){
            return $this->gender;
        }

        public function get_address(){
            return $this->address;
        }

        public function set_name($name){
            $this->name = $name;
        }

        public function set_age($age){
            $this->age = $age;
        }

        public function set_gender($gender){
            $this->gender = $gender;
        }

        public function set_address($address){
            $this->address = $address;
        }

     }

     $saurab = new Student();
     $saurab->set_name("Saurab Tharu");
     $saurab->set_age("21");
     $saurab->set_gender("Male");
     $saurab->set_address("Kirtipur");

     echo 'Name: '. $saurab->get_name()."<br>";
     echo 'Age: '.$saurab->get_age()."<br>";
     echo 'Gender: '.$saurab->get_gender()."<br>";
     echo 'Address: '.$saurab->get_address()."<br>";

?>
