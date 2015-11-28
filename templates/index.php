<?php
$servername = "udaanseason6.db.12084465.hostedresource.com";
$username = "udaanseason6";
$password = "ilike@123U";
$dbname = "udaanseason6";
if(isset($_POST['submit'])){
$uemail=$_POST['email'];// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$c=0;
$sql = "INSERT INTO udaans (u_email)
VALUES ('$uemail')";
$query1="SELECT * FROM udaans WHERE u_email='".$uemail."'";
$upd=$conn->query($query1);
while($upd->fetch_object()){
    $c=$c+1;
}
if($c==0){
	if($conn->query($sql)){
		$msg= "<font color='green'>you have subscribed successfully!!</font>";
	}
}
else{
	$msg= "<font color='red'>this email is already subscribed</font>";
}
$conn->close();
}
?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,width=device-width">
		<meta name="title" content="UDAAN | The Students Magazine | Season 6 | 2015-2016" />
		<meta name="description" content="Udaan The Students Magazine is going to release its Season 6 in January 2016. It is the magazine of Guru Ghasidas Vishwavidyalaya, Bilaspur (Chhatisgarh),India 595001 which is a Centarl University." />
		<meta name="keywords" content="CSS, UDAAN, Students, M
agazine, Guru, Ghasiadas, Vishwavidyalaya, Bilaspur, India, Website, Season, 6, Guru ghasidas vishwavidyalaya , student magzine, university , guru ghasidas university magzine, udaan season 6, four,CSS, Students,UDAAN, Magazine, Guru, Ghasiadas, Vishwavidyalaya, Bilaspur, India, Website, Season, 6, four , Guru ghasidas vishwavidyalaya , student magzine,  university , guru ghasidas university magzine, udaan season 6, CSS,  Students, Magazine,UDAAN, Guru, Ghasiadas, Vishwavidyalaya, Bilaspur, India, Website,Guru ghasidas vishwavidyalaya , student magazine , university , guru ghasidas university magzine, udaan season 6, Season, 6, four, CSS,  Students, Magazine, Guru, Ghasiadas,UDAAN, Vishwavidyalaya, Bilaspur, Guru ghasidas vishwavidyalaya , student magzine,  university , guru ghasidas university magzine, udaan season 5, India, Website, Season, 6, four"/>
		<meta name="author" content="Udaan Season 6" />
		<title>UDAAN SEASON 6|2015-2016 </title>

		<meta property="og:url" content="http://www.ourudaan.com"/>
		<meta property="og:title" content="UDAAN | The Students Magazine | Season 6 | 2015-2016"/> 
		<meta property="og:type" content="website"/> 
		<meta property="og:site_name" content="UDAAN | The Students Magazine | Season 6 | 2015-2016"/> 
		<meta property="og:description" content="Udaan The Students Magazine is going to release its Season 6 in February 2016. It is the magazine of Guru Ghasidas Vishwavidyalaya, Bilaspur (Chhatisgarh),India 595001 which is a Cent
ral University."/>

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css1/default.css">
	<link rel="stylesheet" href="css1/layout.css">
   <link rel="stylesheet" href="css1/media-queries.css">    

   <!-- Script
   ================================================== -->
	<script src="js1/modernizr.js"></script>

   <!-- Favicons
	================================================== -->

</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T9DB9B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T9DB9B');</script>
<!-- End Google Tag Manager -->
	<div id="preloader">      
      <div id="status">
         <img src="images1/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

   	<header class="row">	 

			<div id="logo" >
						
			</div>

		   <nav id="nav-wrap">

		      <a class="menu-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
			   <a class="menu-btn" href="#" title="Hide navigation">Hide navigation</a>

		      <ul id="nav" class="nav">
		         <li class="current"><a class="smoothscroll" href="https://goo.gl/qxjdyk">Udaan Survey</a></li>
		         <li><a class="smoothscroll" href="#">Member Registration</a></li>			         
			      <li><a class="smoothscroll" href="#location">Team Udaan</a></li>
		      </ul> <!-- end #nav -->

		   </nav> <!-- end #nav-wrap --> 	        

   	</header> <!-- Header End -->   	

   	<div  id="main" class="row">

	   	<div class="twelve columns">
	   			
	   		<h2><font color="green">Website Under Construction</font></h2>

	   		<h1>Udaan Season 6</h1>

	   		<h5>Time Left Until Launching</h5>

	   		<div id="counter" class="cf">
	   			<span>70 <em>days</em></span> 
 					<span>10 <em>hours</em></span>
					<span>40 <em>minutes</em></span>
 					<span>22 <em>seconds</em></span> 
   			</div>					

   			<!-- Begin MailChimp Signup Form -->
	         <div id="mc_embed_signup">
	            <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	                  
	               <input type="email" value="" name="email" class="email" id="mce-EMAIL" placeholder="email address" required >
	               
	               <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	               <div style="position: absolute; left: -5000px;"><input type="email" name="b_cdb7b577e41181934ed6a6a44_e65110b38d" value=""></div>
	               
	               <!-- <div class="clear"> --><input type="submit" value="Subscribe" name="submit" id="mc-embedded-subscribe" class="button"><!-- </div> -->
	              
	          	</form>
                  
	         </div>
        
<?php echo $msg; ?>
	         <ul class="social">
	            <li><a href="https://goo.gl/E2PPfl"><i class="fa fa-facebook"></i></a></li>
	  
            </ul>

         </div> 

      </div> <!-- main end -->    	

   </section> <!-- end intro section -->


   <!-- About Section
   ================================================== -->
   
 

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">            

            <ul class="copyright">
               <li>&copy; Copyright 2015 Udaan</li>
               <li>Design by <a title="Styleshout" href="http://www.styleshout.com/">website board udaan</a></li>          
            </ul>

         </div>         		 

      </div>

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a></div>

   </footer> <!-- Footer End-->   

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--  <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script> -->



 <script src="js1/jquery.countdown.js"></script> 
   <script src="js1/jquery.placeholder.js"></script>
   <script src="js1/backstretch.js"></script>  
   <script src="js1/init.js"></script>

</body>

</html>
