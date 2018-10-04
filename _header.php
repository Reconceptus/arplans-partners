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
                <ul class="show-more-hidden">
                    <li><a href="#">Деревянные дома</a></li>
                    <li><a href="#">Каменные дома</a></li>
                    <li><a href="#">Каркасные дома</a></li>
                    <li><a href="#">Комбинированные дома</a></li>
                    <li><a href="#">Бани</a></li>
                    <li><a href="#">Индивидуальный проект</a></li>
                </ul>
            </li>
            <li class="show-more-parent">
                <span class="show-more">Услуги <span class="tick"></span></span>
                <ul class="show-more-hidden">
                    <li><a href="#">Индивидуальное проектирование</a></li>
                    <li><a href="#">Адаптация фундамента</a></li>
                    <li><a href="#">Разработка раздела игр</a></li>
                    <li><a href="#">Посадка дома на участок</a></li>
                    <li><a href="#">Разработка паспорта проекта</a></li>
                </ul>
            </li>
            <li>
                <span>
                    <a href="#">Контакты</a>
                </span>
            </li>
            <li>
                <span>
                    <a href="#">Консультация</a>
                </span>
            </li>
            <li>
                <span>
                    <a href="#">О нас</a>
                </span>
            </li>
            <li>
                <span>
                    <a href="#">Сотрудничество</a>
                </span>
            </li>
            <li>
                <span>
                    <a href="#">Коттеджные поселки России</a>
                </span>
            </li>
            <li>
                <span>
                    <a href="#">Строители и магазины</a>
                </span>
            </li>
        </ul>
    </nav>
</div>
</header>