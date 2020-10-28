<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
    <body data-spy="scroll" data-target="#navbarResponsive">
        <div id="home">
            <!-----------------------Navigation Starts----------------------->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target= "#navbarResponsive" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
            <!-----------------------Navigation Ends----------------------->
            <!-----------------------Background Starts----------------------->
            <div class="background">
                <img src="https://wallpapercave.com/wp/wp3422198.jpg" class="image-fluid">
            </div>
            <div class="heading-content text-center">
                <h5>Hello, I'm</h5>
                <h1>Bidya Kar</h1>
                <p>AND THIS IS MY WORLD</p>
            </div>
            <!-----------------------Background Ends----------------------->
        </div>
        <!-----------------------About Starts----------------------->
        <div id="about" class="offset container mt-3 pb-5">
            <div class="post-heading text-center">
                <h3 class="display-4 font-weight-bold">About Me</h3>
                <hr class="w-50 mx-auto pb-5">
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="https://wallpapercave.com/wp/wp3422198.jpg" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2>Wanna Know Me?</h2>
                    <hr>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <button class="btn w-50">
                        <a href="#">Know More</a>
                    </button>
                </div>
            </div>
        </div>
        <!-----------------------About Ends----------------------->

        <!-----------------------Skills Starts----------------------->
        <div id="skills" class="offset container mt-3 pb-5">
            <div class="post-heading text-center">
                <h3 class="display-4 font-weight-bold">Skills</h3>
                <hr class="w-50 mx-auto pb-5">
            </div>
            <h5>HTML</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info"  role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%</div>
            </div><br><br>
            <h5>CSS</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info"  role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
            </div><br><br>
            <h5>JavaScript</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info"  role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">55%</div>
            </div><br><br>
            <h5>C</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info"  role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div>
            </div><br><br>
            <h5>C++</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info"  role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%</div>
            </div>
        </div>    
        <!-----------------------Skills Ends----------------------->
            
        <!-----------------------Contact Starts----------------------->
        <div id="contact" class="offset container w- 50 mx-auto mt-3 pb-5" >
            <div class="post-heading text-center">
                <h3 class="display-4 font-weight-bold">Contact Us</h3>
                <hr class="w-50 mx-auto pb-5">
            </div>
            <form class="form-horizontal" action="user_input.php" method="POST">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="subscriber_name">Full Name:</label>
                    <input type="text" name="subscriber_name" class="form-control" id="fname" placeholder="Enter fullname">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="subscriber_email">Email:</label>
                      <input type="email" name="subscriber_email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="subscriber_message">Your Message:</label>
                    <textarea class="form-control" name="subscriber_message"></textarea>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-dark">Send</button>
                      </div>
                    </div>
                  </form>
                  <br><br>
            </div>
            <!-----------------------Contact Ends----------------------->
            <!-----------------------Footer Starts----------------------->
    <footer class="page-footer font-small unique-color-dark">
    
        <div style="background-color: #259690;">
          <div class="container">
            <div class="row py-4 d-flex align-items-center">
      
              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h6 class="mb-0">Get connected with us on social networks!</h6>
              </div>
              
              <div class="col-md-6 col-lg-7 text-center text-md-right">
      
                <a class="fb-ic">
                  <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>

                <a class="tw-ic">
                  <i class="fab fa-twitter white-text mr-4"> </i>
                </a>
                
                <a class="gplus-ic">
                  <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </a>
               
                <a class="li-ic">
                  <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </a>
                
                <a class="ins-ic">
                  <i class="fab fa-instagram white-text"> </i>
                </a>
      
              </div>
              
            </div>
            
          </div>
        </div>
      
        <div class="container text-center text-md-left mt-5">
      
          <div class="row mt-3">
      
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
      
              <h6 class="text-uppercase font-weight-bold">Company name</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                consectetur
                adipisicing elit.</p>
      
            </div>
            
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
      
              <h6 class="text-uppercase font-weight-bold">Products</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="#!">MDBootstrap</a>
              </p>
              <p>
                <a href="#!">MDWordPress</a>
              </p>
              <p>
                <a href="#!">BrandFlow</a>
              </p>
              <p>
                <a href="#!">Bootstrap Angular</a>
              </p>
      
            </div>
        
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
      
              <h6 class="text-uppercase font-weight-bold">Useful links</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <a href="#!">Your Account</a>
              </p>
              <p>
                <a href="#!">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!">Shipping Rates</a>
              </p>
              <p>
                <a href="#!">Help</a>
              </p>
      
            </div>
            
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
      
              <h6 class="text-uppercase font-weight-bold">Contact</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fas fa-envelope mr-3"></i> info@example.com</p>
              <p>
                <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p>
                <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
      
            </div>
      
          </div>
      
        </div>
        
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="https://mdbootstrap.com/">bidyakar.com</a>
        </div>
     
      
      </footer>
        <!-----------------------Footer Ends----------------------->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>