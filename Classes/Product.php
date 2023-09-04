<?php

class Product{

    protected $productId;
    public $categoryId;
    public $name;
    public $description;
    public $price;
    public $isForDogs;
    public $isForCats;

    public function __construct($_categoryId, $_name, $_description, $_price, $_isForDogs, $_isForCats)
    {   
        $this->productId = rand(0,10**10);
        $this->categoryId = $_categoryId;
        $this->name=$_name;
        $this->description=$_description;
        $this->price=$_price;
        $this->isForDogs=$_isForDogs;
        $this->isForCats=$_isForCats;

    }

}


// class User{

//     protected $id;
//     protected $name;
//     protected $surname;
//     protected $email;
//     protected $phone;
//     public array $cart=[];


    
//     public function __construct( $_email, $_phone)
//     {
//         $this->setter($this->id, rand(0,(10*10)));

//         $this->setter($this->email, $_email);
//         $this->setter($this->phone, $_phone);

//     }
//     public function getter($property){

//         return $this->$property;

//     }
    
//     public function setter($property,$_value){

//         $this->$property=$_value;

//     }

//     public function addToCart($_instance){

//         $this->cart[]= $_instance -> productId ;


//     }
// }

// class Guest extends User{

    
// }

// class Registered extends User{

//     protected $name;
//     protected $surname;


//     public function __construct($_name, $_surname, $_email, $_phone)
//     {
//         parent::__construct($_email, $_phone);
        
//         $this->setter($this->name, $_name);
//         $this->setter($this->surname, $_surname);
//     }




// }

?>

