<?php
  /*********************
    Uses git to fetch new changes to blogdown engine
  **********************/

  $content_location = "../../content";
  $cmd = "cd $content_location; git pull 2>&1";

  echo '<pre>';
  passthru($cmd);
  echo '</pre>';

  echo "<br><a href='../index.php'>Go to blog</a>";

 ?>
