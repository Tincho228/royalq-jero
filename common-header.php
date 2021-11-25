<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark" style="padding:8px 15px;">
    <div class="container d-flex justify-content-between">
      <a class="navbar-brand" href="./index.php"><img src="./images/logo.png" alt="Logo de RoyalQ" style="width:40px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <span class="hamburguer-menu"></span>
        <span class="hamburguer-menu"></span>
        <span class="hamburguer-menu"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link text-light" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="./index.php#howToStart">Como empiezo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="index.php#tutoriales">Tutoriales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light"
              href="<?php if(isset($user_facebook_link)){echo $user_facebook_link;} ?>"
              target="_blank">Seguinos en facebook</a>
          </li>
          <li class="nav-item">
            <!-- Button trigger modal -->
            <a class="nav-link text-light" data-toggle="modal" data-target="#contact-modal">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- Modal of Contacts -->
<?php include './view-modal-contact.php' ?>