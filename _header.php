<?php
/**
 * Created by PhpStorm.
 * User: borod
 * Date: 01.10.2018
 * Time: 13:37
 */
?>
<div class="header-main">
    <div class="content content--lg">
        <div class="header-main--wrap">
            <div class="header-main--logo"></div>
            <div class="header-main--nav">
                <nav>
                    <ul class="menu-elements">
                    </ul>
                </nav>
            </div>
            <div class="header-main--stats">
                <!--                <a href="#" class="stats stats-likes">-->
                <!--                    <span id="api-favorites-count">34</span>-->
                <!--                    <i class="icon-likes">-->
                <!--                        <svg xmlns="http://www.w3.org/2000/svg">-->
                <!--                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-heart"/>-->
                <!--                        </svg>-->
                <!--                    </i>-->
                <!--                </a>-->
                <a onclick="askPage('/cart',{guid:cartId})" class="stats stats-prods">
                    <span id="api-cart-count"></span>
                    <i class="icon-basket">
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-basket"/>
                        </svg>
                    </i>
                </a>
                <div class="burger desktop-hidden">
                    <span></span>
                    <span></span>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="header-mobile desktop-hidden">
    <div class="bg"></div>
    <nav class="header-mobile--nav">
        <ul>
            <li class="show-more-parent">
                <span class="show-more">Готовые проекты домов <span class="tick"></span></span>
                <ul class="show-more-hidden menu-elements">
                </ul>
            </li>
        </ul>
    </nav>
</div>
</header>