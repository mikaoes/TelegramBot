<?php
function send($chatid, $message) {
  $message = str_replace(" ", "%20", $message);
  $url = "https://api.telegram.org/bot" . $GLOBALS['token'] . "/sendMessage?chat_id=" . $chatid . "&text=" . $message;
  echo $url;
  file_get_contents($url);
};
?>
