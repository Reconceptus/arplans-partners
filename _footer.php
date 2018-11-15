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
            <form action="#" id="consultation-form">
                <div class="modal-form--fields">
                    <div class="custom-form">
                        <input type="hidden" name="Request[url]" value="<?= $_SERVER['SERVER_NAME'] ?>">
                        <input type="hidden" name="Request[email]" value="<?= null ?>">
                        <input type="hidden" name="Request[name]" value="-">
                        <input type="hidden" name="Request[phone]" value="-">
                        <input type="hidden" name="Request[type]" value="5">
                        <div class="form-row-element">
                            <div class="input">
                                <input type="text" placeholder="*Ваше телефон, e-mail или любой другой контакт"
                                       name="Request[contact]">
                            </div>
                        </div>
                        <div class="form-row-element">
                            <div class="textarea">
                                <textarea rows="3" placeholder="Ваше сообщение" name="Request[text]"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="filter-form">
                        <div class="form-row-element">
                            <div class="check">
                                <label>
                                    <input type="checkbox" name="Request[accept]">
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
            <p>На указанную Вами почту строители-патртнеры АРПЛАНС вышлют сметы на строительство выбранного вами
                дома. </p>
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
$('#consultation-form').validate({
    onfocusout: false,
    ignore: ".ignore",
    rules: {
        'Request[contact]': {required: true},
        'Request[text]': {required: true},
        'Request[accept]': {required: true}
    },
    messages: {
        'Request[contact]': {required: ""},
        'Request[text]': {required: ""},
        'Request[accept]': {required: ""}
    },
    errorClass: 'invalid',
    highlight: function (element, errorClass) {
        $(element).closest('.form-row-element').addClass(errorClass);
    },
    unhighlight: function (element, errorClass) {
        $(element).closest('.form-row-element').removeClass(errorClass)
    },
    errorPlacement: $.noop,
    submitHandler: function (form) {
        var data = $('#consultation-form');
        formData = new FormData(data.get(0));
        $.ajax({
            contentType: false,
            processData: false,
            url: 'http://' + server + '/cart/help',
            type: 'POST',
            data: formData,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Accept', '*/*');
                xhr.setRequestHeader('Cache-Control', 'no-cache');
                xhr.setRequestHeader('Authorization', "Bearer " + token);
            },
            headers: {'Authorization': 'Bearer ' + token},
            success: function (res) {
                if (res.status === 'success') {
                    $('[data-modal="consultation"]').addClass('successful');
                }
            },
        });
    }
});
</script>


<!--script-->


</body>
</html>
