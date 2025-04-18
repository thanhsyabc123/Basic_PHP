<?php
    echo "OOP - Object Oriented Programming.<br/>";
    class User{
        //properties
        protected $name;
        public $age;
        public $email;
        public $password;
        //constructor: function that runs when an object is instantiated
        public function __construct($name,
                                    $age,
                                    $email,
                                    $password)
        {
            // echo "construct run" . "<br/>";
            $this->name=$name;
            $this->age=$age;
            $this->email=$email;
            $this->password=$password;
        }
        //method: a function that belongs to a class
        function setName($name){
            $this->name=$name;
        }
        //getter
        function getName(){return $this->name;}
    }
    // init object
    $user1 = new User('sy',12,'e1e@gmail.com','1321414');
    $user1 = new User('sy24',22,'e41241e@gmail.com','13r32321414');
    // $user1->name = 'Sy';
    // $user1->email = 'sy@gmail.com';
    // $user1->password = '123456';
    // $user1->setName('Sy');
    // $user2->setName('Nsaodj');
    // print_r($user1);
    // print_r($user2);
    // echo $user1->getName()."\n";
    // echo $user2->getName();
    // echo $user1->email;
    //inheritance
    class Employee extends User{
        public $title;
        public function __construct($name,
                                    $age,
                                    $email,
                                    $password,
                                    $title)
        {
            parent::__construct($name, $age, $email, $password);
            $this->title =$title;
        }
        public function getTitle(){
            return $this->title;
        }
    }
    $employee1 = new Employee('sy',12,'e1e@gmail.com','1321414','Sale');
    echo $employee1->title;
?>