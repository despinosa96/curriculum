<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$hobbies = 'Hobbies';
if($lang != 'es'){
  $about_me = 'About Me';
  $work_experience = 'Work Experience';
  $studies = 'Schooling';
  $tecnologies = 'Tecnologies & Languages';
  $title = $about_me.' | Curriculum Daniel Espinosa';
  $know_me = 'Get to Know Me';
  $social_networks = 'Know my Social Networks!';
  include 'php/texts_en.php';
}else{
  $about_me = 'Sobre Mi';
  $work_experience = 'Experiencia Laboral';
  $studies = 'Estudios';
  $tecnologies = 'Tecnologías & Lenguajes';
  $title = $about_me.' | Curriculum Daniel Espinosa';
  $know_me = 'Conóceme';
  $social_networks = '¡Conoce mis Redes Sociales!';
  include 'php/texts_es.php';

}
switch (substr($_SERVER['REQUEST_URI'],8)) {
  case 'index.php':
    $load_h1 = $about_me;
    break;
  
  default:
  $load_h1 = 'Error';
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php';?>
  <body>
    <?php include 'header.php';?>
  </body>
  <?php include 'footer.php';?>
</html>
<script src="javascript/functions.js"></script>