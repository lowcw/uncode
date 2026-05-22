<?php ?>

<div id="navbar_head" class="bar-warp container-fluid">
  <nav  class="navbar navbar-expand-lg px-3 px-md-5">
    <!-- Logo -->
    <a href="https://undsgn.com/uncode/" class="navbar-brand d-flex justify-content-center align-items-center" id="main-logo" aria-label="Uncode">
      <svg preserveAspectRatio="xMinYMin" viewBox="0 0 75.8 75.8" xmlns="http://www.w3.org/2000/svg">
        <path d="M37.9,0C17,0,0,17,0,37.9c0,20.9,17,37.9,37.9,37.9c20.9,0,37.9-17,37.9-37.9C75.8,17,58.9,0,37.9,0z M50.8,44.1
        c0,2-0.3,3.7-1,5.2c-0.6,1.5-1.5,2.8-2.7,3.8c-1.2,1-2.5,1.8-4.1,2.3c-1.6,0.5-3.3,0.8-5.1,0.8c-1.9,0-3.6-0.3-5.1-0.8
        c-1.6-0.5-2.9-1.3-4.1-2.3c-1.2-1-2-2.3-2.7-3.8c-0.6-1.5-1-3.2-1-5.2V21.6h6.9v22.1c0,1.9,0.5,3.5,1.5,4.6c1,1.2,2.5,1.8,4.5,1.8
        c2,0,3.5-0.6,4.5-1.8c1-1.2,1.5-2.7,1.5-4.6V21.6h6.9V44.1z M58.2,55.1c-0.7,0.8-1.7,1.2-2.8,1.2c-1.1,0-2.1-0.4-2.8-1.2
        c-0.8-0.8-1.1-1.7-1.1-2.7c0-1.1,0.4-2,1.1-2.8c0.8-0.8,1.7-1.1,2.8-1.1c1.2,0,2.1,0.4,2.8,1.1c0.7,0.8,1.1,1.7,1.1,2.8
        C59.3,53.5,58.9,54.4,58.2,55.1z"></path>
      </svg>
    </a>
    <!-- Toggle -->
    <div class="mobile-menu-button mobile-menu-button-light lines-button d-lg-none" 
     aria-label="Toggle menu" role="button" tabindex="0" 
     data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
      <span class="lines">
        <span></span>
        <span></span>
      </span>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 70%;">
      <div class="offcanvas-header">
        <!--<h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>-->
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body gap-4 justify-content-end align-items-center">
        <div class="">
          <ul class="navbar-nav gap-4">
          <li class="nav-item ms-md-3"><a class="nav-link header_nav" href="pages/coming-soon.php">Home</a></li>
            <li class="nav-item"><a class="nav-link header_nav" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link header_nav" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link header_nav" href="#">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link header_nav" href="#">Contact Us</a></li>
        </ul>
        </div>
        
      <div class="navbar-nav gap-4 d-none">
        <div class="row justify-content-end">
          <div class="col-2 ms-md-3">
            <a href="#" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg></a>
          </div>
          <div class="col-2 ms-md-3">
            <a href="#" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg></a>
          </div>
          <div class="col-2 ms-md-3">
            <a href="#" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
              <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
            </svg></a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </nav>
</div>