<?php
/* -----------------------------------------------------------------------------------------------
 * Redis Default Configuration
 *
 * This configuration is used as fallback when no other environment has been chosen. As a default,
 * the values are read from the environment variables, and there is no need to change this file.
 * -----------------------------------------------------------------------------------------------*/

foreach(array('REDIS_URL', 'REDISCLOUD_URL', 'REDISGREEN_URL', 'REDISTOGO_URL', 'OPENREDIS_URL') as $var) {
  $url = getenv($var);
  if($url) break;
}
$url = parse_url($url);

return array(
  'host' => $url['host'],
  'port' => $url['port'],
  'password' => $url['pass'],
  'prefix' => 'servicekit'
);
