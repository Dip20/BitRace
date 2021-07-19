<?php
  $key = "asdpjsgskj848#$%^&*" . rand("1111","9999");
  $secret = "saoojHHIHSH784747847$$^9" . rand("1111","9999");

  $data['apikey'] = md5($key);
  $data['apisecret'] = md5($secret);

  $encode_data = json_encode($data);
  echo $encode_data;




 ?>
