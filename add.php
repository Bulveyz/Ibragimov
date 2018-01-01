<?php
include 'db.php';

$load = R::load('products', $_POST['id']);
$cart = R::findOne('cart', 'title = ?', array($load['title']));


if ($cart == 1)
{
    $a = $cart['count'] + 1;
    $i = $a++;

    $b = $cart['price'] + $load['price'];


    $cart->count = $i;
    $cart->price = $b;
    R::store($cart);
}
else
{
    $add = R::dispense('cart');
    $add->title = $load['title'];
    $add->img = $load['img'];
    $add->price = $load['price'];
    $add->count = 1;
    $add->uid = $load['id'];
    R::store($add);
}


exit();