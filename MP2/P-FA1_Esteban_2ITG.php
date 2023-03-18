<?php 
    class Tshirt{
        private $name;
        private $size;
        private $price;

        //getters and setters
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function setSize($size){
            $this->size = $size;
        }
        public function getSize(){
            return $this->size;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function getPrice(){
            return $this->price;
        }

        public function displayInfo(){

            echo $this->getName()." embroidered shirt in ". $this->getSize()." size costs ". $this->getPrice()." Pesos. <br>";
        }

    }

    class Freebie extends Tshirt{
        private $freebie;

        public function __construct($freebie)
        {
            $this->freebie=$freebie;
        }

        public function getfreebie(){
            return $this->freebie;
        }

        public function printInfo()
        {
            echo $this->getName()." will get a ".$this->getfreebie()."<br>";
        }
       
        //overidden display info
        public function displayInfo()
        {
            echo $this->getfreebie(). " is a gift freebie, ";
        }
        //overloaded print info       
        public function printInfo2($surprise)
        {
            echo $this->getfreebie(). " with surprise ".$surprise. "<br><br><br>";
        }
    }

    //multilevel
    class OrderType extends freebie{
        private $otype;

        public function setType($otype){
            $this->otype = $otype;
        }
        public function getType()
        {
            return $this->otype;
        }

    }

    //heirarchical
    class Additional extends Tshirt{
        private $add;

        public function setAdd($add){
            $this->add = $add;
        }
        public function getAdd(){
            return $this->add;
        }
    }

    //object1
    echo ("<br>");
    $Tshirt = new Tshirt();
    $Tshirt->setName("Blackpink"); 
    $Tshirt->setSize("MEDIUM"); 
    $Tshirt->setPrice(300);
    $Tshirt->displayInfo();
    
    $Freebie = new Freebie("Random glittered photocard");
    $Freebie->setName("Every Blackpink shirt order");
    $Freebie->printInfo();
    $Freebie->displayInfo();
    $Freebie->printInfo2("QR code to scan.");

    //object2
    $Tshirt = new Tshirt();
    $Tshirt->setName("Enhypen");
    $Tshirt->setSize("SMALL");
    $Tshirt->setPrice(400);
    $Tshirt->displayInfo();
     
    $Freebie = new Freebie("Random keychain");
    $Freebie->setName("Every Enhypen shirt order");
    $Freebie->printInfo();
    $Freebie->displayInfo();
    $Freebie->printInfo2("mini lomo card.");

    //object3
    $Tshirt = new Tshirt();
    $Tshirt->setName("Twice");
    $Tshirt->setSize("LARGE");
    $Tshirt->setPrice(500);
    $Tshirt->displayInfo();
     
    $Freebie = new Freebie("Group poster");
    $Freebie->setName("Every Twice shirt order");
    $Freebie->printInfo();
    $Freebie->displayInfo();
    $Freebie->printInfo2("random photocard.");

?>
