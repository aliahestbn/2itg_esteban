<?php 

    class Tshirt{
        private $color;
        private $size;
        private $price;

        //getters and setters
        public function setColor($color){
            $this->color = $color;
        }
        public function getColor(){
            return $this->color;
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

            echo $this->getColor()." embroidered shirt in ". $this->getSize()." size costs ". $this->getPrice()." Pesos. <br>";
        }

    }

    class Freebie extends Tshirt{

        public function __construct(private $freebie)
        {
            $this->freebie;
        }

        //getter
        public function getfreebie(){
            return $this->freebie;
        }

        public function printInfo()
        {
            echo $this->getColor()." will get a ".$this->getfreebie()."<br>";
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
        private $type;

        public function setType($type){
            $this->type = $type;
        }
        public function getType()
        {
            return $this->type;
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

    echo ("<br>");
    $Tshirt = new Tshirt();
    $Tshirt->setColor("Blackpink"); 
    $Tshirt->setSize("MEDIUM"); 
    $Tshirt->setPrice(300);
    $Tshirt->displayInfo();
    
    $Freebie = new Freebie("Random glittered photocard");
    $Freebie->setColor("Every Blackpink shirt order");
    $Freebie->printInfo();
    $Freebie->displayInfo();
    $Freebie->printInfo2("QR code to scan.");

    $Tshirt = new Tshirt();
    $Tshirt->setColor("Enhypen");
    $Tshirt->setSize("SMALL");
    $Tshirt->setPrice(400);
    $Tshirt->displayInfo();
     
    $Freebie = new Freebie("Random keychain");
    $Freebie->setColor("Every Enhypen shirt order");
    $Freebie->printInfo();
    $Freebie->displayInfo();
    $Freebie->printInfo2("mini lomo card.");

    $Tshirt = new Tshirt();
    $Tshirt->setColor("Twice");
    $Tshirt->setSize("LARGE");
    $Tshirt->setPrice(500);
    $Tshirt->displayInfo();
     
    $Freebie = new Freebie("Group poster");
    $Freebie->setColor("Every Twice shirt order");
    $Freebie->printInfo();
    $Freebie->displayInfo();
    $Freebie->printInfo2("random photocard.");

?>
