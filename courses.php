<?php 
	 session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Skill Learn</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/programming.css">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}
.deat
{
	background: #f89406 none repeat scroll 0.0;
	height: 50px;
	left:0;
	position: absolute;
	text-align: center;
	top:0;
	width: 150px;
	padding: 10px;
}

.news-content p
{
	margin-bottom: 15px;
	text-align: center;
	margin-top: 20px;

}
</style>



</head>
<body>


			<!---Navigation Starts	----->

	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<div class="logo">
                    <a href=""><img src="img/LOgo.png" alt="logo" /></a>
                  </div>
				  
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Home</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			


 			<!---programming languages Section Start	----->
<br><br><br><br><br>
 			<section class="latest-news-area" id="latest">
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-12">
 							<div class="section-title text-center">
 								<h2><b>PROGRAMMING LANGUAGES</b></h2>
 								<div class="sub-heading">
 									Following are the available programming languages <br>
 									Start learning today
 								</div>
 							</div>
 						</div>
 					</div>
<br>

 					

<?php


			   // session_start();

			   $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'e-learner');

			$q="select * from programming_languages";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {

			?>

			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
 										<img src=<?php echo $res['language_image']; ?> class="img-responsive">
 										<div class="deat">
 											<span><?php echo $res['language_name']; ?></span>
 										</div>
 									</div>

 									<div class="news-content">
 										<p>
 											<?php echo $res['language_description']; ?>
 										</p><br>
 										<a href="programming/Programming-languages/programming.php?course_name=<?php echo $res['language_name'] ?>">Start Reading...</a>
 									</div>
 								</div>
 							</div>

<?php } ?>

 				</div>
 				
 			</section>


 			<!---programming languages Section ends	----->


 			<!---footer Section Start	----->

<br><br><br><br>

<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <br><div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <!-- <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a> -->
                <p>Skill Learn is an excellent learning hub, dedicated to the programmer who want to explore.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2022</span><span> </span><span>Skill Learn</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <!-- <dl class="contact-list"> -->
                <!-- <dt>Address:</dt>
                <dd>Nagardas Road, andheri east, mumbai 400101</dd> -->
              </dl>
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a href="mailto:#">skilllearn@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Phones:</dt>
                <dd><a href="tel:#">+91 9082944195</a> <span>or</span> <a href="tel:#">+91 7738364521</a>
                </dd>
              </dl>
            </div>
            <!-- <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </footer>



 			<!---footer Section Ends	----->

			
</body>
</html>