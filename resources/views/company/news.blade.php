<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>FEFA | Power Solutions</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="icon" href="../images/logof22.png">
	<script src="../js/script.js"></script>
</head>
<body>
	<div id="header">
				<div class="clearfix">
					<div id="option"> 
			 
						<input placeholder="Search this site"><button>OK</button>
						   </div>
						   
				<div id="option">
					<a id="login-btn" href="/login">Login</a>
				</div>
				
			</div>
		<div class="clearfix">
			
			<div class="menubar">
				<a href="../"><img src="../images/logof22.png" class="logo" height="100px;"></a>
				<div class="menus">
					<div id="menu"><a href="../contact.html">Contact</a></div>
					<div id="menu"><a href="../company.html">Company & Careers </a></div>
					<div id="menu"><a href="../resources.html">Resources</a> </div>
					<div id="menu"><a href="../products.html">Products and Services</a> </div>
					<!-- <div id="menu"><a href="solutions.html">Solutions</a> </div> -->
					<div id="menu"><a href="../expertise.html">Expertise</a></div>
					
				</div>
			</div>		
		</div>
	</div>
	
		
			<div class="clearfix">
				<div class="expertisetop">
					<div id="expertise-content"> <div class="breadcrumb">Home / Products & Services / Solar</div> </div>
					<div id="expertise-content3" style="width: 100%;height: 100px;">
						<div class="center-title"><h2 style="max-width: 240px;">News & Events</h2></div>
					</div>
				</div>
	
				<div style="display: flex;">
					<ul class="left_nav" style="float:left; margin:10px 9px 0 0;width:200px;">
						
						<a href="company/company.html"><li class="menu-btn">About Us<span class="expand">&#x203A;</span></li></a> 
						
						
						  <a href="/news">
							<li class="menu-btn">News & Events<span class="expand">&#x203A;</span></li>
						</a> 
						
						  <a href="company/careers.html">
							<li class="menu-btn" >Careers<span class="expand">&#x203A;</span></li>
							</a>
						
						</ul>
					<div class="whitebg1" >
							<h1>News</h1>
							<ul class="news">
							@foreach($news as $message)
								<li>
									<div class="box">
										<img src="storage/{{$message ->image}}" alt="Img" height="245" width="213">
									</div>
									<p class="info">
									{{$message->created_at}} by <span class="author">{{$message->posted_by}}</span>
									</p>
									<h2>{{$message->title}}</h2>
									<p class="news_headline">
									{{$message->description}}
									</p>
									<a href="/newsdetail/{{$message->id}}" class="more">Read More</a>
								</li>
							@endforeach
                    
							</ul>
							<div class="paginator">
							{{$news->render()}}
							</div>
					</div>
					<div>
						<div class="right-custom-card">
							<div class="right-card-top">
								<span>Consultants</span>
							</div>
							<div class="custom-card-content"> 
								<p>Here you will find expert opinions, analysis, and recommendations to 
									your organization, based on our own expertise. </p>
								<a href="#">Design Resources</a> 
								<a href="#">Consultancy areas</a> 
							</div>
							
						</div>
						<div class="right-custom-card">
							<div class="right-card-top">
								<span>References</span>
							</div>
							<div class="custom-card-content"> 
								<p>Browse  and download from the list of reference documents</p>
								<a href="#">References</a> 
							</div>
							
						</div>
					<div class="right-custom-card">
						<div class="right-card-top1">
							<span>Contact info</span>
						</div>
						<ul class="contact" style="list-style: none;padding:0 10px;">
							<li>
								<p>
									
									 <em>FEFA Power Solutions</em> <br>Ata SB. Mah. Sümbül Cad, No:2/6 Pk:16600 Gemlik/Bursa
								</p>
							</li>
							<li>
								
									Phone: (+20) 000 222 999
	
									
							</li>
							<li>
									Fax: (+20) 000 222 988
					
							</li>
							<li>
								<p class="mail">
									Email: info@fefa.com.tr
								</p>
							</li>
						</ul>
					</div>
				
					</div>
				
			</div>
	
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest News</h4>
				<p>
					This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link.
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> Ata SB. Mah. Sümbül Cad, No:2/6 Pk:16600 Gemlik/Bursa
				</p>
				<p>
					<span>Phone:</span> (+20) 000 222 999
				</p>
				<p>
					<span>Email:</span> info@address.com
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
				</p>
				<a href="#" class="subscribe">Click to send us an email</a>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="#" class="facebook"></a><a href="#" class="twitter"></a><a href="#" class="googleplus"></a><a href="#" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2023 FEFA. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>
