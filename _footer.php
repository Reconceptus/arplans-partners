<?php
/**
 * Created by PhpStorm.
 * User: borod
 * Date: 25.09.2018
 * Time: 15:01
 */
?>


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
<script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
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
