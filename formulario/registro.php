<?php

  $nombre = $_REQUEST["nombre"];
  $email = $_REQUEST["email"];
  $fecha = $_REQUEST["fecha"];
  $tipoLicencia = $_REQUEST["licencia"];
  $id = round(microtime(true) * 1000);

  $contenido = md5($empresa. "|" .$tipoLicencia);

  $archivo = fopen("licencia_warriors_".$id.".txt","a") or die ("Error de captura");

  //fwrite($archivo,PHP_EOL ."$contenido");
  fwrite($archivo, $contenido.PHP_EOL);

  fclose($archivo);

  header('Location: ../pagina_principal/index.php');

  $arr = array('empresa' => $empresa, 'licencia' => $tipoLicencia);

  echo json_encode($arr);

?>
