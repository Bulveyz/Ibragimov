<?php
include "db.php";
$cart = R::findAll('cart');
?>
<? foreach ($cart as $item): ?>
    <!--Cart Item 2-->
    <div class="d-flex flex-row">
        <!--Cart Img Item-->
        <div class="cart-menu__img">
            <img src="<?echo $item['img']?>" alt="" width="72" height="85">
        </div>
        <!--End Cart Img Item-->
        <!--Cart Info Item-->
        <div class="cart-menu__info">
            <div class="d-flex flex-column">
                <div class="cart-menu__info__name"><?echo $item['title']?></div>
                <div class="cart-menu__info__rank">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <div class="cart-menu__info__price"><?echo $item['count']?> x <span class='prico'><?echo $item['price']?></span></div>
            </div>
        </div>
        <!--End Cart Info Item-->
        <!--Cart Delete Item-->
        <div class="cart-menu__delete align-self-center">
            <i id="delete" data-id="<?echo $item['id']?>" class="fa fa-times-circle" aria-hidden="true"></i>
        </div>
        <!--End Cart Delete Item-->
    </div>
    <div class="dropdown-divider"></div>
    <!--End Cart Item 2-->
<? endforeach; ?>


