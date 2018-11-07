<?php
require_once('functions.php');
if (isset($_COOKIE['cart'])) {
    $cart = $_COOKIE['cart'];
}
if (!isset($cart)||!$cart) {
    $cart = randomString(32);
}
require_once('config.php');
require_once('_header_top.php');
require_once('_header.php');
?>
<script>
    var server = '<?=$params['server']?>';
    var mainElement = '<?=$params['mainElement']?>';
    var token = '<?=$params['token']?>';
    var cartId = '<?=$cart?>';
</script>
<div class="hidden variables">
    <div id="url"></div>
    <div id="params"></div>
    <div id="inCart"></div>
</div>
<div id="main" class="main">
</div>
<?php
require_once('_footer.php');
?>
