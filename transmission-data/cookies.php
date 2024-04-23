<?php

setcookie("date", date("d/m/Y"), time() + 3600);
setcookie("version", phpversion(), time() + 3600);
setcookie("browser", $_SERVER['HTTP_USER_AGENT'], time() + 3600);
//setcookie("sec_browser", $_SERVER['HTTP_SEC_CH_UA'], time() + 3600);
//setcookie("get_browser", get_browser(null, true)['browser'], time() + 3600);
header("Location: http://localhost:8888/php-procedural/transmission-data/index.php");
