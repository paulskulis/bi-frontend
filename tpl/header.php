<!--Start Header -->
<nav class="py-2 bg-light nav col-12 mb-2 mb-md-0 d-none d-md-block" id="mainNav">
  <div class="container fs-6">
    <div class="row">
      <ul class="nav text-uppercase fw-bold md-12 d-flex justify-content-between">
        <li class="nav-link"><a href="?page=about_us" class="nav-link link-dark px-0">Par mums</a></li>
        <li class="nav-link"><a href="#noIdea" class="nav-link link-dark px-0">Jaunumi</a></li>
        <li class="nav-link"><a href="?page=contacts" class="nav-link link-dark px-0">Kontakti</a></li>
        <li class="nav-link"><a href="?page=login" class="nav-link link-dark px-0">Ienākt/reģistrēties</a></li>
        <li class="nav-link"><a href="tel:0037167809333" class="nav-link link-dark px-0">67 80 93 33</a></li>
        <li class="nav-item dropdown py-2">
            <a class="nav-link dropdown-toggle ps-0 font-weight-bold" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              LV
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">EN</a></li>
              <li><a class="dropdown-item" href="#">RUS</a></li>
              <li><a class="dropdown-item" href="#">Esperanto</a></li>
            </ul>
          </li>
      </ul>
      <div class="col-auto d-none d-md-block">
        <ul class="nav fw-bold">

          <!--li class="nav-item"><a href="tel:0037167809333" class="nav-link link-dark px-2">67 80 93 33</a></li>
          <div class="d-flex flex-nowrap">
            <li class="nav-item"><a href="/?page=login"
                class="nav-link link-dark px-1 text-uppercase">Ienākt/Reģistrēties</a></li>
          </div>-->




        </ul>
      </div>
    </div>
  </div>
</nav>
<header class="py-3 bg-light">
  <div class="container d-flex flex-wrap col-md-auto">
    <div class="col-md-auto col-auto me-auto">
      <div id="siteLogo">
        <a href="/" class="text-decoration-none">
          <img src="assets/img/logo-min.svg" class="bi me-2" width="98" height="82">
        </a>
      </div>
    </div>
    <form class="col-md-6 mb-3 mt-3 mb-md-0 d-none d-md-block col-auto me-auto" action="/?page=search_results"
      method="post">
      <div class="input-group">
        <input minlength="2" type="search" class="headerSearch form-control form-control-lg border-end-0 rounded-start"
          name="query" placeholder="Ievadiet atslēgvārdu">
        <button class="btn btn-outline-secondary border-start-0 bg-white" type="submit" id="button-addon2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search"
            viewBox="0 0 16 16">
            <path
              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
        </button>
      </div>
    </form>
    <div class="mb-3 mt-3 col-auto">
      <div class="btn-group ">
        <a href="/?page=cart" class="text-decoration-none text-white" style="display:inherit">
          <button type="button" class="btn btn-warning">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart"
              viewBox="0 0 16 16">
              <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
              </path>
            </svg>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99 <span
                class="visually-hidden">produktu grozā</span></span>
            <button type="button" class="btn btn-dark text-uppercase fw-bold mb-md-0 d-none d-md-block">Grozs</button>
          </button>
        </a>
      </div>
    </div>

    <!-- Could be handled more cleanly with the BS toggler element in nav, but design says otherwise -->
    <nav class="navbar ms-2 navbar-light d-md-none d-lg-none d-xl-none d-xxl-none">
      <div class="container-fluid pe-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileNav"
          style="min-height: 49px;">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <div class="row w-100" id="mobileMenu">
      <div class="col-md-12 pe-0">
        <div class="collapse" id="toggleMobileNav">
          <div class="mt-2">
            <div class="list-group list-group-flush">
              <li class="list-group-item">
                <ul class="nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted ps-0" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      LV
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">EN</a></li>
                      <li><a class="dropdown-item" href="#">RUS</a></li>
                      <li><a class="dropdown-item" href="#">Esperanto</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="list-group-item"><a href="/?page=login" class="text-decoration-none text-body">Ienākt</a></li>
              <li class="list-group-item"><a href="/?page=register"
                  class="text-decoration-none text-body">Reģistrēties</a></li>
              <li class="list-group-item"><a href="/?page=contacts" class="text-decoration-none text-body">Kontakti</a>
              </li>
              <li class="list-group-item"><a href="#" class="text-decoration-none text-body">etc..</a></li>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</header>


<?php include 'tpl/header_productlist.php' ?>
<!-- End header-->