<?php
require_once('config.php');
require_once('_header.php');
?>
<script>
    var server = '<?=$params['server']?>';
    var mainElement = '<?=$params['mainElement']?>';
    var token = '<?=$params['token']?>';
</script>
<div class="hidden variables">
    <div id="url"></div>
    <div id="params"></div>
</div>
<div class="button" style="z-index: 100" id="send" class="btn btn--square-dark">Отправить</div>
<div id="main" class="main">
</div>
<?php
require_once('_footer.php');
?>
