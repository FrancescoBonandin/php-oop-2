<?php

require_once __DIR__.'/DB.php';
require_once __DIR__.'/Classes/Product.php';
require_once __DIR__.'/Classes/Food.php';
require_once __DIR__.'/Classes/Toy.php';
require_once __DIR__.'/Classes/Bed.php';


?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-oop2</title>

        <!--Google Fonts-->
        

        <!-- FA -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- VUE -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        
        
    </head>
    
    <body>


        
        <!-- main -->
        <main>
            <div class="container">
                <div class="row">
                    <?php
                            foreach($arrayProdotti as $key => $product){
                                
                                if($product['categoryId'] == 1){
                                    
                                    $prodotto = new Food(...array_values($product));
                                    
                                }
                                
                                elseif($product['categoryId']==2 ){
                                    
                                    $prodotto = new Toy(...array_values($product));
                                    
                                }
                                
                                elseif($product['categoryId']==3){
                                    
                                    $prodotto = new Bed(...array_values($product));
                                    
                                }
                                
                                
                    ?>

                        <div class="col-auto">
                            <div class="card text-center">

                                <?php
                            
                                    foreach($prodotto as $key => $property){

                                        if (get_class($prodotto) =='Food'){

                                            if(is_bool($property) && $property == true){

                                                echo "<div>$key? Yes </div>";

                                            }
                                            elseif(is_bool($property) && $property == false){

                                                echo "<div>$key? No </div>";

                                            }

                                            elseif (is_float($property)){

                                               $replacedString = str_replace('.',',',$property);

                                               echo "<div>$key: $replacedString € </div>";

                                            }

                                            elseif(isset($property)){

                                                echo "<div>$key: $property </div>";

                                            }

                                        }

                                        elseif (get_class($prodotto) =='Toy'){

                                            if(is_bool($property) && $property == true){

                                                echo "<div>$key? Yes </div>";
                                            }

                                            elseif(is_bool($property) && $property == false){

                                                echo "<div>$key? No </div>";

                                            }

                                            elseif (is_float($property)){

                                                $replacedString = str_replace('.',',',$property);
 
                                                echo "<div>$key: $replacedString € </div>";
 
                                            }

                                            elseif(isset($property)){

                                                echo "<div>$key: $property </div>";

                                            }

                                        }

                                        if (get_class($prodotto) =='Bed'){

                                            if(is_bool($property) && $property == true){

                                                echo "<div>$key? Yes </div>";

                                            }

                                            elseif(is_bool($property) && $property == false){

                                                echo "<div>$key? No </div>";

                                            }

                                            elseif (is_float($property)){

                                                $replacedString = str_replace('.',',',$property);
 
                                                echo "<div>$key: $replacedString € </div>";
 
                                            }
                                            elseif(isset($property)){

                                                echo "<div>$key: $property </div>";

                                            }

                                        }

                                    }

                                    echo 'category:'.get_class($prodotto);
                                    
                                ?>

                            </div>

                        </div>
                    <?php
                        
                    }
                    ?>

                </div>
            </div>
        </main>
        <!-- fine main -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="js/my-script.js"></script>
    </body>

</html>