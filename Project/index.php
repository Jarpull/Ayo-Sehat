<?php
include('register.php');
include('login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayo Sehat - Info Kesehatan, Booking dan Tanya Dokter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="index.html"><img src="images/logo.png"></a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                    <a class="nav-link" href="Artikel.html">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forum.html">Forum Kesehatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buatjanji.html">Buat Janji</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="BMI.html">Kalkulator BMI</a>
                </li>
                <li><a href="#" class="tom" id="login">Masuk</a></li>
                <li><a href="#" class="tom2" id="regis">Daftar</a></li>
            </ul>
          </div>
        </nav>
    </header>

    <section class="banner">
        <div class="content">
            <h2>Solusi Kesehatan Terbaik Di Indonesia</h2>
            <p>Konsultasi dokter dan update informasi seputar kesehatan, semua bisa di Ayo Sehat</p>
            <a href="buatjanji.html" class="tom">Cari Dokter</a>
        </div>
    </section>

    <section class="about">
        <div class="media">
          <div class="media-body">
            <h2 class="mt-0 mb-1">Tentang Kami</h2>
            <p>Ayo Sehat merupakan aplikasi berbasis web kesehatan digital yang dibuat pada tahun 2020. 
            Semakin berkembangnya teknologi dalam digital, maka dari bidang kesehatan juga harus ikut 
            menyesuaikan dengan perkembangan tersebut. Pada aplikasi ini menyediakan layanan kesehatan 
            yang dapat diakses oleh siapa saja dan juga terdapat informasi-informasi terkait kesehatan.</p>
            <hr>
          </div>
          <img src="images/about1.png" class="ml-3" alt="...">
        </div>
    </section>

    <section class="artikel">
        <div class="title">
            <h2 class="titleText">Artikel Kesehatan Terkini untuk Anda</h2>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <a href="Artikel2.html"><img src="images/artikel1.jpg"></a>
                </div>
                <div class="text">
                    <h3>Berbagai Jenis Obat Asam Lambung dan Penanganannya di Rumah</h3>
                </div>
                <div class="deskripsi">
                    <p>Konsumsi obat asam lambung merupakan cara paling mudah dan cepat untuk mengatasi penyakit asam lambung.
                         Namun, penggunaan obat ini sebaiknya...</p>
                </div>
                <div class="link">
                    <a href="Artikel2.html">Baca Selengkapnya</a>
                </div>       
            </div>
            <div class="box">
                <div class="imgBx">
                   <a href="Artikel3.html"><img src="images/artikel2.jpg"></a>
                </div>
                <div class="text">
                    <h3>Intip Manfaat Buah Tin untuk Kesehatan</h3>
                </div>
                <div class="deskripsi">
                    <p>Di balik rasanya yang manis serta tampilan dan teksturnya yang unik, ada banyak manfaat buah 
                        tin yang bisa kita dapatkan. Berbagai kandungan...</p>
                </div>
                <div class="link">
                    <a href="Artikel3.html">Baca Selengkapnya</a>
                </div>                
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="Artikel4.html"><img src="images/artikel3.jpg"></a>
                </div>
                <div class="text">
                    <h3>Ketahui 5 Manfaat Minum Susu di Pagi Hari</h3>
                </div>
                <div class="deskripsi">
                    <p>Minum susu kerap menjadi salah satu solusi bagi orang yang sering kali melewatkan sarapan. 
                        Tak hanya rasanya yang nikmat, manfaat minum...</p>
                </div>
                <div class="link">
                    <a href="Artikel4.html">Baca Selengkapnya</a>
                </div>       
            </div>
        <div class="title">
           <a href="Artikel.html" class="tom">Artikel Lainnya</a>
        </div>
    </section>

    <div class="popup">
        <div class="login">
            <div class="imgBx">
                <img src="images/login.png" alt="">
                <p>Belum Punya Akun? <a href="#" id="daftar">Daftar</a></p>
            </div>
                <!-- login form -->
                <form action="" method="POST">
                <div class="form">
                <h1>Masuk</h1>
                <div>
                    <i class="fa far fa-user-circle"></i>
                    <input type="text" name="email" placeholder="Username">
                </div>
                <div>
                    <i class="fa fas fa-lock"></i>
                    <input type="password"  name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-success btn-md" name="login" value="Login">Masuk</button>
            </div>
                </form>
        
            <div class="close">
                <i class="fa fa-close"></i>
            </div>
        </div>
        
        <div class="regist">
            <div class="imgBx">
                <img src="images/daftar.png" alt="">
                <p>Sudah Punya Akun? <a href="#" id="masuk">Masuk</a></p>
            </div>

            <form action="" method="POST">
            <div class="form">
                <h1>Daftar Sekarang</h1>
                <div>
                    <i class="fa far fa-user-circle"></i>
                    <input type="text" name="name" placeholder="Username">
                </div>
                <div>
                    <i class="fa fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div>
                    <i class="fa far fa-calendar"></i>
                    <input type="date" name="tanggallahir" placeholder="Tanggal Lahir">
                </div>
                <div>
                    <i class="fa fab far fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div>
                    <i class="fa fas fa-phone"></i>
                    <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin">
                </div>
                <input type="submit" class="btn btn-success btn-block" name="register"
                value="Daftar"/>
            </div>
            </form>
            <div class="close">
                <i class="fa fa-close"></i>
            </div>
        </div>
    </div>
    
    <div class="footer">
    	<div class="colom1">
            <img src="images/logo.png">
            <div class="phone">
                <div class="imgBx">
                    <img src="images/call.png" alt="">
                </div>
                <h2>021-7468981</h2>
            </div>   		
    	</div>
    	<div class="colom2">
    		<h2>Menu</h2>
    		<hr>
    		<ul>
    			<li><a href="Artikel.html">Artikel</a></li>
    			<li><a href="forum.html">Forum Kesehatan</a></li>
    			<li><a href="buatjanji.html">Buat Janji</a></li>
    			<li><a href="BMI.html">Kalkulator BMI</a></li>
    		</ul>
    	</div>
    	<div class="colom3">
    		<h2>Kontak Kami</h2>
            <hr>
            <div class="email">
                <div class="imgBx">
                    <img src="images/email 1.png" alt="">
                </div>
                <p>ayosehat@gmail.com</p>
            </div>
            <div class="sosmed">
                <div class="imgBx">
                    <img src="images/013-twitter-1.png" alt="">
                </div>
                <div class="imgBx">
                    <img src="images/034-instagram.png" alt="">
                </div>
                <div class="imgBx">
                    <img src="images/043-facebook-1.png" alt="">
                </div>
            </div>
    	</div>
    </div>
    <footer>
		<div class="foot">
			<small>2020 © Developed by <span>Ayo Sehat</span></small>
		</div>
    </footer>
    <script type="text/javascript" src="javascript.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>