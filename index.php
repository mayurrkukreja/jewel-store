<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<?php 
	include 'header.php' 
?>
<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
<div class="wrapper">
  <?php include 'navbar.php' ?>

    <!--  Modal -->
    <div class="modal fade" id="productView" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden border-0">
          <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
            data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body p-0">
            <div class="row align-items-stretch">
              <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                  style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-gallery="gallery1"
                  data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg"
                  data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                  href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
              </div>
              <div class="col-lg-6">
                <div class="p-4 my-md-4">
                  <ul class="list-inline mb-2">
                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                    <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                  </ul>
                  <h2 class="h4">Red digital smartwatch</h2>
                  <p class="text-muted">$250</p>
                  <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper
                    leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur
                    ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                  <div class="row align-items-stretch mb-4 gx-0">
                    <div class="col-sm-7">
                      <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span
                          class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                        <div class="quantity">
                          <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                          <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                          <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-5"><a
                        class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                        href="cart.php">Add to cart</a></div>
                  </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                      class="far fa-heart me-2"></i>Add to wish list</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- HERO SECTION-->
    <div class="container">
      <section class="hero pb-3 bg-cover bg-center d-flex align-items-center"
        style="background: url(img/hero-banner-alt.jpg)">
        <div class="container py-5">
          <div class="row px-4 px-lg-5">
            <div class="col-lg-6">
              <p class="text-muted small text-uppercase mb-2">New Inspiration 2022</p>
              <h1 class="h2 text-uppercase mb-3">20% off on new season</h1><a class="btn btn-dark"
                href="shop.php">Browse collections</a>
            </div>
          </div>
        </div>
      </section>
      <!-- CATEGORIES SECTION-->
      <section class="pt-5">
        <header class="text-center">
          <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
          <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
        </header>
        <div class="row">
          <div class="col-md-4"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/earings.png"
                alt="" /><strong class="category-item-title">Earings</strong></a>
          </div>
          <div class="col-md-4"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/necklace.png"
                alt="" /><strong class="category-item-title">Necklace</strong></a>
          </div>
          <div class="col-md-4"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/rings.png"
                alt="" /><strong class="category-item-title">Rings</strong></a>
          </div>
          <div class="col-md-4"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/americandiamond.png"
                alt="" /><strong class="category-item-title">American Diamond</strong></a>
          </div>
          <div class="col-md-4"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/teekhas.jpg"
                alt="" /><strong class="category-item-title">Teekhas</strong></a>
          </div>
          <div class="col-md-4"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/combos.jpg"
                alt="" /><strong class="category-item-title">Combos</strong></a>
          </div>
      </section>
      <!-- NEWSLETTER-->
      <section class="py-5">
        <div class="container p-0">
          <div class="row gy-3">
            <div class="col-lg-6">
              <h5 class="text-uppercase">LATEST UPDATES</h5>
              <p class="text-sm text-muted mb-0">Subscribe to get latest updates!</p>
            </div>
            <div class="col-lg-6">
              <form action="#">
                <div class="input-group">
                  <input class="form-control form-control-lg" type="email" placeholder="Enter your email address"
                    aria-describedby="button-addon2">
                  <button class="btn btn-dark" id="button-addon2" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="bg-dark text-white">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Customer services</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#!">Help &amp; Contact Us</a></li>
              <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
              <li><a class="footer-link" href="#!">Online Stores</a></li>
              <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <h6 class="text-uppercase mb-3">Company</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#!">What We Do</a></li>
              <li><a class="footer-link" href="#!">Available Services</a></li>
              <li><a class="footer-link" href="#!">Latest Posts</a></li>
              <li><a class="footer-link" href="#!">FAQs</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h6 class="text-uppercase mb-3">Social media</h6>
            <ul class="list-unstyled mb-0">
              <li><a class="footer-link" href="#!">Twitter</a></li>
              <li><a class="footer-link" href="#!">Instagram</a></li>
              <li><a class="footer-link" href="#!">Tumblr</a></li>
              <li><a class="footer-link" href="#!">Pinterest</a></li>
            </ul>
          </div>
        </div>
        <div class="border-top pt-4" style="border-color: #1d1d1d !important">
          <div class="row">
            <div class="col-md-6 text-center text-md-start">
              <p class="small text-muted mb-0">&copy; 2022 All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p class="small text-muted mb-0">Developed by <a class="text-white reset-anchor"
                  href="#">Jewel-Store</a></p>
              <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function (e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
        }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');

    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>
<?php include 'footer.php' ?>
</body>
</html>
