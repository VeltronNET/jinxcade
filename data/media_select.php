<div class="window">
<div class="title-bar">
  <div class="title-bar-text">Media Selector</div>
  <div class="title-bar-controls">
    <!-- <button aria-label="Minimize"></button>
    <button aria-label="Maximize"></button>
    <button aria-label="Close"></button> -->
  </div>
</div>
<menu role="tablist">
    <li role="tab" aria-selected="<?php if ($_GET['mode'] == 'Audio') {echo 'true';} ?>"><a href="../media.php?mode=Audio">Audio</a></li>
    <li role="tab" aria-selected="<?php if ($_GET['mode'] == 'Video') {echo 'true';} ?>"><a href="../media.php?mode=Video">Video</a></li>
</menu>
