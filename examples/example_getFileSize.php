<?php

ini_set('max_execution_time', 777);
ignore_user_abort(true);
@set_time_limit(0);

$url = 'http://ihtika.googlecode.com/svn';

require_once("../phpsvnclient.php");

$svn = new phpsvnclient($url);
echo $svn->getFileSize("trunk/src/com/google/code/ihtika/IhtikaClient/MainThread.java", 90);
?>