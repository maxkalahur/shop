<?php

if( $_action == 'basket' ) {
    $cartProducts = [];

    foreach ($_SESSION['basket'] as $id) {
        $cartProducts[] = getProduct($pdo, $id)[0];
    }

    view('basket', ['products' => $cartProducts]);
}