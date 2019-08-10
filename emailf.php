<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
		.line
		{
			width: 100%;
			height: 4px;
			background: #cf1e2a;
		}
		.insidecontent
		{
			 width: 115%;
			 height: 80px;
       		background: #fff;

       		margin-bottom: -100px;
       		margin-left: -60px;
       		/*box-shadow: 0px -5px 30px ;*/
		}
		.all
		{
			background-color: #cf1e2a;
			margin: auto;
			height: 1000%;
			
		}
		
	</style>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="author" content="ScriptsBundle">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--Slid End-->
    <title>Engage-Instaura Consulting</title>
    <link rel="icon" href="images/logo.jpg" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css" type="text/css">
    <link href="js/revolution/css/settings.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.style.css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
	<link href="js/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link href="css/flaticon.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arial:200,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/homecss.css">
    <link rel="stylesheet" type="text/css" href="css/engageform.css">
    <script src="js/modernizr.js"></script>
</head>

<body style="background-color: #fff">
<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$conpany=$_POST['company'];
$email=$_POST['mail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$mobile = $_POST['mobile'];
$services= $_POST['services']
$message = $_POST['message'];
$headers = 'From:'. "aslambasha876@gmail.com" . "rn"; // Sender's Email
/*$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender*/
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail($email,$subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>
	
    <header class="transparent-header sticky">
	<div class="line">
	<P> <br></P>
</div>
<div class="header-top clear" >
        <div class="container" >
            <div class="row" style="margin-top: -10px">
                
                    <div class="header-top-left header-top-info hidden-sm hidden-xs" style="position: absolute;right: 29%;top: 5px;width:150px">
                        




                            <div class="dropdown new-drop">
                                <a href="https://instaura.zenfosys.com" class="dropbtn">Login</a><!-- <span><img src="images/dropdown.png" style="width: 10px;height: 10px"></span> -->
                                <!-- <div id="myDropdown" class="dropdown-content">
                                <a href="#">Employee</a>
                                    
                                </div> -->
                            </div>

             
                    </div>
                                    <form class="nav-form" action="#" method="get">
                                       <input name="#" type="text" maxlength="205"  placeholder= "Search" class="text">
                                       <img src="images/1.png"style="width: 22px;height: 22px;margin-top: -3px;margin-left: 5px;">
                                        <!--<button type="submit" style="background:#cf1e2a;width:25px;height:25px;"><i class="fa fa-angle-right"></i></button>-->
                                    </form>
               
            </div>
        </div>
    </div>
        <!-- Menu Section -->
        <div class="navigation-2">
            <!-- navigation-start -->
            <nav class="navbar navbar-default" style="">
                <div class="container" style="">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" onclick="toggleFunction()"class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                         <a href="home.html" ><img src="images/inslogo.png" class="image" alt="" style=""></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="man-navigation">
                        <ul class="nav navbar-nav" id="menufont">
            
                            <li class="dropdown active-one menu-li"> <a href="https://facebook.com" class="dropdown-toggle text-capitalize" data-hover="dropdown" data-toggle="dropdown" data-animations="">Services</a>
                                <ul class="dropdown-menu">
                
                                  <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">       Practise Areas</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="Aerospace.html">Aerospace</a></li>
                                                        <li><a href="Agriculture.html">Agriculture</a></li>
                                                        <li><a href="Automotive.html">Automotive</a></li>
                                                        <li><a href="Consumer Products.html">Consumer Products</a></li>
                                                        <li><a href="Energy.html">Energy</a></li>
                                                        <li><a href="Healthcare & Lifesciences.html">Healthcare & Lifesciences</a></li>
                                                        <li><a href="Infrastructure.html">Infrastructure</a></li>
                                                        <li><a href="Internet.html">Internet</a></li>
                                                        <li><a href="Natural Resources.html">Natural Resources</a></li>
                                                        <li><a href="Private Equity.html">Private Equity</a></li>
                                                        <li><a href="Real Estate.html">Real Estate</a></li>
                                                        <li><a href="Retail.html">Retail</a></li>
                                                        <li><a href="Technology.html">Technology</a></li>
                                                    </ul>
                                  </li>
                                  <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">       The Works</a>
                                      <ul class="dropdown-menu">
                                        <li><a href="Fund Raising.html">Fund Raising</a></li>
                                        <li><a href="Merger & Acquisition.html">Merger & Acquisition</a></li>
                                        <li><a href="New Market.html">New Market</a></li>
                                        <li><a href="Board Advisory.html">Board Advisory</a></li>
                                        <li><a href="Investment Advisory.html">Investment Advisory</a></li>
                                        <li><a href="Investment Management.html">Investment Management</a></li>
                                        <li><a href="Mentoring.html">Mentoring</a></li>
                                      </ul>
                                  </li>
                    <!-- <li><a href="About Us.html">About Us</a></li> -->
                    
                    <!-- <li><a href="#">The People</a></li> -->
                    <!-- <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Engagements</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="">Login Screen</a></li>
                     </ul>
                                                    </li> -->
                    <!-- <li><a href="#">Work With us</a></li>
                    <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media</a>
                    <ul class="dropdown-menu">
                                                            <li><a href="#">Gallery</a></li>
                    <li><a href="#">Coverage</a></li>
                    <li><a href="#">Press Kit</a></li>
                     </ul>
                                                    </li> -->
                    <!-- <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media</a>
                    <ul class="dropdown-menu">
                                                            <li><a href="#">Ecosystem Developments Associations</a></li>
                    
                    
                     </ul>
                                                    </li> -->
                                   
                                       
                                    
                                
                                
      
        
                                    
                                </ul>
                            </li>
                            
              
                           
                            <li class="dropdown menu-li"> <a class="dropdown-toggle text-capitalize" data-hover="dropdown" data-toggle="dropdown" data-animations="">About <span class=""></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="About Us.html">About Us</a> </li>
                                    <li><a href="The Vision.html">Vision</a></li>
                                    <li><a href="The Mission.html">Mission</a></li>
                                    <li><a href="People.html">People</a></li>
                                    <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">     Media</a>
                                      
                                            <ul class="dropdown-menu">
                                              <li><a href="Print & Digital.html">Print & Digital</a></li>
                                              <li><a href="Television.html">Television</a></li>
                                              <li><a href="Gallery.html">Gallery</a></li>
                                            </ul>
                                       
                                    </li>
                                    <li><a href="Work With Us.html">Work With Us</a></li>
                                    <li><a href="Social Responsibility.html">Social Responsibility</a></li>
                                        
                                </ul>
                            </li>
              <li class="dropdown menu-li"> <a class="dropdown-toggle text-capitalize"  data-hover="dropdown" data-toggle="dropdown" data-animations="">Thinking<span class=""></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="Attitude.html">Attitude</a> </li>
                                    <li><a href="Briefings.html">Briefings</a> </li>
                                    
                                  
                                    
                                </ul>
                            </li>
                            <li class="dropdown menu-li-new"><a class="dropdown-toggle" href="engage.html">Engage</a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a href="https://instaura.zenfosys.com">Login Screen</a> </li>
                                    
                                </ul> -->
                            </li>
                        </ul>
                       <!-- <a href="quote.html" class="btn btn-primary pull-right"><span class="hidden-sm">Request A </span>Quote</a> -->
                        
                        </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.container-end -->
            </nav>
        </div>
        <!-- /.navigation-end -->
        <!-- Menu  End -->
    </header>

    <div class="container" id="slide-container">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel" ">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" style="height: 600px">
        <img src="11.jpg" alt="Los Angeles" style="width:110%;">
      </div>

      <div class="item" style="height: 600px">
        <img src="44.jpg" alt="Chicago" style="width:110%;">
      </div>
    
      <div class="item" style="height: 600px">
        <img src="33.jpg" alt="New york" style="width:110%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	

	<section class="main-section" style="position: absolute;top: 65%;width:100%;background:#fff">
        <div class="line">
        </div>
        <div class="container-fluid">
            <div class="container" id="main-section-container">
                

 

  <div class="row">
    <div class="leftcolumn">
      <div class="card list-align">
        <ul>
           <li style="color: #000"><b>Useful Co-ordinates</b></li><br>
            
            <li style="color: #777">General Inquiries</li> 
            <li><a href="mailto:info@instaura.co">info@instaura.co</a></li><br>
           
            <li style="color: #777">Media & PR</li> 
            <li><a href="mailto:ceooffice@instaura.co">ceooffice@instaura.co</a></li><br>
           
            <li style="color: #777">Partnerships</li> 
            <li><a href="mailto:partners@instaura.co">partners@instaura.co</a></li><br>
           
           <li style="color: #000"><b>About Us</b></li>
            <li><a href="The Vision.html">Vision</a></li> 
            <li><a href="The Mission.html">Mission</a></li>
            <li><a href="People.html">People</a></li><br>
            

            <li style="color: #000"><b>Thinking</b></li>
            <li><a href="Attitude.html">Attitude</a></li> 
            <li><a href="Briefings.html">Briefings</a></li>
            
        </ul>
      </div>
      
      <!-- <div class="card">
        <h2>business</h2>
        <h5>2018</h5>
        <div class="fakeimg" style="height:200px;">Instaura</div>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div> -->
    </div>
    

    <div class="midcolumn">
      <div class="card main-card">
        <h2>Engage with Us</h2>
           
        <div style="border: 0px solid black;margin-left: 50px;" class="form-container form-group">
                  <form class="contact-form" action="contactform.php" method="POST">
                        
                        <input class="form-control" id="fname" type="text" placeholder="First Name" name="firstname" required="please enter your first name">

                        
                        <input class="form-control" id="lname" type="text" placeholder="Last Name" name="lastname" required="please enter your last name">

                        
                        <input class="form-control" id="company" type="text" placeholder="Comapny Name" name="company">

                        
                        <input class="form-control" id="mail" type="email" placeholder="Email ID" name="mail">

                        
                        <input class="form-control" id="number" type="number" placeholder="Contact Number" name="mobile"><br>

                         <h2 style="color: gray; font-size: 22px;text-align: left;">How can we help?</h2>

                        <input id="s1" type="checkbox" name="services" value="FundRaising">
                        <label style="font-size: 17px;font-weight: 500;" for="s1">Fund Raising</label><br>

                        
                        <input id="s2" type="checkbox" name="services" value="MergerAcquisition">
                        <label style="font-size: 17px;font-weight: 500;" for="s2">Merger & Acquisition</label><br>

                        
                        <input id="s3" type="checkbox" name="services" value="Market">
                        <label style="font-size: 17px;font-weight: 500;" for="s3">New Markets</label><br>

                        
                        <input id="s4" type="checkbox" name="services" value="BoardAdvisory">
                        <label style="font-size: 17px;font-weight: 500;" for="s4">Board Advisory</label><br>

                        
                        <input id="s5" type="checkbox" name="services" value="InvestmentAdvisory">
                        <label style="font-size: 17px;font-weight: 500;" for="s5">Investment Advisory</label><br>

                        
                        <input id="s6" type="checkbox" name="services" value="InvestmentManagement">
                        <label style="font-size: 17px;font-weight: 500;" for="s6">Investment Management</label><br>

                        <textarea name="message" placeholder="Write your message here..."></textarea>

                        
                         <input type="submit">

                    </form>
                   
                </div>
      </div>
      </div>
      
    <div class="rightcolumn">
      <div class="card">
       <button class="accord">Entrepreneurs</button>
        <div class="pannel">
          <p>We have so mentored over 2500 Entrepreneurs in the last decade. They swear by us at every opportunity!</p>
        </div>

        <button class="accord">Funds Raised</button>
        <div class="pannel">
          <p>Cumulative Funds raised amount to over a Billion Dollars in various structures including Equity, Convertibles and Islamic Funding</p>
        </div>

        <button class="accord">Clout</button>
        <div class="pannel">
          <p>India<br>
              ASEAN<br>
              USA<br>
              12 Countries</p>
        </div>
        <button class="accord">Existence</button>
        <div class="pannel">
          <p>
            16 March 2007<br>
            12+ Years in Operations<br>
            Began in Singapore<br>
            Moved to India - 2011<br>
          </p>
        </div>
      </div>
      <div class="card">
        <video  class="video" height="180" controls>
                                <source src="video.mp4" type="video/mp4">
                                </video>
        <p>Some text about me in culpa qui officia deserunt mollit anim..<span><img src="images/read.png" style="width: 15px;height: 20px"></span></p>
      </div>
      
       <div class="card" style="background-color: #fff">
         <div class="item active">
                                                        <img src="11.jpg" alt="Los Angeles" style="width:100%;height: 180px">
                                                        <a href="Insight.html"><h4 style="margin: 5px 0;font-size: 15px;color: #cf1e2a">Banking</h4></a>
                                                        <h5 style="margin: 0;font-size:12px;text-align: left;color: #000;line-height: 1.2"><b>How Bank Can Manage Operation Risk</b></h5>
                                                        <p style="font-size: 12px;text-align: left;text-align: justify;">The journey starts with the great minds we work with. The Entrepreneurs! Their confidence in us and our..<a href="Insight.html"><img src="images/read.png" style="width: 15px;height: 20px"></a></p>
                                                      </div>
      </div>
    </div>
  </div>

            </div>
            <section class="section-two">
                    
                    <hr>
                    <div id="footer1" class="container-fluid" style="width: 80%;height: 40px;box-sizing: border-box;padding: 5px 10px;margin-right: 10%;margin-left: 10%;background-color: #fff;box-shadow: 0px 0px 25px;color: #eae7e7 !important;">
    
                        <li style="display: inline;"><p style="margin-top: 8px;font-size:12px;letter-spacing: 2px;font-weight: 600"> <a href="#">Legal Disclaimer</a> | <a href="#">Terms of Use</a> | Copyright Reserved | Instaura Consulting | 2018-19</p></li>
                            <li style="display: inline;"><form  id="footerform" action="#" method="get" style="width: 400px;float: right;margin-top: -28px;">
                                <a href="#" style="float: left;"><p><img src="images/sm2.png" style="width: 20px;height: 20px;"></p></a>
                        <a href="https://twitter.com/InstauraCorp" target="_new" style="float: left;"><p><img src="images/sm3.png" style="width: 20px;height: 20px"></p></a>
                        <a href="#" style="float: left;"><p><img src="images/sm1.png" style="width: 20px;height: 20px"></p></a>
                        <a href="https://www.youtube.com/channel/UCZZswB4ylP3gib4CfJBeOVA" target="_new" style="float: left;"><p><img class="red" src="images/sm4.png" style="width: 20px;height: 20px"></p></a>
                           <input style="color: #000;height:22px;margin-left: 25px;outline: none;border: none;border-bottom: 1px solid #cfcfcf"name="#" type="text" maxlength="205"  placeholder= "Subscribe" class="text-one">
                           <img src="images/1.png"style="width:20px;height: 20px;">
                        </form></li>

                    </div>
            </section>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hover.min.js"></script>
    <script src="js/jquery.smoothscroll.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/jquery.appear.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/theia-sticky-sidebar.js"></script>
    <script src="js/custom.js"></script>
   <script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function toggleFunction() {
    document.getElementById("man-navigation").classList.toggle("in");
}
</script>

<style>
.dropbtn {
    background-color: #fff;
    color: black;
    padding: 0 6px;
    font-size: 16px;
    border: none;
    cursor: pointer !important;
    outline: none;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #fff;
    cursor: pointer !important;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
   /*  min-width: 160px; */
    overflow: auto;
    box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2) !important;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #cf1e2a;}

.show {display: block !important;}
/* li.dropdown {
    transition: all 0.5s ease !important;
} */
#footer {
    width: 346px;
    margin: 124px 40%;
}
#menufont li a {
    font-family: 'Arial', sans-serif !important;
}
body {
    font-family: 'Arial', sans-serif !important;
}
.col-one h2 {
    color: #cf1e2a !important;
    margin-top: 5px;
    margin-bottom: 9px;
}

.section-two .section-container-two {
    font-family: 'Arial', sans-serif;
}
h4 {
    font-size: 12px;
    letter-spacing: 1px;
    text-align: left;
}
/* @media only screen and(max-width: 1440px) {
    .img1 img{
    width: 200px;
} */
body h2, body h5, h1, h4, h6, h3 {
  margin: 0;
}

@media only screen and(max-width: 768px){
    div.row#img {
        width: 700px !important;
    }
    div#img {
        width: 100% !important;
    }
    /* .comtainer, .col-md-6, .col-md-3, .col-md-4, .col-md-8, .col-sm-12, .col-xs-12, .section-two, .container-fluid {
        
        width: 100%;
        margin:0;
        padding:0;
    }
    div#colcol.col-md-6.col-sm-12.col-xs-12 {
        padding: 0 !important;    
    } */
}
</style>
</body>



</html>