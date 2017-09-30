<?php

if (isset($_POST['time'])) {
  $time = $_POST['time'];
  $temperature = $_POST['temp'];
  $press = $_POST['press'];
  $result = $time ."<BR>".$temperature."<BR>".$press;
  syslog(LOG_INFO, $result);
  echo $result;
}

date_default_timezone_set("Asia/Tokyo");
$now = date("Ymd_Hi_s");
syslog(LOG_INFO, $now);
echo $now;
?>
