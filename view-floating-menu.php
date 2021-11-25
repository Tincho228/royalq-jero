<!-- <div id="circularMenu" class="circular-menu">

  <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
    <i class="fa fa-plus"></i>
  </a>

  <menu class="items-wrapper">
    <a href="#" class="menu-item fa fa-facebook"></a>
    <a href="#" class="menu-item fa fa-twitter"></a>
    <a href="#" class="menu-item fa fa-google-plus"></a>
    <a href="#" class="menu-item fa fa-linkedin"></a>
  </menu>

</div> -->


<div id="circularMenu1" class="circular-menu circular-menu-left">

  <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
    <i class="fas fa-circle-notch text-light"></i>
  </a>

  <menu class="items-wrapper">
    <a href="<?php if(isset($user_telegram_link)){echo $user_telegram_link;} ?>" 
      target="_blank"
      class="menu-item fab fa-telegram"></a>
    <a href="<?php if(isset($user_facebook_link)){echo $user_facebook_link;} ?>" 
      target="_blank"
      class="menu-item fab fa-facebook"></a>
    <a href="<?php if(isset($user_instagram_link)){echo $user_instagram_link;} ?>" 
      target="_blank"
      class="menu-item fab fa-instagram"></a>
    <a href="https://api.whatsapp.com/send?phone=<?php if(isset($user_phone)){echo $user_phone;} ?>" 
      target="_blank"
      class="menu-item fab fa-whatsapp"></a>
  </menu>

</div>