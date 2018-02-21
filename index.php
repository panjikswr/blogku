<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">BERBAGI INFORMASI</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>WELCOME TO MY BLOG</h1>
              <span class="subheading">BELAJARLAH SAMPAI KE NEGERI CINA</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="">
       
          <div class="post-preview">
           
              <h2 class="post-title">
                Hosting
              </h2>
              <div class="post-subtitle">
               Pengertian Hosting
                Seperti yang saya gunakan blog saya ini menggunakan layanan Github,penyedia layanan domain dari GIthub, nama domain yang saya gunakan               untuk mengidentifikasi dana mempermudah penggunjung website lebih mudah 
                <p> Hosting adalah tempat untuk menyimpan data-data dari sebuah website agar dapat diakses melalui internet, data-data tersebut dapat berupa file, gambar, video, email, database, program, dll. Hosting untuk keperluan website sering juga disebut sebagai Web Hosting.</p>

              </div>
            
            <p class="post-meta">Posted by
              <a href="#">panji kisworo</a>
              on februari 19, 2018</p>
          </div>
          <hr>
          <div class="post-preview">
            
              <h2 class="post-title">
                Domain
              </h2>
              <div class="post-subtitle">
              <br>Pengertian Domain :</br>
Domain adalah alamat dari sebuah website. Nama domain inilah yang akan digunakan oleh orang-orang untuk dapat mengunjungi website Anda, misalnya Facebook.com, Google.com.
Fungsi domain adalah untuk mempermudah pengunjung dalam mengakses dan mengingat alamat website Anda. Selain itu, apabila sewaktu-waktu Anda harus mengubah alamat IP website Anda untuk keperluan tertentu (misalnya pindah server komputer), maka Anda tidak perlu susah-susah memberitahu ke pengunjung alamat IP baru Anda, karena yang mereka perlukan hanyalah sebuah nama domain untuk bisa akses ke website Anda.
Berikut ini adalah jenis jenis yang sering kita jumpai :
.com digunakan untuk domain website komersial atau perusahaan
.net digunakan untuk domain website jaringan
.org digunakan untuk domain website organisasi (non profit)
.gov digunakan untuk domain website pemerintah
.biz digunakan untuk domain website bisnis
.info digunakan untuk domain website informasi
.edu digunakan untuk domain website pendidikan
.ac digunakan untuk domain website akademis
.sch digunakan untuk domain website sekolah
.id digunakan untuk domain website Indonesia
.uk digunakan untuk domain website United Kingdom (Inggris)
.us digunakan untuk domain website United States (Amerika)
.co.id digunakan untuk domain website komersial atau perusahaan di Indonesia
.go.id digunakan untuk domain website pemerintah di Indonesia
.or.id digunakan untuk domain website organisasi non profit di Indonesia
.web.id digunakan untuk domain website non formal atau pribadi di Indonesia.

              </div>
            
            <p class="post-meta">Posted by
              <a href="#">panji kisworo</a>
              on februari 19, 2018</p>
              
               <form action="index.php"  method="post">
      <div class="form-group">
        <label for="nama">Nama </label>
        <input type="text" class="form-control" name="nama" style="width: 60%" placeholder="Nama">
      </div>
      <div class="form-group">
        <label for="alamat">Email</label>
        <input type="email" class="form-control" name="email" style="width: 60%" placeholder="Email">
      </div>
      <div>
        <label>Kolom Komentar :</label> <br>
              <textarea rows="4" name="komentar" style="width: 60%"></textarea>
      </div>
      
       
      <div class="container"> <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
 
  <!-- Modal -->
  
      </div>
          </div>
          <?php 
        if (isset($_POST['submit'])) {
        $nama=$_POST['nama'];
        
        $email=$_POST['email'];
        $komentar= $_POST['komentar'];
       
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = 'mail.smtp2go.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'panjikisworo172@gmail.com';
        $mail->Password = 'panji123456789';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        $mail->setFrom('berbagiinformasi@gmail.com', 'BERBAGI INFORMASI');
        $mail->addReplyTo('berbagiinformasi@gmail.com', 'BERBAGI INFORMASI');

        $mail->addAddress('panjikisworo172@gmail.com');


        $mail->Subject = 'Komentar Anda Terkirim';
        $mail->isHTML(true);
        $mailContent = "Berbagi informasi";
        $mail->Body = " <h3>Succes</h3>
            <p>Nama :$nama</p>
            <p>Komentar :$komentar</p>
            <p>email :$email</p>
            <p>Terimakasih Telah Berkomentar </p>
        ";
          
        
        if(!$mail->send()){
          echo 'Pesan tidak dapat dikirim.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
          
        echo "<script>alert('Komentar Anda Telah Terkirim')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
        
        
       
        }
 }
      ?>
</form>
    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Panji kisworo 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
