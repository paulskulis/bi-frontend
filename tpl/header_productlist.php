<nav class="navbar navbar-expand-lg navbar-light mt-3 pe-1 border-bottom">
  <div class="container mb-2 ">

    <div class="d-flex flex-row justify-content-between d-md-none d-lg-none d-xl-none d-xxl-none w-100">

      <button class="navbar-toggler mb-2 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#productNav">
        <span class="dropdown-toggle"></span>
        <a class="navbar-brand fw-bolder" href="#">Preces</a>
      </button>

      <div class="d-md-none d-lg-none d-xl-none d-xxl-none">
        <div id="mobileSearch">
          <button class="btn btn-outline-secondary border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMobileSearch">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
            </svg>
          </button>
        </div>
      </div>  

    </div>

    <div class="row w-100">
      <div class="col-md-12">
        <div class="collapse navbar-collapse text-uppercase " id="productNav">
          <ul class="navbar-nav w-100 justify-content-between">
            <li class="nav-item">
              <a class="nav-link text-body" href="#">Drenāžas skalotājs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-body" href="#">Nodilumizturīgās graudu caurplūdes caurules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-body"  href="#">Graudu mitruma mērītāji</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger fw-bolder" data-bs-toggle="collapse" href="#productList1"><span class="dropdown-toggle"></span> Visas preces</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</nav>
<!-- Start header-product-list collapse content -->
<div class="container border-top collapse multi-collapse" id="productList1">
  <div class="row py-4">
    <div class="col-md-3">
      <?php include 'tpl/example_productlist_content_row.php'?>
    </div>
    <div class="col-md-3">
      <?php include 'tpl/example_productlist_content_row.php'?>
    </div>
    <div class="col-md-3">
      <?php include 'tpl/example_productlist_content_row.php'?>
    </div>
    <div class="col-md-3">
      <?php include 'tpl/example_productlist_content_row.php'?>
    </div>
  </div>
</div>
<!-- End header-product-list collapse content -->

<!-- Start mobile search input content -->
<div class="collapse" id="collapseMobileSearch">
  <div class="container">
    <div class="row">
      <div class="col-12 my-4">
        <input minlength="2" type="search" class="headerSearch form-control form-control-lg border-end-0 rounded-start" name="query" placeholder="Meklēt...">
      </div>
    </div>
  </div>
</div>
<!-- End mobile search input content -->

<!-- Search results Collapse -->
<div class="collapse" id="searchCollapse">
  <div class="container border-bottom">
    <div class="row">
      <div class="col-md-12 mb-4" id="searchResultsContainer">
        <p>Search results go here</p>
      </div>
    </div>
  </div>
</div>