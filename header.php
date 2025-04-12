<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light fondo-nav">
        <div class="container-fluid d-block d-lg-flex justify-content-xl-around">
          <div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/asdrubal-logo.png" width="250px" alt="logo">
          </div>

          <div class="mt-2 mt-xl-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="#">Inicio</a>
                <a class="nav-link"  href="#">Servicios</a>
                <a class="nav-link" href="#">Equipo</a>
                <a class="nav-link" href="#">Referencias</a>
              </div>
            </div>
          </div>
        
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Jumbotron -->
      <div
        class="p-5 text-center bg-body-tertiary"
        style="
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/portada.jpg');
            background-size: cover;
            background-position: center center;
            height: 300px; width: 100%;
            ">
        <div
          class="bg-dark bg-opacity-50 p-4 rounded shadow-lg d-inline-block"
        >
          <h1 id="titulo-dinamico" class="mb-3 text-white">Posiciona y aparece con tu web en Google</h1>
          <h4 class="mb-3 text-white d-none d-md-block">
            Despreocúpate del mundo de la
            <span style="color: #31d2f2">web</span>, lo hacemos por ti
          </h4>
          <a
            data-mdb-ripple-init
            class="btn btn-info text-white"
            href=""
            role="button"
            >Quiero resultados</a
          >
        </div>
      </div>
      <!-- Jumbotron -->
    </header>
<body <?php body_class(); ?>>
