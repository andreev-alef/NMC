<?php include('./phpqrcode/qrlib.php'); ?>
<h1>qrlib.php</h1>
<img src="<?= QRcode::png('https://ya.ru'); ?>" />