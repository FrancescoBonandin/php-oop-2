<?php

require_once __DIR__.'/Classes/AnimalCategory.php';
require_once __DIR__.'/Classes/Product.php';
require_once __DIR__.'/Classes/Food.php';
require_once __DIR__.'/Classes/Toy.php';
require_once __DIR__.'/Classes/Bed.php';
require_once __DIR__.'/DB.php';


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

                        <div class="col-4 p-3">
                            <div class="card text-center">

                                <div class="card-body">

                                <?php

                                    echo "name: $prodotto->name";
                            
                                    foreach($prodotto as $key => $property){

                                        if($key=='name'){

                                        }

                                        elseif(is_bool($property) ){

                                            if ($property == true){

                                                echo "<div>$key? Yes</div>";
                                            }

                                         
                                            else {

                                                echo "<div>$key? No </div>";
                                            }

                                        }

                                        elseif($key=='isFor'){

                                            echo "$property->icon $property->name ";
                                        }

                                        elseif (is_float($property)){

                                            $replacedString = str_replace('.',',',$property);

                                            echo "<div>$key: $replacedString € </div>";

                                        }

                                        elseif(isset($property)){

                                            echo "<div>$key: $property </div>";

                                        }

                                        else{

                                            try{

                                                throw new Exception("questo valore($key) non viene controllato o é nullo");
                                            }
                                            catch(Exception $exc){

                                                echo $exc->getMessage().'<div> </div>
                                                <div class="tenor-gif-embed" data-postid="9628120" data-share-method="host" data-aspect-ratio="1.55" data-width="100%">
                                                <a href="https://tenor.com/view/jurassic-park-ah-you-didnt-say-the-magic-word-say-please-gif-9628120">Jurassic Park Ah GIF</a>from <a href="https://tenor.com/search/jurassic+park-gifs">Jurassic Park GIFs</a></div> 
                                                    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>';
                                                

                                            }
                                        }


                                    }

                                    echo 'category:'.get_class($prodotto);
                                    
                                ?>
                                    
                                </div>

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