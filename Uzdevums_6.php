<?php
//Narvesen
/**
 * precu katalogs -list of products
 * pircejs -a simple object
 * iepirkshanas grozs  array containing products +int [$x=> 1,#y=>3,$c=>10]
 * ieperkoties narvisena pircejam jabut iespeji ielikt 1 vai vairak preces groza
 * groza var ielikt preces tik daudz cik veikala atrodas
 * beigas iespeja veikt apmaksu pa visu grozu
 *
 */
function createProduct($name,$price,$qty,$id):stdClass
{
$product=new stdClass();
$product->name=$name;
$product->price=$price;
$product->quantity= $qty;
$product->id=$id;

return $product;
}
$products=[
    createProduct('Milke',1.5,10,1),
    createProduct('Vodka',14.40,4,2),
    createProduct('Vobla',1,200,3),
    createProduct('Cocke',2,10,4)

];

echo "Welcome to Narvisen:".PHP_EOL;
$input=readline("How much money you you got? ");//te bus nauda
if(is_numeric($input)){
    echo "Nice you got some money:  ".PHP_EOL;
}else{
    echo "invalid input!!".PHP_EOL;
    exit;
}
$buy='b';

$basket=[];
while(true){
    $tobuy=readLine("to by press: b-toBuy/e-for exit: ");
    if($tobuy==='b'){
        foreach($products as $produkt){
            echo "Products:{$produkt->name}. Price:{$produkt->price} . On stock {$produkt->quantity}.Products Id {$produkt->id}.".PHP_EOL;

        }
        $buy =readline("Input ID to by: ");
if(array_key_exists($buy,$products)){
    if($produkt->quantity>0){
        $basket=array_push($basket,$products[$buy]);
        echo " You add to basket".PHP_EOL;
    }
}
    }if ($tobuy==='e'){
        echo "by by";
        exit;
    }

}


