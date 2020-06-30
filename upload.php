<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$dir_subida = '/var/www/html/test/images/';
$target_file = $dir_subida . "image_".rand(1000, 100000).".png";

echo "target_file ".$target_file."<br>";

if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
  echo "El fichero es válido y se subió con éxito.\n";
} 
else {
  echo "¡Posible ataque de subida de ficheros!\n";
}

?>