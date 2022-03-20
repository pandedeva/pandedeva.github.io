<?php 

  function get_CURL($url)
  {
    // connect api youtube menggunakan CURL
    $curl = curl_init();
    // untuk menset opsinya
    curl_setopt($curl, CURLOPT_URL, $url);
    // menginginkan data yang dikembalikan berbentuk JSON
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // eksekusi curl nya
    $result = curl_exec($curl);
    curl_close($curl);
  
    // ubah json menjadi array
    return json_decode($result, true);
  }

  // menampilkan account youtube
  $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC652oRUvX1onwrrZ8ADJRPw&key=AIzaSyBuwC-5nb47xNXE8JLti49Nl8HOmJ2nZVc');

  $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
  $channelName = $result['items'][0]['snippet']['title'];
  $subscribers = $result['items'][0]['statistics']['subscriberCount'];

  // latest video
  $urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBuwC-5nb47xNXE8JLti49Nl8HOmJ2nZVc&channelId=UC652oRUvX1onwrrZ8ADJRPw&maxResults=1&order=date&part=snippet';
  $result = get_CURL($urlLatestVideo);
  $latestVideoId = $result['items'][0]['id']['videoId'];

  // instagram API
  $clientId = '5210259822366925';
  $accessToken = 'IGQVJVNGhXaW11TWVDSVhQMGJMQnU0Snl6ZAkxDS1pqR1o0OE5TTFBfd1dPWjBtUHUtTjctZA2hKN2IyeGxWZAUpINTZAKbDg3N2ctQzdYT0xVNGpFa1c4OVdoZA0FRcnhPWm9sMjYwSmZAsdjlRX2o2TDhPWgZDZD';

  $result = get_CURL('');




  function singkat_angka($n, $presisi=1) {
    if ($n < 900) {
      $format_angka = number_format($n, $presisi);
      $simbol = '';
    } else if ($n < 900000) {
      $format_angka = number_format($n / 1000, $presisi);
      $simbol = 'k';
    } else if ($n < 900000000) {
      $format_angka = number_format($n / 1000000, $presisi);
      $simbol = 'M';
    } else if ($n < 900000000000) {
      $format_angka = number_format($n / 1000000000, $presisi);
      $simbol = 'B';
    } else {
      $format_angka = number_format($n / 1000000000000, $presisi);
      $simbol = 'T';
    }
  
    if ( $presisi > 0 ) {
      $pisah = '.' . str_repeat( '0', $presisi );
      $format_angka = str_replace( $pisah, '', $format_angka );
    }
    return $format_angka . $simbol;
  }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!-- Boostrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />

    <title>My Portfolio | Pande Deva</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top" >
      <div class="container">
        <a class="navbar-brand" href="#home">Pande Deva</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scroll-about" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/profile-pic.jpg" alt="Pande Deva" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Deva</h1>
      <p class="lead"></p>
      <p class="lead-2" data-aos="fade-zoom-in" data-aos-duration="1000" data-aos-delay="2500" data-aos-easing="ease-in-back">All Love <i class="bi bi-suit-heart-fill text-danger"></i></p>

      <!-- gelombang -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,64L30,101.3C60,139,120,213,180,218.7C240,224,300,160,360,128C420,96,480,96,540,122.7C600,149,660,203,720,229.3C780,256,840,256,900,224C960,192,1020,128,1080,122.7C1140,117,1200,171,1260,197.3C1320,224,1380,224,1410,224L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End Jumbotron -->

    <!-- setiap Elemen tag html baru harus menggunakan section -->
    <!-- About -->
    <section id="about" class="">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center mt-3">
          <div class="col-md-5 pKiri" data-aos="fade-right" data-aos-offset="300" data-aos-duration="1000">
            <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Cumque vero inventore tenetur nisi ratione eaque iusto consequuntur, quam quia voluptas.</p>
          </div>
          <div class="col-md-5 pKanan" data-aos="fade-left" data-aos-offset="300" data-aos-duration="1000" data-aos-delay="200">
            <p>
              Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Molestiae reprehenderit nihil nobis consequatur, illum alias a rem iure dolorum hic quasi animi recusandae expedita esse dolor corrupti assumenda nisi repudiandae.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#F8FFD5"
          fill-opacity="1"
          d="M0,192L60,202.7C120,213,240,235,360,218.7C480,203,600,149,720,144C840,139,960,181,1080,192C1200,203,1320,181,1380,170.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End About -->

    <!-- Social Media -->
    <section class="social" id="social">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Social Media</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- page youtube -->
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="<?= $youtubeProfilePic ?>" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5><?= $channelName ?></h5>
                <p class="text-secondary"><?= singkat_angka($subscribers) ?> Subscribers.</p>
                <div class="g-ytsubscribe" data-channelid="UC652oRUvX1onwrrZ8ADJRPw" data-layout="default" data-count="hidden"></div>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $latestVideoId ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- end page youtube -->
          <!-- page instagram -->
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
                <img src="img/profile-pic.jpg" width="200" class="rounded-circle img-thumbnail">
              </div>
              <div class="col-md-8">
                <h5>@devvstayalive</h5>
                <p class="text-secondary">14 Followers.</p>
              </div>
            </div>

            <div class="row mt-3 pb-3">
              <div class="col">
                <div class="ig-thumbnail">
                  <img src="img/gallery/1.jpg" alt="">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/gallery/2.jpg" alt="">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/gallery/3.jpg" alt="">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/gallery/4.jpg" alt="">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/gallery/5.jpg" alt="">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/gallery/6.jpg" alt="">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/gallery/7.jpg" alt="">
                </div>
                <div class="ig-thumbnail">
                  <img src="img/gallery/8.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <!-- end page instagram -->
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path 
          fill="#ffff"
          fill-opacity="1" 
          d="M0,32L34.3,64C68.6,96,137,160,206,202.7C274.3,245,343,267,411,240C480,213,549,139,617,106.7C685.7,75,754,85,823,101.3C891.4,117,960,139,1029,133.3C1097.1,128,1166,96,1234,74.7C1302.9,53,1371,43,1406,37.3L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end Youtube & Instagram -->

    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3 mb-3">
            <div class="card baris1" data-aos="flip-left" data-aos-duration="500" data-aos-offset="300">
              <img src="img/projects/1.jpg" class="card-img-top" alt="image 1" />
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, quibusdam?</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card baris1" data-aos="flip-left" data-aos-duration="500" data-aos-offset="300" data-aos-delay="150">
              <img src="img/projects/2.jpg" class="card-img-top" alt="image 2" />
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card baris1" data-aos="flip-left" data-aos-duration="500" data-aos-offset="300" data-aos-delay="300">
              <img src="img/projects/3.jpg" class="card-img-top" alt="image 3" />
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, ipsum!</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card baris1" data-aos="flip-left" data-aos-duration="500" data-aos-offset="300" data-aos-delay="450">
              <img src="img/projects/4.jpg" class="card-img-top" alt="image 4" />
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit, amet, consectetur adipisicing.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card baris2" data-aos="flip-left" data-aos-duration="500" data-aos-delay="600">
              <img src="img/projects/1bawah.jpg" class="card-img-top" alt="image 5" />
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Tenetur.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card baris2" data-aos="flip-left" data-aos-duration="500" data-aos-delay="750">
              <img src="img/projects/2bawah.jpg" class="card-img-top" alt="image 6" />
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Tenetur.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card baris2" data-aos="flip-left" data-aos-duration="500" data-aos-delay="900">
              <img src="img/projects/3bawah.jpg" class="card-img-top" alt="image 7" />
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Tenetur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#F8FFD5"
          fill-opacity="1"
          d="M0,192L60,202.7C120,213,240,235,360,218.7C480,203,600,149,720,144C840,139,960,181,1080,192C1200,203,1320,181,1380,170.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End Projects -->

    <!-- Gallery Start -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Gallery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/1.jpg" alt="gambar 1" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/2.jpg" alt="gambar 2" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/3.jpg" alt="gambar 3" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/4.jpg" alt="gambar 4" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/5.jpg" alt="gambar 5" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/6.jpg" alt="gambar 6" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/7.jpg" alt="gambar 7" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/8.jpg" alt="gambar 8" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/9.jpg" alt="gambar 9" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img src="./img/gallery/10.jpg" alt="gambar 10" class="img-fluid gallery-img" />
            </a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,96L40,117.3C80,139,160,181,240,176C320,171,400,117,480,96C560,75,640,85,720,106.7C800,128,880,160,960,144C1040,128,1120,64,1200,42.7C1280,21,1360,43,1400,53.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Gallery End -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3 contactMe">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3 contactMe">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
                <div id="email" class="form-text">Input You're Email</div>
              </div>
              <div class="mb-3 contactMe">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-warning contactMe">Send</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#d6e478"
          fill-opacity="1"
          d="M0,160L40,170.7C80,181,160,203,240,192C320,181,400,139,480,117.3C560,96,640,96,720,133.3C800,171,880,245,960,261.3C1040,277,1120,235,1200,197.3C1280,160,1360,128,1400,112L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- End Contact -->

    <!-- Footer mempunyai tag sendiri di html5, jadi tidak usah memakai section -->
    <!-- Footer -->
    <footer class="text-center pb-2">
      <p class="footer">
        Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://twitter.com/devskke" target="_blank" class="text-reset fw-bold text-decoration-none">Pande Deva <i class="bi bi-twitter text-primary"></i></a>
      </p>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      const galleryImage = document.querySelectorAll(".gallery-img");

      galleryImage.forEach((img, i) => {
        img.dataset.aos = "fade-down";
        img.dataset.aosDelay = i * 100;
        img.dataset.aosDuration = 1000;
        img.dataset.aosOnce = "false";
        img.dataset.aosOffset = 200;
      });

      AOS.init({
        once: true,
      });
    </script>
    <!-- END aos -->

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <!-- pluggin GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
    <!-- my js -->
    <script src="./js/script.js"></script>
    <!-- script tombol youtube -->
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>
