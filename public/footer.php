<?php
$array_social_networks = 
['linkedin'=> 'linkedin.svg',
'phone' => 'phone.svg',
'github' => 'github.svg'];


echo
'<footer class="footer">
<div class="footer_content">
<h4>'.$social_networks.'</h4>
<div class="footer_content_social">';
foreach ($array_social_networks as $key => $value) {
    echo 
    '<div class="footer_content_social-all '.$key.'">';
    switch ($key) {
        case 'linkedin':
            echo '<a target="_blank"  href="https://www.linkedin.com/in/daniel-espinosa-g%C3%B3rriz-323a07181/"><img src="assets/img/svg/'.$value.'"></a>';
            break;
        case 'phone':
            echo '<a href="tel:636646280"><img src="assets/img/svg/'.$value.'"></a>';
            break;
        case 'github':
            echo '<a target="_blank" href="https://github.com/despinosa96"><img src="assets/img/svg/'.$value.'"></a>';
            break;
        default:
            echo '<p>Error</p>';
            break;
    }    
    echo 
    '</div>';
}
echo 
'
</div>
</div>
</footer>';
?>