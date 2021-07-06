<html>
	<head>
		<title>
			News|SmartBusBooking.com
		</title>
		<style>
		body {background-image: url("back3.jpg");
				 height: 250%;
				  background-size: cover;
				background-repeat: no-repeat;
		}
		h1{color: orange;}
		h2{color: blue;}
		.topnav {
		  overflow: hidden;
		  background-color: #333;
		}

		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  background-color: #4CAF50;
		  color: white;
		}
		.breaking-news-headline {
		  display: block;
		  position: absolute;
		  font-family: arial;
		  font-size: 13px;
		  margin-top: -22px;
		  color: white;
		  margin-left: 150px;
		  
		}

		.breaking-news-title {
		  background-color: #FFEA00;
		  display: block;
		  height: 20px;  
		  width: 90px;
		  font-family: arial;
		  font-size: 11px;
		  position: absolute; 
		  top: 0px;
		  margin-top: 0px;
		  margin-left: 20px;
		  padding-top: 10px;
		  padding-left: 10px;
		  z-index: 3;
		  &:before {
			content:"";
			position: absolute;
			display: block;
			width: 0px;
			height: 0px;
			top: 0;
			left: -12px;
			border-left:12px solid transparent;
			border-right: 0px solid transparent;
			border-bottom: 30px solid #FFEA00;
		  }
		  &:after {
			content:"";
			position: absolute;
			display: block;
			width: 0px;
			height: 0px;
			right: -12px;
			top: 0;
			border-right:12px solid transparent;
			border-left: 0px solid transparent;
			border-top: 30px solid #FFEA00;
		  }
		}

		#breaking-news-colour {
		  height: 30px;
		  width: 694px;
		  background-color: #3399FF;
		}

		#breaking-news-container {
		  height: 30px;
		  width: 694px;
		  overflow: hidden;
		  position: absolute;
		  &:before {
			content: "";
			width: 30px;
			height: 30px;
			background-color: #3399FF;
			position: absolute;
			z-index: 2;
		  }
		}

		.animated {
		  -webkit-animation-duration: 0.2s;
		  -webkit-animation-fill-mode: both;
		  -moz-animation-duration: 0.2s;
		  -moz-animation-fill-mode: both;
		  -webkit-animation-iteration-count: 1;
		  -moz-animation-iteration-count: 1;
		}

		.delay-animated {
		  -webkit-animation-duration: 0.4s;
		  -webkit-animation-fill-mode: both;
		  -moz-animation-duration: 0.4s;
		  -moz-animation-fill-mode: both;
		  -webkit-animation-iteration-count: 1;
		  -moz-animation-iteration-count: 1;
		  -webkit-animation-delay: 0.3s; 
		  animation-delay: 0.3s;
		}

		.scroll-animated {
		  -webkit-animation-duration: 3s;
		  -webkit-animation-fill-mode: both;
		  -moz-animation-duration: 3s;
		  -moz-animation-fill-mode: both;
		  -webkit-animation-iteration-count: 1; 
		  -moz-animation-iteration-count: 1;
		  -webkit-animation-delay: 0.5s; 
		  animation-delay: 0.5s;
		}

		.delay-animated2 {
		  -webkit-animation-duration: 0.4s;
		  -webkit-animation-fill-mode: both;
		  -moz-animation-duration: 0.4s;
		  -moz-animation-fill-mode: both;
		  -webkit-animation-iteration-count: 1; 
		  -moz-animation-iteration-count: 1;
		  -webkit-animation-delay: 0.5s; 
		  animation-delay: 0.5s;
		}

		.delay-animated3 {
		  -webkit-animation-duration: 5s;
		  -webkit-animation-fill-mode: both;
		  -moz-animation-duration: 5s;
		  -moz-animation-fill-mode: both;
		  -webkit-animation-iteration-count: 1; 
		  -moz-animation-iteration-count: 1;
		  -webkit-animation-delay: 0.5s; 
		  animation-delay: 3s;
		}

		.fadein {
		  -webkit-animation-name: fadein;
		  -moz-animation-name: fadein;
		  -o-animation-name: fadein;
		  animation-name: fadein;
		}

		@-webkit-keyframes fadein {
		  from {
			margin-left: 1000px
		  }
		  to {
			
		  } 
		}  
		@-moz-keyframes fadein {
		  from {
			margin-left: 1000px
		  }
		  to {
			
		  }  
		}

		.slidein {
		  -webkit-animation-name: slidein;
		  -moz-animation-name: slidein;
		  -o-animation-name: slidein;
		  animation-name: slidein;
		}

		@keyframes marquee {
		  0% { 
			left: 0;
		  }
		  20% { 
			left: 0; 
		  }
		  100% { left: -100%; }
		}

		.marquee {
		  animation: marquee 10s linear infinite;
		  -webkit-animation-duration: 10s;
		  -moz-animation-duration: 10s;
		  -webkit-animation-delay: 0.5s; 
		  animation-delay: 3s;
		}

		@-webkit-keyframes slidein {
		  from {
			margin-left: 800px
		  }
		  to {
			margin-top: 0px
		  } 
		}  
		@-moz-keyframes slidein {
		  from {
			margin-left: 800px
		  }
		  to {
			margin-top: 0px
		  }  
		}

		.slideup {
		  -webkit-animation-name: slideup;
		  -moz-animation-name: slideup;
		  -o-animation-name: slideup;
		  animation-name: slideup;
		}
		@-webkit-keyframes slideup {
		  from {
			margin-top: 30px
		  }
		  to {
			margin-top: 0;
		  } 
		}  
		@-moz-keyframes slideup {
		  from {
			margin-top: 30px
		  }
		  to {
			margin-top: 0;
		  } 
		}

	</style>
	</head>
	<body>
		<table>
			<tr>
				<td>
				<img src="logoproject.jpg" alt="Logo" width="150" >
			</td>
		    <td><h1>SmartBusBooking.com</h1></td>
		   
		</tr>
		<tr>
			 <td>Help Line:</td>
		    <td>XXXXXXXXXXXX</td>
		</tr>
       </table><hr/>
      <div class="topnav">
  			<a class="active" href="index.php">Home</a>
			<a href="ticket.php">Ticket</a>
  			<a href="login.php">Login</a>
  			<a href="Registration.php">Register</a>
			<a href="Admin.php">Admin</a>
   			<a href="schedule.php">Schedule</a>
			<a href="launch.php">Launch Details</a>
  			<a href="News.php">News</a>
  			<a href="video.php">Videos</a>
 		 <a href="about.php">About</a>
 			 <a href="contact.php">Contact</a>
		</div><hr/>
		
		<div align="center">
			<h1>Bus Route News</h1>
		</div>
		<div id="breaking-news-container">
			  <div id="breaking-news-colour" class="slideup animated">
				
			  </div>  
			   <span class="breaking-news-title delay-animated slidein">
				  // BREAKING//
				</span> 
				<a class="breaking-news-headline delay-animated2 fadein marquee">
				  Today All Bus of Dhaka-Jessore Route will be canceled due to Bus Driver Strike
				</a>  
		</div>  
       <div align="center"width="300">
		<img src="weather-7.jpg">
		</div>
	</body>
		
	</body>
</html>