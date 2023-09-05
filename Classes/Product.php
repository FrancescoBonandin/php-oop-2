<?php


require_once __DIR__.'/../Traits/Category-Product_Traits.php';
require_once __DIR__.'/AnimalCategory.php';

class Product{

    use CatPro;

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

    public function getProductId(){

        return $this->productId;

    }
}




class User{


    protected $id;
    protected $surname;
    protected $email;
    protected $phone;
    protected $ccExpirationDate;
    public array $cart=[];
    public $checkout;


    
    public function __construct($_surname, $_email, $_phone, $_ccExpirationDate){

        $this->setter($this->id, rand(0,(10*10)));

        $this->setter($this->surname, $_surname);
        $this->setter($this->email, $_email);
        $this->setter($this->phone, $_phone);
        $this->setter($this->ccExpirationDate, $_ccExpirationDate);

    }

    public function getter($property){

        return $this->$property;

    }
    
    public function setter($_property, $_value){

        $this->$_property=$_value;

    }

    public function addToCart($_instance){

        $this->cart[]= $_instance->getProductId();

    }

    public function RemoveFromCart($_instance){

        array_splice($this->cart, array_search($_instance -> productId, $this -> cart), 1 );

    }

    public function pay($_arrayprodotti){

        $this->checkout=0.00;

        if($this->getter($this->ccExpirationDate) > date('Y/m')){

            foreach($this->cart as $productId){

                foreach($_arrayprodotti as $product){
                    
                    if($productId==$product->getProductId()){

                        $this->checkout+=$product->price;
                    }

                }

            }
    
        }

        else{

            throw new Exception('la carta inserita non é valida');

        }

        return number_format($this->checkout,2);
    }

}

class Guest extends User{

    
}

class Registered extends User{

    protected $name;


    public function __construct($_name, $_surname, $_email, $_phone, $_ccExpirationDate)
    {
        $this->setter($this->name, $_name);

        parent::__construct($_surname, $_email, $_phone, $_ccExpirationDate);
        

    }

    public function pay($_arrayprodotti){

        $this->checkout=0.00;

        if($this->getter($this->ccExpirationDate) > date('Y/m')){

            foreach($this->cart as $productId){

                foreach($_arrayprodotti as $product){
                    
                    if($productId==$product->getProductId()){

                        $this->checkout+=$product->price;
                    }
                    
                }

            }
            
            $this->checkout=$this->checkout*0.80;
    
            return number_format($this->checkout, 2);
        }

        else{

            throw new Exception('la carta inserita non é valida');

        }

    }

     




}

?>

