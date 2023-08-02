<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <!-- <meta name="theme-color" content="#33a16e" /> -->
  <title>Contact</title>
  <meta name="author" content="ho">
  <meta name="description" content="">
  <meta name="keywords"
    content="">



<!-- FAVICON FILES -->
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="144x144">
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images/favicon/fav.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/favicon/fav.png" rel="apple-touch-icon">
  <link href="images/favicon/fav.png" rel="shortcut icon">

  <!-- CSS FILES -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
// Check if the form is submitted
if (isset($_POST['send'])) {
    // Get form data
    $name = $_POST["userName"];
    $phone = $_POST["userPhone"];
    $email = $_POST["userEmail"];
    $message = $_POST["userMessage"];

    // Validate form data (you can add your own validation logic here)

    // Set up the recipient email address
    $recipient = "ajmalnk10091@gmail.com";

    // Set up the email headers
    $headers = "From: zainbuilders.co <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Compose the email body
    $body = "
        <html>
        <head>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        </style>
        </head>
        <body>
        <h2>Contact Form</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>$name</td>
            </tr>

            <tr>
                <th>Contact Number</th>
                <td>$phone</td>
            </tr>
            <tr>
                <th>Contact Number</th>
                <td>$email</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>$message</td>
            </tr>
        </table>
        </body>
      </html>
    ";

    // Attempt to send the email
    if (mail($recipient, "New Contact Form Submission", $body, $headers)) {
        echo '<script>alert("Thanks for your inquiry. We will contact you shortly.");</script>';
    } else {
        echo '<script>alert("Email sending failed, Try again");</script>';
    }
}
?>
  <nav>
    <div class="navigation-wrap start-header start-style">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-md navbar-light">

              <a class="navbar-brand" href="/" target="_blank"><img src="images/zain-removebg-preview.png" alt=""></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto py-4 py-md-0">

                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="/#about-id">About</a>
                  </li>

                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                    <a class="nav-link" href="projects">Projects</a>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="contact">Contact</a>
                  </li>
                </ul>
              </div>

            </nav>
          </div>
        </div>
      </div>
    </div>
  </nav>


   <div class="pad-div"></div>
    <section>
        <div class="container contact-sections">
            <div class="row">
                <div class="col-md-6 part-1">
                    <div class="head">
                        <h1>Find Us</h1>
                    </div>
                    <div class="address-para">
                      <p>
                        Rameez Mansion, Feroke-Kallambara,
                      <br>
                      Calicut, Kerala
                      </p>
                    </div>
                    <div class="mail">
                        <a href="mailto:zainbuilders313@gmail.com">zainbuilders313@gmail.com</a>
                    </div>
                    <div class="appointments">
                      <p>Appointments &
                        <br>
                        Business queries:
                        <br>
                      </p>
                      <div>
                        <span><a href="tel:+9072258986">+9072258986</a></span>
                        <br>
                        <span><a href="tel:+8086633313">+8086633313</a></span>
                      </div>
                    </div>

                    <div class="contact-svg">
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z" fill="rgba(51,51,51,1)"></path></svg>
                        <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z" fill="rgba(51,51,51,1)"></path></svg></a></a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M18.3362 18.339H15.6707V14.1622C15.6707 13.1662 15.6505 11.8845 14.2817 11.8845C12.892 11.8845 12.6797 12.9683 12.6797 14.0887V18.339H10.0142V9.75H12.5747V10.9207H12.6092C12.967 10.2457 13.837 9.53325 15.1367 9.53325C17.8375 9.53325 18.337 11.3108 18.337 13.6245V18.339H18.3362ZM7.00373 8.57475C6.14573 8.57475 5.45648 7.88025 5.45648 7.026C5.45648 6.1725 6.14648 5.47875 7.00373 5.47875C7.85873 5.47875 8.55173 6.1725 8.55173 7.026C8.55173 7.88025 7.85798 8.57475 7.00373 8.57475ZM8.34023 18.339H5.66723V9.75H8.34023V18.339ZM19.6697 3H4.32923C3.59498 3 3.00098 3.5805 3.00098 4.29675V19.7033C3.00098 20.4202 3.59498 21 4.32923 21H19.6675C20.401 21 21.001 20.4202 21.001 19.7033V4.29675C21.001 3.5805 20.401 3 19.6675 3H19.6697Z" fill="rgba(51,51,51,1)"></path></svg></a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M6.27051 7.62976C8.86829 7.07312 10.816 4.76401 10.816 2H13.8463V7.15152H17.4826V10.7879H13.8463V16.2424C13.8463 16.7566 14.044 17.4493 14.7554 17.9091C15.2296 18.2156 16.2397 18.3671 17.7857 18.3636V22H13.5432C11.0329 22 8.99778 19.9649 8.99778 17.4545V10.7879H6.27051V7.62976Z" fill="rgba(51,51,51,1)"></path></svg></a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M13.3717 2.09442C8.42512 1.41268 3.73383 4.48505 2.38064 9.29256C1.02745 14.1001 3.42711 19.1692 8.00271 21.1689C7.94264 20.4008 7.99735 19.628 8.16502 18.8761C8.34964 18.0374 9.46121 13.4132 9.46121 13.4132C9.23971 12.9173 9.12893 12.379 9.13659 11.8359C9.13659 10.3509 9.99353 9.24295 11.0597 9.24295C11.4472 9.23718 11.8181 9.40028 12.0758 9.68981C12.3335 9.97934 12.4526 10.3667 12.402 10.751C12.402 11.6512 11.8236 13.0131 11.5228 14.2903C11.4014 14.7656 11.5131 15.2703 11.8237 15.65C12.1343 16.0296 12.6069 16.2389 13.0967 16.2139C14.9944 16.2139 16.2675 13.7825 16.2675 10.9126C16.2675 8.71205 14.8098 7.0655 12.1243 7.0655C10.826 7.01531 9.56388 7.4996 8.63223 8.40543C7.70057 9.31126 7.18084 10.5595 7.19423 11.859C7.16563 12.5722 7.39566 13.2717 7.84194 13.8287C8.01361 13.9564 8.07985 14.1825 8.00425 14.3827C7.9581 14.5673 7.84194 15.0059 7.79578 15.1675C7.77632 15.278 7.70559 15.3728 7.60516 15.4228C7.50473 15.4729 7.38651 15.4724 7.28654 15.4214C5.9019 14.8674 5.24957 13.3439 5.24957 11.6051C5.24957 8.75822 7.63424 5.3497 12.4036 5.3497C16.1998 5.3497 18.723 8.1273 18.723 11.0972C18.723 15.0059 16.5468 17.9451 13.3298 17.9451C12.3526 17.9761 11.4273 17.5061 10.8759 16.6986C10.8759 16.6986 10.2974 19.0146 10.1835 19.4531C9.95101 20.2099 9.60779 20.9281 9.16505 21.5844C10.0877 21.8643 11.0471 22.0044 12.0113 22C14.6636 22.0017 17.2078 20.9484 19.0829 19.072C20.958 17.1957 22.0099 14.6504 22.0069 11.9975C22.004 7.00306 18.3183 2.77616 13.3717 2.09442Z" fill="rgba(51,51,51,1)"></path></svg></a>
                      <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M18.364 17.364L12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364ZM12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z" fill="rgba(51,51,51,1)"></path></svg></a>
                      

                    </div>
                    
                </div>
                <div class="col-md-6 part-2">
                  <div class="head-h3">
                    <h3>Let’s start the conversation</h3>
                    <form action="" method="post">
                      <input type="text" name="userName" placeholder="Name" required>
                      <br>
                      <input type="number" name="userPhone" placeholder="Number" required>
                      <br>
                      <input type="email" name="userEmail" placeholder="Email">
                      <br>
                      <textarea name="userMessage" id="" cols="" rows="5" placeholder="Message"></textarea>
                      <br>
                      <input type="submit" value="Submit" name="send" class="submit">

                    </form>
                  </div>
        
                </div>
            </div>
        </div>
    </section>
    

    


  <section style="display: none;">
    <div class="agileits-w3layouts-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15652.015831719982!2d75.7837097!3d11.2611186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65956c931d0fd%3A0xa7f288fe7b09c99a!2sS%20G%20Arcade!5e0!3m2!1sen!2sin!4v1680512658109!5m2!1sen!2sin" allowfullscreen></iframe>
    </div>
  </section>
  
  <footer>
    <div class="mt-5 pt-5 pb-5 footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-xs-12 about-company">
            <img src="images/zain-removebg-preview.png" alt="">
            <p class="pr-5 pt-3">Delivering Excellence and Customer Satisfaction</p>
          </div>
          <div class="col-lg-3 col-xs-12 links">
            <h4 class="mt-lg-0 mt-sm-3">Links</h4>
            <ul class="m-0 p-0">
              <li> <a href="/">Home</a></li>
              <li> <a href="/#about-id">About us</a></li>
              <li> <a href="projects">Projects</a></li>
              <li> <a href="/#services">Services</a></li>
              <li> <a href="contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-xs-12 location">
            <h4 class="mt-lg-0 mt-sm-4">Address</h4>
            <p>Rameez Mansion, Feroke-Kallambara,
              <br>
              Calicut, Kerala</p>
            <p class="mb-0 ft-num"><a href="tel:+9072258986">+9072258986</a></p>
            <p class="ft-num"><a href="mailto:zainbuilders313@gmail.com">zainbuilders313@gmail.com</a></p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col copyright">
            <p class=""><small class="text-white-50">© 2023. Powered by <a href="https://dostudio.co.in/" target="_blank" class="footer-link">DO Studio.</a></small></p>
          </div>
        </div>
      </div>
    </div>
  </footer>








  <!-- JS FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/tilt.jquery.js"></script>
  <script src="js/jquery.typewriter.js"></script>
  <script src='js/TweenMax.min.js'></script>
  <script src='js/imagesloaded.pkgd.min.js'></script>
  <script src='js/particles.min.js'></script>
  <script src='js/jquery.parallax.min.js'></script>
  <script src='js/motion.blur.js'></script>
  <script src="js/anime.min.js"></script>

  <script src="js/scripts.js"></script>

</body>

</html>