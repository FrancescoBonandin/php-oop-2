<?php



$arrayProdotti=[

    $crocchetteCani=[
        'categoryId'=>1,
        'name'=>'crockane',
        'description'=>'crocchette per cani',
        'price'=> 9.99,
        'isForDogs'=>true,
        'isForCats'=>false,
        'foodtype'=>'crocchette',
        'isForCubs'=>false,
        'nutritionalValues'=>null
    ],
    $crocchetteGatti=[
        'categoryId'=>1,
        'name'=>'crockatto',
        'description'=>'crocchette per gatti',
        'price'=> 9.99,
        'isForDogs'=>false,
        'isForCats'=>true,
        'foodtype'=>'crocchette',
        'isForCubs'=>false,
        'nutritionalValues'=>null
    ],
    $giocoCani=[
        'categoryId'=>2,
        'name'=>'giocane',
        'description'=>'giocattolo per cani',
        'price'=> 6.99,
        'isForDogs'=>true,
        'isForCats'=>false,
        'materials'=>'gomma',
        'toyType'=>'sonoro',
    ],
    $giocoGatti=[
        'categoryId'=>2,
        'name'=>'giogattolo',
        'description'=>'giocattolo per gatti',
        'price'=> 6.99,
        'isForDogs'=>false,
        'isForCats'=>true,
        'materials'=>'gomma',
        'toyType'=>'sonoro',
    ],
    $cucciaCani=[
        'categoryId'=>3,
        'name'=>'tobia',
        'description'=>'cuccia per cani',
        'price'=> 16.99,
        'isForDogs'=>true,
        'isForCats'=>false,
        'materials'=>'legno',
        'isForOutdoor'=>true,
        'dimensions'=> 'lu 100cm x la 50cm x h 50cm'
    ],
    $cucciaGatti=[
        'categoryId'=>3,
        'name'=>'felix',
        'description'=>'letto per gatti',
        'price'=> 16.99,
        'isForDogs'=>false,
        'isForCats'=>true,
        'materials'=>'tessuto',
        'isForOutdoor'=>false,
        'dimensions'=> 'lu 50cm x la 50cm x h 20cm'
    ],
    
]

?>