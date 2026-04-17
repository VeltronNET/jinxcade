<?php $_GET['page'] = "media"; $_GET['title'] = "Media"; $_GET['mode'] = ($_GET['mode']); $_GET['file'] = ($_GET['file']); include "data/head.php"; ?>
<body>
<?php $_GET['page'] = "media"; $_GET['title'] = "Media"; $_GET['mode'] = ($_GET['mode']); $_GET['file'] = ($_GET['file']); include 'data/header.php'; ?>
<?php include 'data/media_select.php'; ?>
<?php
if ($_GET['mode'] == 'Audio') {include 'data/media_audio.php';}
else if ($_GET['mode'] == 'Video') {include 'data/media_videos.php';}
else {include 'data/media_none.php';}
?>
</div>
<?php include 'data/footer.php'; ?>

