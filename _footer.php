<?php
/**
 * Created by PhpStorm.
 * User: borod
 * Date: 25.09.2018
 * Time: 15:01
 */
?>
<footer class="footer" id="footer">
    <div class="content content--md">
        <div class="footer-top">
            <div class="footer-top--order">
                <div class="order">
                    <span class="title">Заказ проекта:</span>
                    <a href="tel:88002001714">8 800 200-17-14</a>
                </div>
                <div class="consultation">
                    <a href="#" class="btn btn--round show-modal" data-modal="consultation">Консультация</a>
                </div>
            </div>

            <div class="sharing ">
                <div class="title">Поделиться</div>
                <ul>
                    <li>
                        <a href="#" class="ico ico-fb">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-fb"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ico ico-gg">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-gg"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ico ico-vk">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-vk"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ico ico-ok">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-ok"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="footer-main">
            <div class="footer-main--nav">
                <section class="section columns">
                    <h4 class="title">проекты</h4>
                    <ul>
                        <li><a href="#">Деревянные дома</a></li>
                        <li><a href="#">Каменные дома</a></li>
                        <li><a href="#">Каркасные дома</a></li>
                        <li><a href="#">Комбинированные дома</a></li>
                        <li><a href="#">Бани</a></li>
                        <li><a href="#">Индивидуальное проектирование</a></li>
                        <li><a href="#">Новинки</a></li>
                        <li><a href="#">Скидки</a></li>
                        <li><a href="#">Бесплатные проекты</a></li>
                        <li><a href="#">Как купить проект</a></li>
                    </ul>
                </section>
                <section class="section">
                    <h4 class="title">проектирование</h4>
                    <ul>
                        <li><a href="#">О готовых проектах</a></li>
                        <li><a href="#">Все о согласовании проектов</a></li>
                        <li><a href="#">Реализация</a></li>
                        <li><a href="#">Что входит в проект</a></li>
                        <li><a href="#">Гарантии и безопасность</a></li>
                    </ul>
                </section>
                <section class="section">
                    <h4 class="title">Услуги</h4>
                    <ul>
                        <li><a href="#">Адаптация фундаментов</a></li>
                        <li><a href="#">Разработка раздела ИР</a></li>
                        <li><a href="#">Посадка дома на участок</a></li>
                        <li><a href="#">Разработка паспорта проекта</a></li>
                    </ul>
                </section>
                <section class="section">
                    <h4 class="title">Arplans</h4>
                    <ul>
                        <li><a href="#">Все контакты</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Клуб партнеров</a></li>
                        <li><a href="#">Коттеджные поселки</a></li>
                        <li><a href="#">Сотрудничество</a></li>
                        <li><a href="#">Блог</a></li>
                    </ul>
                </section>
            </div>
            <div class="footer-main--logo">
                <a href="index.html">
                    <img src="assets/svg/partials/logo-mini.svg" alt="ARPLANS">
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom--copyright">© 2008-2018 ARPLANCE готовые проекты домов и индивидуальное проектирование</div>
            <div class="footer-bottom--auth">Сделано <a href="http://reconcept.ru" target="_blank">Reconcept</a></div>
        </div>
    </div>
</footer>





</div>

</div>

<div class="modal" data-modal="consultation">
    <div class="bg close"></div>
    <div class="modal-box">
        <span class="close">&times;</span>
        <h3 class="modal-title">Мы очень быстро свяжемся с вами</h3>
        <div class="modal-form">
            <form action="#">
                <div class="modal-form--fields">
                    <div class="custom-form">
                        <div class="form-row-element">
                            <div class="input">
                                <input type="text" placeholder="*Ваше телефон, e-mail или любой другой контакт" name="name">
                            </div>
                        </div>
                        <div class="form-row-element">
                            <div class="textarea">
                                <textarea rows="3" placeholder="Ваше сообщение" name="message"></textarea>
                            </div>
                        </div>
                        <div class="form-row-element">
                            <div class="file">
                                <input type="file" id="fileUpload">
                                <label for="fileUpload">
                                    <i class="icon-loadFile">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-file-change"/>
                                        </svg>
                                    </i>
                                    <span id="fileName" data-default="Прикрепить файл">Прикрепить файл</span>
                                </label>
                                <i id="fileRemove" class="remove hide">&times;</i>
                            </div>
                        </div>
                    </div>
                    <div class="filter-form">
                        <div class="form-row-element">
                            <div class="check">
                                <label>
                                    <input type="checkbox">
                                    <span>Согласен на <a href="#"> обработку </a> персональных данных</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-form--submit">
                    <button class="btn btn--lt">Отправить</button>
                </div>
            </form>
        </div>
        <div class="modal-thanks">
            <h4 class="modal-thanks--title">Спасибо!</h4>
            <p>На указанную Вами почту строители-патртнеры АРПЛАНС вышлют сметы на строительство выбранного вами дома. </p>
        </div>
    </div>
</div>



<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/wNumb.js"></script>
<script type="text/javascript" src="assets/js/nouislider.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/main.min.js"></script>
<script src="assets/js/script.js"></script>

<script>

    $('[data-modal="consultation"] form').validate({
        onfocusout: false,
        ignore: ".ignore",
        rules: {
            name: {required: true},
            message: {required: true}
        },
        messages: {
            name: {required: ""},
            message: {required: ""}
        },
        errorClass: 'invalid',
        highlight: function(element, errorClass) {
            $(element).closest('.form-row-element').addClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).closest('.form-row-element').removeClass(errorClass)
        },
        errorPlacement: $.noop,
        submitHandler:function (form) {
            $('[data-modal="consultation"]').addClass('successful');
            // if (form.valid()){
            //     form.submit();
            // }
            return false;
        }
    })

</script>


<!--script-->


</body>
</html>
