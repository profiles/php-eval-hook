<?php

#usage: php -d extension=evalhook.so dump.php /path/to/obfuscated.php

function __eval($code, $file) {
  echo "--------------{$file}---------------\n";
  echo "{$code}\n\n";

  // return FALSE if you want to prevent the eval()
  // return false;

  // return a string if you want to replace the eval-d code
  // return 'echo 2;';

  // return nothing to continue execution normally
}

include($argv[1]);
?>