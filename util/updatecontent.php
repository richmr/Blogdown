<?php
  /*********************
    Uses git to fetch new changes to blogdown engine
  **********************/

  $cmd = "cd ../../content; git pull 2>&1";

  echo '<pre>';
  passthru($cmd);
  echo '</pre>';

 ?>
