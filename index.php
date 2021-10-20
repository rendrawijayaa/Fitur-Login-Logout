<?php 

session_start();
if($_SESSION['status_login']!=true){
  header('location:login.php');
  
} else{
  echo "<script>alert('Login Berhasil')</script>";

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel</title>
    <link rel="stylesheet" href="style1.css" />
    <!-- CSS only -->
<link 
   href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  </head>
  <body>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <nav>
      <div class="layar-dalam">
        
        <div class="logo">
         
          
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#support">Support</a></li>
            <li><a href="#Destination">Destination</a></li>
            <li><a href="#free visit">free visit</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class=""></div>
        <video autoplay muted loop>
          <source src="asset/bg.web.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>find your destination</h3>
          <h3></h3>
          <br>

            <a href="logout.php" class="tombol">logout</a>
            
          </p>
        </div>
      </header>
      <main>
        <section id="aboutus">
          <div class="layar-dalam">
            <h3>About Us</h3>
            <img src="asset/foto 25.jpeg"class="rounded mx-auto d-block" alt="...">
            <br>
            <p class="ringkasan">
              we are a travel company
            </p>
            <div class="konten-isi">
              <p>
                We are a planet travel that is ready to serve you wherever you want to go on vacation.Planet Travel is a company engaged in travel and tourism agency which was founded on June 4, 2013 with a business entity of PT. Planet Travel is a tour and travel service provider company that is able to explore all public tourism trips by providing the best and quality services.
                To make it easier for our customers to cooperate with all domestic and international airlines, providing domestic and international hotel voucher services. Domestic and foreign tour packages to Umrah and Hajj trips. Are you ready to vacation with us?
              </p>
            </div>
          </div>
        </section>
        <section class="abuabu" id="support">
          <div class="layar-dalam support">
            <div>
              <img src="asset/foto1BOROBUDUR.jfif" />
              <br>
              <br>
              <a href="create.php" class=" tombol">Rp 500k</a>
              <h6>DISCOUNT 30%</h6>
              <br>
              
                  
              
              <p>
              for tours to BOROBUDUR we hold a discounted price, starting in October-December
              </p>
            </div>
            <div>
              <img src="asset/fotoNUSAPENIDA.jfif" />
              <br>
              <br>
              <a href="create.php" class="tombol">Rp 600k</a>
              <h6>DISCOUNT 30%</h6>
              <br>
              <p>
              for tours to NUSA PENIDA we hold a discounted price, starting in October-December
              </p>
            </div>
            <div>
              <img src="asset/fotoDANAUTOBA1.jfif" />
              <br>
              <br>
             <a href="create.php" class=" tombol">Rp 400k</a>
              <h6>DISCOUNT 40%</h6>
              <br>
              <p>
              for tours to TOBA LAKE we hold a discounted price, starting in October-December
              </p>
            </div>
          </div>
        </section>
        <section id="Destination">
         
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="asset/foto 13.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Labuan Bajo</h5>
                  <a href="create.php" class=" tombol">Rp 500k</a>
                </div>
              </div>
              <div class="carousel-item">
                </style>
                <img src="asset/foto 11.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Bromo</h5>
                  <a href="create.php" class=" tombol">Rp 350k</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="asset/foto 15.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Raja ampat</h5>
                  <a href="create.php" class=" tombol">Rp 650k</a>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        <section class="quote">
          <div class="layar-dalam">
            <p>Bekerja secukupnya berlibur sepuasnya.</p>
          </div>
        </section>
        <section id="team">
          <div class="layar-dalam">
            <h3>Free visit</h3>
            <p class="ringkasan">
              if you have subscribed 10 times with us, you will get free visits abroad by choosing one of the destinations below
            </p>
            <br>
            <div class="tim">
              <div>
                <img src="asset/foto 23.jpg" />
                <h6>Hawai</h6>
                <span>Amerika serikat</span>
              </div>
              <div>
                <img src="asset/foto 21.jpg" />
                <h6>Gunung fuji</h6>
                <span>Jepang</span>
              </div>
              <div>
                <img src="asset/foto 22.jpg" />
                <h6>Menara Eiffel</h6>
                <span>France</span>
              </div>
            </div>
          </div>
        </section>
        <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3>Blog</h3>
            <p class="ringkasan">
              read the blog below if you want to know some information about destinations in Indonesia
            </p>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/foto\ 26.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">What About Kepulauan seribu?</a></h4>
                    <br>
                    <p>
                      Kepulauan seribu is one of the administrative areas in the north of the city of Jakarta. this region has a series of beautiful islands with their own charm.</p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/foto\ 27.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">What About Bali?</a></h4>
                    <br>
                    <p>
                      Bali province is a leading tourism area in Indonesia. The combination of beautiful nature with a distinctive culture is an attraction for foreign and domestic tourists.
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            read information about us on the right
  
          </div>
          <div>
            <h5>Contact</h5>
            hubungi nomor berikut ini(075478198373) untuk informasi lebih lanjut.
          </div>
          <div>
            <h5>Help</h5>
            hubungi nomor kami atau datang ke kantor kami jika ada kesalahan atau error.
          </div>
          <div>
            <h5>Map</h5>
            jika anda ingin datanng ke kantor kami baca alamat berikut: Jl anggrek no 57 kota malang.
          </div>
        </div>
        <div class="layar-dalam">
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>
<script>
 var tombolMenu = $(".tombol-menu");
var menu = $("nav .menu ul");

function klikMenu() {
    tombolMenu.click(function () {
        menu.toggle();
    });
    menu.click(function () {
        menu.toggle();
    });
}

$(document).ready(function () {
    var width = $(window).width();
    if (width < 990) {
        klikMenu();
    }
})

//check lebar
$(window).resize(function () {
    var width = $(window).width();
    if (width > 989) {
        menu.css("display", "block");
        //display:block
    } else {
        menu.css("display", "none");
    }
    klikMenu();
});

//efek scroll 
$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 0) {
            $("nav").addClass("putih");
            $("nav img.hitam").show();
            $("nav img.putih").show();
        } else {
            $("nav").removeClass("putih");
            $("nav img.hitam").show();
            $("nav img.putih").show();
        }
    })
}); 
</script>
