<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFB</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/nav.css">
   
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
  
  

</head>
<body style="background-image: url(background.png); background-repeat: repeat-y;">
  
    <div class="main_div">

        <div class="navbar navbar-expand-md">
    
          <a href="index.php" class="navbar-brand font-weight-bold text-white text-center"><img src="Images/img/logo.png" alt="logo" height ="60px" width="200px"></a>
          <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
            
            <span class="navbar-toggler-icon" style="background:black; border-radius: 50%; border:10px; border-color: white;"></span>
          </button>
    
          <div class="collapse navbar-collapse text-center" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="viewCustomer.php" class="nav-link text-white">USER DETAILS</a>
              </li>
              <li class="nav-item">
                <a href="transectionHistory.php" class="nav-link text-white">TRANSFER HISTORY</a>
              </li>
              <li class="nav-item">
                <a href="#contact" class="nav-link text-white">CONTACT</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link text-white">ABOUT</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="container">
            <div class="row">
      
              <div class="col-sm-6" style="margin-top: 90px;">
                <div class="welcome">
                 <h1>Hi <span class="wave"><img src="Images/img/Hand.gif" width="50px"></span>&nbsp;,<h1 class="main_text">Welcome to</h1> <h1><span class="header">THE SPARK BANK</span></h1>
                </div>
                <br>            
                <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
                <p class="running-txt"><b>
                <span
                class="txt-rotate"
                data-period="2000"
                data-rotate='[ "Investment💰","Savings💵"]'></span>
                To Future</b></p>
  
              </div>
              <div class="art">
                <div class="w3-content w3-section">
                <img class="mySlides w3-animate-fading" src="Images/background/transparent 1.png">
                <img class="mySlides w3-animate-fading" src="Images/background/transparent 2.png">
                <img class="mySlides w3-animate-fading" src="Images/background/transparent 3.png">
              </div>
              </div>


            </div>
        </div>
    </div>


    <!-- contact starts -->
  <section class="contactus" id="contact" >
    <div class="container headings text-center">
        <h1 class="center" style="font-weight: bold;text-align: center;">CONTACT US</h1>
        <p>We're Here To Help And Answer Any Questions You Might Have.We Look Forward To Hearing From You</p>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                <form action="/action_page.php">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
                    </div>
                    <form action="/action_page.php">
                        <div class="form-group">
                          
                          <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                        </div>
                        <form action="/action_page.php">
                            <div class="form-group">
                              
                              <input type="number" class="form-control" placeholder="Enter mobile number" id="mobile" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="4" id="comment" placeholder="Your Comments"></textarea>
                              </div>
                              <div class="formbutton" style="display: flex;justify-content: center;">
                    <button type="submit" >Submit</button></div>
                  </form>
            </div>
        </div>
    </div>
   </section>

   

   

   <script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 9000);    
    }
    </script>

    <script>
      var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }
  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};


    </script>
    
</body>
<script src="/JS/txt-anim.js"></script>
</html>