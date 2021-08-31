<?php
function createProduct($name,$price,$qty):stdClass
{
    $product=new stdClass();
    $product->name=$name;
    $product->price=$price;
    $product->quantity= $qty;


    return $product;
}
$products=[
    createProduct('[0] Milke',150,10),
    createProduct('[1] Vodka ',1440,4),
    createProduct('[2] Vobla/werry old',2,200),
    createProduct('[3] Cocke ',200,10),
    createProduct('[4] Viagra /1 pill',20000,2)

];
echo "Welcome to Purch-Nervs! ".PHP_EOL;

echo "----------------------------".PHP_EOL;
foreach ($products as $product){
    $price=$product->price ;
    echo "{$product->name}/{$price}$ ({$product->quantity})".PHP_EOL;

}
echo "----------------------------".PHP_EOL;
$cart=[];
while(true) {
    $selection = (int)readline("Select product: ");

    if (!isset($products[$selection])) {
        echo "Products not found" > PHP_EOL;
        exit;
    }
    echo "----------------------------" . PHP_EOL;
    $quantity = readline("Enter quantity : ") . PHP_EOL;
    if ($quantity > $products[$selection]->quantity) {
        echo "Selection to much" . PHP_EOL;
        exit;
    }
    echo "----------------------------" . PHP_EOL;
    $continueshopping = readline("Buy something else? : yes/no? ");

    while ($continueshopping === true) {
        if ($continueshopping == 'yes') {
            continue;
        } else {

            exit;
        }
    }
    echo "----------------------------" . PHP_EOL;
    $selectedProduct = clone $products[$selection];
    $selectedProduct->quantity = $quantity;
    $cart[] = $selectedProduct;


    $total = 0;
    echo "Your shopping cart contains: " . PHP_EOL;
    foreach ($cart as $item) {
        echo $item->name . " x " . $item->quantity . " for " . ($item->price /100) ."$ " . PHP_EOL;
        $total += $product->price * $product->quantity;
    }
    echo "You must pay " . $total/100 . "$" . PHP_EOL;
}