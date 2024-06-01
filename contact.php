<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    
    <!-- Style -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Wilbert Bryan Wibowo - Personal Website</title>

     <!-- Bootstrap icons-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
  </head>
  <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">WB</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

  <div class="content">
    
    <div class="container">

      
      <div class="row justify-content-center">
        <div class="col-md-10">
          
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">

              <h2 class="text-gradient d-inline mb-5">Fill the form. <br> It's easy.</h2>

              <?php
              if(!isset($_GET["proses"])){
              ?>

              <form action="contact.php?proses=save" class="border-right pr-5 mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Full name" required="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                  </div>
                </div>
                <div class ="row">
                  <div class="col-md form-group">
                      <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone number" required="">
                    </div>
                </div>
                

                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message" required=""></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary pl-5 pr-5">
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>
              
              <?php
              }

              else {
                //echo"selamat";
                $serverName = "localhost";
                $userName = "root";
                $password = "";
                $database = "webdev_afl2";
        
                // create connection
                $conn = new mysqli($serverName, $userName, $password, $database);
        
                if($conn->connect_error){
                    die("Connection failed: ".$conn->connect_error);
                }
                //echo "Connected successfully";
        
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
             
        
                $sql = "INSERT INTO table1
                        VALUES('$name', '$email', '$phone', '$message')";
        
                if ($conn->query($sql) === TRUE) {
                    //echo "Data berhasil dimasukkan.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        
                $conn->close();
               
                echo "<script>
                window.location.href='contact.php';
                </script>";
              }
             ?>

      


              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>
            <div class="col-lg-4 ml-auto">
              <h3 class="mb-4">Let's talk about everything.</h3>
              <p>"Small deeds done are better than great deeds planned." - Peter Marshall</p>
            </div>
          </div>
        </div>  
        </div>
      </div>
  </div>
   <!-- Footer-->
   <!-- Footer-->
   <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                   
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="https://www.linkedin.com/in/wilbert-bryan-wibowo-6b2b18304/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="https://github.com/WilbertBryan" target="_blank"><i class="bi bi-github"></i></a>
                        <a class="text-gradient" href="https://wa.me/08123449790" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a class="text-gradient" href="https://www.instagram.com/wilbertbryann/" target="_blank"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    
    

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/main.js"></script>
            </main>
            </body>
</html>

<style>
  body {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  background-color: #fff;
  color: #000; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Poppins", sans-serif; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.content {
  padding: 7rem 0; }

h2 {
  font-size: 3.5rem;
  font-weight: 700; }

h3 {
  font-size: 2rem;
  font-weight: 700; }

.form-control {
  border: none;
  border-bottom: 1px solid #d9d9d9;
  padding-left: 0;
  padding-right: 0;
  border-radius: 0; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.btn, .form-control {
  height: 55px; }

form.border-right {
  padding-right: 6rem !important; }
  @media (max-width: 991.98px) {
    form.border-right {
      padding-right: 0 !important;
      border-right: none !important; } }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }

  input, textarea{
    border-radius: 25px !important;
    padding: 10px 10px !important;
  }
  </style>