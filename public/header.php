<?php echo
'<header class="header">
        <div class="menu_nav-mobile">
          <span class="material-symbols-outlined" name="mobile-menu">menu</span>
          <h1>'.$load_h1.'</h1>
          <!--<div class="language_selector">
            <span class="language_selector-item">ES</span>
            <span class="language_selector-item">EN</span> 
          </div>-->

          <ul class="menu_nav-mobile-items invisible">
                <li><a href="index.php">'.$about_me.'</a></li>
                <li><a href="work_experience.php">'.$work_experience.'</a></li>
                <li><a href="#">'.$tecnologies.'</a></li>
                <li><a href="#">'.$studies.'</a></li>
            </ul>
        </div>
        <nav class="menu_nav-desktop">
          <ul class="menu_nav-desktop-items">
                <li><a href="index.php">'.$about_me.'</a></li>
                <li><a href="work_experience.php">'.$work_experience.'</a></li>
                <li><a href="#">'.$tecnologies.'</a></li>
                <li><a href="#">'.$studies.'</a></li>
            </ul>
        </nav>
</header>';
?>