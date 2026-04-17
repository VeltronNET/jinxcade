<div class="window">
<div class="title-bar">
  <div class="title-bar-text">JinxCade's Site | <?php echo ($_GET['title']);?></div>
  <div class="title-bar-controls">
    <!-- <button aria-label="Minimize"></button>
    <button aria-label="Maximize"></button>
    <button aria-label="Close"></button> -->
  </div>
</div>
<menu role="tablist">
    <li role="tab" aria-selected="<?php if ($_GET['page'] == 'home') {echo 'true';} ?>"><a href="../index.php">Home</a></li>
    <li role="tab" aria-selected="<?php if ($_GET['page'] == 'about') {echo 'true';} ?>"><a href="../about.php">About</a></li>
    <li role="tab" aria-selected="<?php if ($_GET['page'] == 'links') {echo 'true';} ?>"><a href="../links.php">Links</a></li>
    <li role="tab" aria-selected="<?php if ($_GET['page'] == 'media') {echo 'true';} ?>"><a href="../media.php">Media</a></li>
    <li role="tab" aria-selected="<?php if ($_GET['page'] == 'settings') {echo 'true';} ?>"><a href="../settings.php">Settings</a></li>
    <li role="tab" aria-selected="<?php if ($_GET['page'] == 'credits') {echo 'true';} ?>"><a href="../credits.php">Credits</a></li>
</menu>
<div class="window">
