<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Index - Yummy Bootstrap Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="{{ asset('assets/homepage/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('assets/homepage/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="{{ asset('assets/homepage/vendor/bootstrap/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('assets/homepage/vendor/bootstrap-icons/bootstrap-icons.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/homepage/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('assets/homepage/vendor/glightbox/css/glightbox.min.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/homepage/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('assets/homepage/css/main.css') }}" rel="stylesheet" />
    <style>
      .cart-link {
        display: inline-block;
        padding-right: 10px;
      }

      #cart-count {
        font-size: 0.6rem;
        padding: 4px 6px;
      }
    </style>
  </head>

  <body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
      <div
        class="container position-relative d-flex align-items-center justify-content-between"
      >
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-xl-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="{{ asset('assets/') }}homepage/img/logo.png" alt=""> -->
          <h1 class="sitename">Kedai Yuput!</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li>
              <a href="#hero" class="active">Home<br /></a>
            </li>
            <li><a href="#menu">Menu</a></li>
            <li>
              <a href="cart.html" class="cart-link position-relative">
                <i class="bi bi-cart" style="font-size: 1.2rem"></i>
                <span
                  id="cart-count"
                  class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                >
                  0
                </span>
              </a>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="hero section light-background">
        <div class="container">
          <div
            class="row gy-4 justify-content-center justify-content-lg-between"
          >
            <div
              class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center"
            >
              <h1 data-aos="fade-up">
                Makan Disini Enak!
                <!--<br>Delicious Food -->
              </h1>
              <p data-aos="fade-up" data-aos-delay="100">
                Selamat datang di Kedai Yuput! Hari ini kami dengan senang hati
                mempersembahkan tempat spesial ini untuk anda semua. Kami harap
                setiap hidangan yang kami sajikan bisa memberikan kebahagiaan
                dan kenangan tak terlupakan. Selamat menikmati!
              </p>
              <div class="d-flex" data-aos="fade-up" data-aos-delay="200"></div>
            </div>
            <div
              class="col-lg-5 order-1 order-lg-2 hero-img"
              data-aos="zoom-out"
            >
              <img
                src="{{ asset('assets/') }}homepage/img/menu/menu32.png"
                class="img-fluid animated"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>
      <!-- /Hero Section -->

      <!-- Menu Section -->
      <section id="menu" class="menu section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Our Menu</h2>
          <p>
            <span>Check Our</span>
            <span class="description-title">Menu From Kedai Yuput!</span>
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container">
          <ul
            class="nav nav-tabs d-flex justify-content-center"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <li class="nav-item">
              <a
                class="nav-link active show"
                data-bs-toggle="tab"
                data-bs-target="#menu-drinks"
              >
                <h4>Minuman</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-paket-nasi"
              >
                <h4>Paket Nasi</h4> </a
              ><!-- End tab nav item -->
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-pencuci-mulut"
              >
                <h4>Pencuci Mulut</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-makanan-ringan"
              >
                <h4>Makanan Ringan</h4>
              </a>
            </li>
            <!-- End tab nav item -->
          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-pane fade active show" id="menu-drinks">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Minuman</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a href="{{ asset('assets/') }}homepage/img/menu/menu28.jpeg" class="glightbox"
                    ><img
                      src="{{ asset('assets/') }}homepage/img/menu/menu28.jpeg"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Air Mineral</h4>
                  <p class="price">Rp 7.000</p>
                  <div class="quantity">
                    <h5 class="subtitle">Jumlah</h5>
                    <div class="form quantityCounter">
                      <i
                        class="icon btnQuantity minus"
                        onclick="decreaseQuantity(this)"
                      >
                        <img
                          src="https://rafaelalucas.com/dailyui/12/{{ asset('assets/') }}homepage/minus.svg"
                          alt="Minus"
                        />
                      </i>

                      <input
                        class="inputQuantity"
                        type="number"
                        value="0"
                        min="1"
                      />
                      <i
                        class="icon btnQuantity plus"
                        onclick="increaseQuantity(this)"
                      >
                        <img
                          src="https://rafaelalucas.com/dailyui/12/{{ asset('assets/') }}homepage/plus.svg"
                          alt="Plus"
                        />
                      </i>
                    </div>
                  </div>
                </div>
               
                <!-- Menu Item -->
              </div>
            </div>
            <!-- End Starter Menu Content -->

            <div class="tab-pane fade" id="menu-paket-nasi">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Paket Nasi</h3>
              </div>

             
            </div>
            <!-- End paket nasi Menu Content -->

            <div class="tab-pane fade" id="menu-pencuci-mulut">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Pencuci Mulut</h3>
              </div>

              
            </div>
            <!-- End Pencuci Mulut Menu Content -->
            <!-- ====================================================================== -->
            <div class="tab-pane fade" id="menu-makanan-ringan">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Makanan Ringan</h3>
              </div>
            
            </div>
            <!-- End Dinner Menu Content -->
            <!-- ========================================================================================= -->
          </div>
        </div>
      </section>
      <!-- /Menu Section -->
    </main>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <script>
      function increaseQuantity(el) {
        const container = el.closest(".menu-item");
        const qtyInput = container.querySelector(".inputQuantity");
        const nama = container.querySelector("h4").innerText;
        const hargaText = container.querySelector(".price").innerText;
        const harga = parseInt(hargaText.replace(/\D/g, "")); // ambil angka dari "Rp 7.000"

        // Tambah jumlah di input
        let currentValue = parseInt(qtyInput.value);
        qtyInput.value = currentValue + 1;

        // Tambah ke localStorage
        addToCart(nama, harga, 1);

        // Update badge
        updateCartCount();
      }

      function decreaseQuantity(el) {
        const container = el.closest(".menu-item");
        const qtyInput = container.querySelector(".inputQuantity");
        let currentValue = parseInt(qtyInput.value);
        if (currentValue > 1) {
          qtyInput.value = currentValue - 1;

          // Kurangi 1 dari cart
          const nama = container.querySelector("h4").innerText;
          reduceFromCart(nama, 1);
          updateCartCount();
        }
      }

      function addToCart(nama, harga, jumlah) {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];

        const index = cart.findIndex((item) => item.nama === nama);
        if (index !== -1) {
          cart[index].jumlah += jumlah;
        } else {
          cart.push({ nama, harga, jumlah });
        }

        localStorage.setItem("cart", JSON.stringify(cart));
      }

      function reduceFromCart(nama, jumlah) {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        const index = cart.findIndex((item) => item.nama === nama);

        if (index !== -1) {
          cart[index].jumlah -= jumlah;
          if (cart[index].jumlah <= 0) {
            cart.splice(index, 1);
          }
        }

        localStorage.setItem("cart", JSON.stringify(cart));
      }

      function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        const totalItem = cart.reduce((sum, item) => sum + item.jumlah, 0);

        const cartCount = document.getElementById("cart-count");
        if (cartCount) cartCount.innerText = totalItem;
      }

      // Inisialisasi count saat halaman dimuat
      document.addEventListener("DOMContentLoaded", updateCartCount);
    </script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/homepage/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/homepage/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/homepage/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/homepage/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/homepage/js/main.js') }}"></script>
  </body>
</html>
