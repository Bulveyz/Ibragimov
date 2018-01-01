<?php
include 'db.php';

$load = R::load('cart', $_POST['id']);
$cart = R::load('products', $load['uid']);

if ($load['count'] > 1)
{
    $a = $load['count'] -1;
    $i = $a--;

    $b = $load['price'] - $cart['price'];

    $load->count = $i;
    $load->price = $b;
    R::store($load);
}
else
{
    R::trash($load);
}


exit();