<?php 
$tag_list = array(
    'href'
);
if (!isset($argv[1]) || !parse_url($argv[1])) {
  echo 'no';
  exit;
}

$html = file_get_contents($argv[1]);
preg_match_all('/href="(.+?)"/', $html, $matche);
$href_list = $matche[1];
var_dump($href_list);
?>
