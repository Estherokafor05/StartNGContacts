<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <title>Start NG</title>
    <style>
        body {
            font-family: Nunito;
        }
        /* Style for Navbar Starts */
        
        .navbar-custom li a {
            color: #000;
        }
        
        .btn-success {
            background-color: #2DCE89;
            color: #fff;
            border: thin solid #2dce89;
        }
        
        .btn-success:hover {
            background-color: #2DCE89;
            color: #fff;
            border: thin solid #2dce89;
        }
        
        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        
        .custom-toggler.navbar-toggler {
            border-color: #000;
        }
        /* Style for Navbar Ends */
        /* Style for Footer Starts */
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }
        
        a {
            text-decoration: none;
        }
        
        .deep {
            background: #3A0842;
            color: #fff;
        }
        
        .deep #slink {
            background: #44CF6C;
            border-radius: 10px;
            color: white;
            padding: 10px 70px;
        }
        
        .deep li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            line-height: 30px;
        }
        
        .deep li {
            list-style: none;
        }
        
        .deep li a:hover {
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: none;
        }
        
        .icons i {
            font-size: 26px;
            height: 50px;
            width: 50px;
            padding: 10px 20px;
            color: white;
        }
        
        .icons i.fa.fa-twitter:hover {
            color: #00aced;
        }
        
        .icons i.fa.fa-facebook:hover {
            color: #3b5598;
        }
        
        .icons i.fa.fa-instagram:hover {
            color: #ed3833;
        }
        /* Style for Footer Ends */
        
        .body-banner {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570926364/startng/Group_415_yteas3.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        
        .checked {
            color: orange;
        }
        
        .video {
            background-color: #44CF6C;
        }
        
        .help {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570930464/startng/Group_418_ngwxfa.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom bg-custom">
        <div class="container">
            <a href="/" class="navbar-brand"><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png" class="img-fluid" alt="logo" width="150px"></a>
            <button class="navbar-toggler float-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbar9" style="color: #000;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar9">
                <ul class="navbar-nav ml-auto">
                   
                    
                    <li class="nav-item mr-5">
                        <a class="btn btn-success nav-link px-5" href="admin" style="color: #fff;">Admin
                            Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid body-banner pt-5 pb-5">
        <div class="col-md-6 offset-md-2">
            <h4 class="pt-5 mt-5 pb-4" style="color: #fff; font-style: normal; font-weight: 600; font-size: 35px; line-height: 27px;">Welcome to StartNG Contacts</h4>
            <p class="pb-3" style="color: #fff; font-style: normal; font-weight: 400; font-size: 16px; line-height: 27px;">
            </p>
            <a href="admin" class="btn btn-success pl-5 pr-5 mb-4">Admin Login</a>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center mt-4">
            <div class="col-md-6">
                <h4 class="mb-4 mt-3">Add and Manage contacts and subscribers</h4>
                <p>Have control over all your subscribers. <br>
                 Disseminate information via mails and import more contacts with ease.</p>
            </div>
         
            <div class="col-md-6 mb-3">
                <!-- <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570926879/startng/Group_144_qgkkfx.png" class="img-fluid"> -->
                <img src="https://res.cloudinary.com/salasi/image/upload/v1571951003/digi_jiyee2.png" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-5" style="background-color: rgba(42, 43, 42, 0.05);">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                <div class="col-md-8 pb-5">
                    <h4 style="font-weight: bold; font-size: 40px;">Try out our New Import email function</h4>
                    <p style="font-size: 20px;">Fetches emails from json file format
                    </p>
                    <p style="font-size: 20px;">Note: Import Contact Function in dashboard, Only works with VCF and text file formats.
                    </p>
                    
                       <form action="importcontacts.php">
                        <button type="submit" class="btn btn-primary ml-1 pl-5 pr-5" style="background-color: #44CF6C; border-color: #44CF6C;">Proceed</button>
                    </form>
                    
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570931071/startng/newsletter_1_h3frhq.png">
                </div>
            </div>
        </div>
    </div>
        
    
    <!-- Footer -->
    <div class="container-fluid text-white deep">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-3 mb-4">
                        <img src="https://res.cloudinary.com/juwon-tech/image/upload/v1570818437/Logo_1_oyasky.png" alt="">
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-lg-4 col-md-12 mb-3">
                        <h4 class='mb-4'>Ready to take the Leap?</h4>
                        <a href="https://startng.ml/signup" class='btn btn-success px-5 py-2 mb-5'>Start!</a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="https://startng.ml/about">About Us</a></li>
                        <li><a href="https://startng.ml/courses/index">Our Course</a></li>
                        <li><a href="https://startng.ml/graduates">Hire a Grad</a></li>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="https://startng.ml/curriculum">Curriculum</a></li>
                        <li><a href="https://startng.ml/blog">Blog</a></li>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="https://startng.ml/find-course">Find a Course</a></li>
                        <li><a href="https://startng.ml/contact">Contact Us</a></li>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 my-2">
                        <li><a href="https://startng.ml/faq">FAQ</a></li>
                        <li><a href="https://startng.ml/terms">Terms of Service</a></li>
                        <li><a href="https://startng.ml/privacy">Privacy Policy</a></li>
                    </div>
                </div>
            </div>
    </div>
    <div class="container-fluid text-white py-2" style="background: #2E0435; width:100%;">
        <div class="container text-right">
            <div class="row icons">
                <div class="col-md-12 ">
                    <a href=""><i class='fab fa-twitter' aria-hidden="true"></i></a>
                    <a href=""><i class='fab fa-instagram' aria-hidden="true"></i></a>
                    <a href=""><i class="fab fa-facebook" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        </footer>
    </div>
    <!-- End of Footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>