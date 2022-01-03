<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FutureSeekers</title>
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/background.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/nav.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/footer.css') ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>


    <body>
    
    <?php 

// Regens session
session();
session() -> regenerate(); 
$user_id = session()->get('UserID'); // Gets the user ID session


if(!isset($_SESSION['UserID']))
{
    // If no user is logged in, display the basic navigation bar
?>

    <header>
        <h1 class="heading">FutureSeekers</h1>

        <nav>
            <ul class="nav-links">
                <li><a href="<?php echo base_url('Home/home')?>">Home</a></li>
                <li><a href="<?php echo base_url('Jobs/index')?>">Jobs</a></li>
                <li><a href="<?php echo base_url('Home/aboutUs')?>">About Us</a></li>
                <li><a href="<?php echo base_url('Home/contactUs')?>">Contact Us</a></li>
            </ul>
        </nav>

        <a href="<?php echo base_url('Login/index')?>" class="cta">Login</a> <!-- Login here -->

    </header>

<?php

// if user is an applicant
} else if ($_SESSION["Type of User"] == "Applicant") {

?>

    <header>
    <h1 class="heading">FutureSeekers</h1>

    <nav>
        <ul class="nav-links">
            <li><a href="<?php echo base_url('Home/home')?>">Home</a></li>
            <li><a href="<?php echo base_url('Jobs/index')?>">Jobs</a></li>
            <li><a href="<?php echo base_url('Home/aboutUs')?>">About Us</a></li>
            <li><a href="<?php echo base_url('Home/contactUs')?>">Contact Us</a></li>
            <li><a href="<?php echo base_url('myProfile/index')?>">My Profile</a></li>
        </ul>
    </nav>

    <a href="<?php echo base_url('Logout/logout')?>" class="cta">Logout</a> <!-- Log out here -->

</header>


<?php
} else if ($_SESSION["Type of User"] == "Company") 
{
?>

    <header>
        <h1 class="heading">FutureSeekers</h1>

        <nav>
            <ul class="nav-links">
                <li><a href="<?php echo base_url('Home/home')?>">Home</a></li>
                <li><a href="<?php echo base_url('Postings/index')?>">My Adverts</a></li>
                <li><a href="<?php echo base_url('Createad/index')?>">Create Job Advert</a></li>
                <li><a href="<?php echo base_url('Company/company_reports')?>">Reports</a></li>
                <li><a href="<?php echo base_url('Home/aboutUs')?>">About Us</a></li>
                <li><a href="<?php echo base_url('Home/contactUs')?>">Contact Us</a></li>
                <li><a href="<?php echo base_url('myProfile/index')?>">My Profile</a></li>
            </ul>
        </nav>

        <a href="<?php echo base_url('Logout/logout')?>" class="cta">Logout</a> <!-- Log out here -->
    </header>

<?php
} else if ($_SESSION["Type of User"] == "Admin") 
{
?>

    <!--Nav -->
    <header>
        <h1 class="heading">FutureSeekers</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="<?php echo base_url('Home/home')?>">Home</a></li>
                <li><a href="<?php echo base_url('Admin/index')?>">Dashboard</a></li>
                <li><a href="<?php echo base_url('Admin/users')?>">Users</a></li>
                <li><a href="<?php echo base_url('Admin/ads')?>">Job Adverts</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="<?php echo base_url('myProfile/index')?>">My Profile</a></li>
            </ul>
        </nav>
        <a href="<?php echo base_url('Logout/logout')?>" class="cta">Logout</a> <!-- Log out here -->
    </header>

<?php
}
?>

<div class="container rounded mt-4 col-md-5 border border-dark mb-4"> 
            <div class="row">
                <div class="col-md-12 border-right">
                    <div class="d-flex flex-column align-items-center p-3 py-5">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 id="header1" class="text-right text-success display-6 p-2">CONTACT US</h4>
                        </div>

                        <form action=<?php echo site_url('contact/feedback') ?> method="post">
                           
                            <div class="row mt-2">

                                <div class="col-md-6">
                                    <label class="labels">Name:</label>
                                    <input type="text" class="form-control" placeholder="John" name="name">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="labels">Contact Number:</label>
                                    <input type="text" class="form-control"placeholder="+94" name="mobile">
                                </div>

                            </div>
                            

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">E-mail:</label>
                                    <input type="text" class="form-control" placeholder="email address" name="email">
                                </div>
                            </div>
                            
                            <div class="row mt-2">

                                <div class="col-md-12">
                                    <label class="labels">Description:</label>
                                    <input type="text" class="form-control" placeholder="Description" name="description">
                                </div>

                                </div>

                            <br>

                            <br>

                            <div class="text-center p-2">
                                <input class="btn btn-outline-primary profile-button btn-lg" type="submit" value="Submit"> </input>
                            </div> 

                        </form>

                        </div>
                </div>
            </div>

        </div>

  <!-- Footer -->
  <footer>
            <div class="row">
            <div class="col desc">
                <h2 class="logo">FutureSeekers</h2>
                <p>Best website to browse and find the perfect job offers suiting your qualifications and career goals</p>
            </div>
            <div class="col location">
                <h3 class="head">Visit us at</h3>
                <p>No. 388 Union Pl,</p>
                <p>Colombo,</p>
                <p>00200.</p>
                <p>0117 675 100</p>
            </div>
            <div class="col socials">
                <h3 class="head">Social Media</h3>
                <ul class="col-s">
                    <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                    <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
                    <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
                </ul>
            </div>
            <div class="col link">
            <h3 class="head">Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="<?php echo base_url('Home/aboutUs')?>">About Us</a></li>
                    <li><a href="#">Career Details</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            </div>
            <p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> 2021 Group 2 Avishka . Dilki . Siduja . Yahya </p>
        </footer>

   <!-- <div class="wrapper">
        <div class="content">
          <h1>CONTACT FORM</h1>
          <p>Connect with us by sending your views.</p>
        </div>
      
        <div class="form">
      
          <div class="top-form">
            <div class="inner-form">
              <div class="label">name</div>
              <input type="text" placeholder="Jhon">
            </div>
            <div class="inner-form">
              <div class="label">email</div>
              <input type="text" placeholder="Example@gmail.com">
            </div>
            <div class="inner-form">
              <div class="label">phone</div>
              <input type="text" placeholder="1234567890">
            </div>
          </div>
      
          <div class="middle-form">
            <div class="inner-form">
              <div class="label">subject</div>
              <input type="text" placeholder="Subject">
            </div>
          </div>
      
          <div class="bottom-form">
            <div class="inner-form">
              <div class="label">message</div>
              <textarea placeholder="Your message"></textarea>
            </div>
          </div>
      
          <div class="btn">send form</div>
      
        </div>
      </div>
   
    </div> 
-->

</body>
</html>