<?php
function send($chatid, $message) {
  $message = str_replace(" ", "%20", $message);
  $url = "https://api.telegram.org/bot" . $GLOBALS['token'] . "/sendMessage?chat_id=" . $chatid . "&text=" . $message;
  file_get_contents($url);
};
function getupdates() {
  $url = "https://api.telegram.org/bot" . $GLOBALS['token'] . "/getUpdates";
  $get = file_get_contents($url);
  $array = json_decode($get, true);
  $array = end(end(end($array)));
  print_r($array);
  $GLOBALS['text'] = $array['text'];
  $GLOBALS['chatid'] = $array['from']['id'];
  echo "<br><br>";
  echo $GLOBALS['text'] . " " . $GLOBALS['chatid'];
#  echo json_encode($array);
};
?>
