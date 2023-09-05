<?php


require_once __DIR__.'/../Traits/Category-Product-User_Traits.php';
require_once __DIR__.'/AnimalCategory.php';

class Product{

    use CatProUsr;

    protected int $productId;
    public int $categoryId;
    public string $description;
    public float $price;
    public AnimalCategory $isFor;

    public function __construct($_categoryId, $_name, $_description, $_price, $_isFor)
    {   
        $this->productId = rand(0,10**10);
        $this->categoryId = $_categoryId;
        $this->name=$_name;
        $this->description=$_description;
        $this->price=$_price;
        $this->isFor=$_isFor;

    }

}




// class User{


//     use CatProUsr;

//     protected $id;
//     protected $surname;
//     protected $email;
//     protected $phone;
//     protected $ccExpirationDate;
//     public array $cart=[];


    
//     public function __construct( $_email, $_phone){

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

//     public function RemoveFromCart($_instance){

//         array_splice($this->cart, array_search($_instance -> productId, $this -> cart), 1 );

//     }

//     public function pay(){

//         $checkout=0.00;

//         if(strtotime($this->ccExpirationDate)<=date('Y/m/d') ){

//             foreach($this->cart as $product){
    
//               $checkout+=$product->price;
             
//             }
    
//         }
         

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

