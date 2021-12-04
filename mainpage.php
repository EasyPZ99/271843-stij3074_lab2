<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script>alert('Session not available. Please login');</script>";
    echo "<script> window.location.replace('login.php')</script>";
}
$results_per_page = 4;
if (isset($_GET['pageno'])) {
    $pageno = (int)$_GET['pageno'];
    $page_first_result = ($pageno - 1) * $results_per_page;
} else {
    $pageno = 1;
    $page_first_result = 0;

}

include_once("../dbconnect.php");

?>

<!DOCTYPE html>
<html>

<title>AFIRA HERBS & BEAUTY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://www.cssscript.com/demo/sticky.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar@1.0.5/dist/css/theme-basic.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar@1.0.5/dist/css/theme-glass.css" />
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}
/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211105_131145.jpg?raw=true');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211104_220510.jpg?raw=true");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211104_220336.jpg?raw=true");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}

</style>
<body>

  
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button w3-padding-5 w3-black w3-animate-opacity">LAMAN UTAMA</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-5 w3-black w3-animate-opacity w3-hide-small"><i class="fa fa-user"></i> MENGENAI KAMI</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-padding-5 w3-black w3-animate-opacity w3-hide-small"><i class="fa fa-th"></i> ISI KANDUNGAN</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-5 w3-black w3-animate-opacity w3-hide-small"><i class="fa fa-envelope"></i> HUBUNGI KAMI</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
    <a href="http://localhost/assgn/login.php" class="w3-bar-item w3-button w3-black w3-animate-opacity">LOGIN</a>
    <a href="#logout" class="w3-bar-item w3-button w3-black w3-right w3-animate-opacity">LOGOUT</a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">MENGENAI KAMI</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">ISI KANDUNGAN</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">HUBUNGI KAMI</a>

  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">AFIRA <span class="w3-hide-small">HERBS</span> & BEAUTY</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">MAKLUMAT UTAMA</h3>
  <p class="w3-center"><em>KAMI MENYEDIAKAN RAWATAN TRADISIONAL</em></p>
  <p style= "font-size:150%;"> Kami menyediakan perkhidmatan rawatan untuk lelaki dan wanita, rawatan kesihatan urutan bertungku, refleksologi, rawatan alternatif, rawatan resdung, rendaman dan spa kaki. </p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p style= "font-size:150%;"><b><i class="fa fa-user w3-margin-right"></i>Tentang Saya</b></p><br>
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/enzamri.jpg?raw=true" class="w3-round w3-image " alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Do not hide this text on small devices -->
    <div class="w3-col m6 w3-padding-large">
      <p style= "font-size:150%;">Assalamualaikum, saya Zamri Bin Daud pemilik Pusat Rawatan Afira Herbs & Beauty Enterprise. Saya sudah mempunyai pengalaman selama 25 tahun dalam bidang perubatan tradisional. Saya juga menyediakan pelbagai jenis rawatan refleksologi dan perubatan mistik mengikut teknik perubatan Islam.</p>
    </div>
  </div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">3</span><br>
    Produk
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">6</span><br>
    Jenis Rawatan
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">100+</span><br>
    Pelanggan
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">10 pagi - 9 malam</span><br>
    Waktu Operasi
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">ISI KANDUNGAN</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">PHOTO TEMPAT PERKHIDMATAN KAMI</h3>
  <p class="w3-center"><em>Di sini ialah gambar-gambar tentang pusat rawatan kami.<br> Sila tekan pada gambar untuk meluaskan saiz gambar.</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211104_220336.jpg?raw=true" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ruangan Menunggu">
    </div>

    <div class="w3-col m3">
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211105_131145.jpg?raw=true" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bilik Rawatan">
    </div>

    <div class="w3-col m3">
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211104_220534.jpg?raw=true" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Katil Rawatan">
    </div>

    <div class="w3-col m3">
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211104_220546.jpg?raw=true" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Ruangan Mandi Semasa Rawatan">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211104_220411.jpg?raw=true" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Produk Kami">
    </div>

    <div class="w3-col m3">
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211104_220421.jpg?raw=true" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Perkhidmatan Yang Disediakan">
    </div>

    <div class="w3-col m3">
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211104_222013.jpg?raw=true" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Maklumat Produk">
    </div>

    <div class="w3-col m3">
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211104_220534.jpg?raw=true" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Katil Rawatan">
    </div>

  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CARA MENGHUBUNGI</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">HUBUNGI KAMI</h3>
  <p class="w3-center"><em>Untuk Maklumat Lanjut!!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/logo1121.png?raw=true" class="w3-image w3-round" width="150px" height="150px">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 112, Lorong Sri Penaga 2/3, TMN Sri Penaga Fasa 1, Sikamat, 70400 Seremban, Negeri Sembilan Darul Khusus<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 011-20748098<br>
   <!-- CSSScript Calendar -->
  </script></div>
  <div class="css-script-clear"></div>
  <div class="container">
  
  <div id="color-calendar"></div>
  
   <div class="events-display"></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/color-calendar@1.0.5/dist/bundle.min.js"></script>
  <script>
  new Calendar({
  id: '#color-calendar',
  calendarSize: 'large',
  eventsData:[
  {
      start: '2021-04-15T06:00:00',
      end: '2021-04-15T20:30:00',
      name: 'Event 1',
      url: 'https://www.cssscript.com',
  },{
      start: '2021-04-16T06:00:00',
      end: '2021-04-16T20:30:00',
      name: 'Event 2',
      url: 'https://www.cssscript.com',
  },{
      start: '2021-04-16T06:00:00',
      end: '2021-04-17T20:30:00',
      name: 'Event 3',
      url: 'https://www.cssscript.com',
  },
  ],
  theme: 'glass',
  primaryColor: '#777',
  headerBackgroundColor: '#777',
  // weekdayType: 'long-lower',
  dateChanged: (currentDate, events) => {
  const events_display = document.querySelector('.events-display');
  let events_html = '';
  console.log(currentDate, events);
  events.forEach(event => {
    events_html += `
      <div class="event">
        <div class="event-left">
          <div class="event-title">${event.name}</div>
          <a href="${event.url}" target="_blank" class="event-url">${event.url}</a>
        </div>
      </div>
    `
  });
  
  }
  })
  </script>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Kembali Ke Atas</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Hak milik AFIRA HERBS & BEAUTY Sdn.Bhd</p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<style>
  html,* { font-family: 'Inter'; box-sizing: border-box; }
body { background-color: #fafafa; line-height:1.6;}
.lead { font-size: 1.5rem; font-weight: 300; }
.container { margin: 150px auto; max-width: 960px; }
</style>
</head>
<?php
    $num = 1;
    if ($pageno == 1) {
        $num = 1;
    } else if ($pageno == 2) {
        $num = ($num) + $results_per_page;
    } else {
        $num = $pageno * $results_per_page - 9;
    }
    echo "<div class='w3-container w3-row'>";
    echo "<center>";
    for ($page = 1; $page <= $number_of_page; $page++) {
        echo '<a href = "mainpage.php?pageno=' . $page . '" style=
        "text-decoration: none">&nbsp&nbsp' . $page . ' </a>';
    }
    echo " ( " . $pageno . " )";
    echo "</center>";
    echo "</div>";
    ?>

</body>
</html>

