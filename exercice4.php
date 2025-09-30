<?php

$cart = [
    ["name" => "Laptop", "price" => 40, "quantity" => 3],
    ["name" => "Mouse", "price" => 10, "quantity" => 6],
    ["name" => "Keyboard", "price" => 20, "quantity" => 2]
];

function calculateTotal($cart) {
    $totalItem = 0;
    $total=0;
    foreach ($cart as $item) {
        $totalItem = $item["price"] * $item["quantity"];
        if($item["quantity"] > 5) {
            $totalItem *= 0.95; 
        } 
        $total += $totalItem;
    }

    if ($total > 100) {
    return $total * 0.9;
}
    else {
        return $total;

}
}
echo calculateTotal($cart);
?>