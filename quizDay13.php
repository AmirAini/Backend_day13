<?php

//class store
    class Shop {
        // properties 
        public $name;
        public $itemList;
    

        function __construct($name) {
            $this->name = $name;
            
        }
        
        //method
        function getName(){
            return $this->name;
        }

        function addItemList($itemList){
            $this->itemList = $itemList;
        }

        function getItemListEcho(){
            
            foreach ($this-> itemList as $item) {
                echo "$item".", ";
            }
        }

        function getItemList(){
            return $this->itemList;
        }
    
        function boughtItem($itemArr){
            $this->itemList = array_diff($this->itemList, $itemArr);
        }

        function addItem($itemArr){
            $this->itemList = array_merge($this->itemList,$itemArr);
        }
    }

//class 
    class Person {
        public $itemBought;
        private $name;

        function __construct($name) {
            $this->name = $name;
            
        }

        function buyItem($itemArr, $shopName){
            $this->itemBought = $itemArr;
            $shopName ->boughtItem($itemArr);
        }

        function getBoughtItemEcho(){
            echo $this->name.' has bought ';
            foreach ($this-> itemBought as $item) {
                echo "$item".", ";
            }
        }
        
    }




$newShop = new shop("onlineShop");
$newShop -> addItemList(["a","b","c","d","e","f","g","h","i"]);

echo 'The online shop has ';
$newShop->getItemListEcho();



$Kevin = new Person("Kevin");
$Kevin -> buyItem(["a","b","c"],$newShop);
echo "<br>";
$Kevin -> getBoughtItemEcho();
echo "<br>";
echo "After Kevin has bought the items, the shop now contains ";
$newShop->getItemListEcho();

$Fikri = new Person("Fikri");
$Fikri -> buyItem(["d","e","f"],$newShop);
echo "<br>";
$Fikri -> getBoughtItemEcho();
echo "<br>";
echo "After Fikri has bought the items, the shop now contains ";
$newShop->getItemListEcho();

// add items
echo "<br>";
echo "<br>";
echo "<br>";    
echo 'Now, the shop add more items to the shop due to low stock level';
$newShop -> addItem(["j","k","l","m","n"]);
echo "<br>";
echo 'The online shop has ';
$newShop->getItemListEcho();

// now Arjun can shop also
echo "<br>";
echo "<br>";
echo "<br>";
$Arjun = new Person("Arjun");
$Arjun -> buyItem(["j","k","l"],$newShop);
echo "<br>";
$Arjun -> getBoughtItemEcho();
echo "<br>";
echo "After Arjun has bought the items, the shop now contains ";
$newShop->getItemListEcho();
 ?>