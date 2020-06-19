<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>FEFA | Power Solutions</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<script src="js/script.js"></script>
	<link rel="icon" href="images/logof22.png">
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
				<a href="/"><img src="images/logof22.png" class="logo" height="100px;"></a>
				<div class="menus">
					<div id="menu"><a href="contact.html">Contact</a></div>
					<div id="menu"><a href="company.html">Company & Careers </a></div>
					<div id="menu"><a href="resources.html">Resources</a> </div>
					<div id="menu"><a href="products.html">Products and Services</a> </div>
					<!-- <div id="menu"><a href="solutions.html">Solutions</a> </div> -->
					<div id="menu"><a href="expertise.html">Expertise</a></div>
					
				</div>
			</div>		
		</div>
	</div>
	<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<div id="adbox-content"></div>
				<img src="images/selection.png" alt="Img" id="Img" height="382" width="594">
				<img src="images/solarp.jgp" alt="Img1" id="Img1" height="382" width="594" style="display: none;">
				<img src="images/datacenter.jpg" alt="Img1" id="Img2" height="382" width="594" style="display: none;">
				<div class="detail">
					<div id="Txt">
						<h1>It’s never easy...<br> When it comes to energy.</h1>
						<p>
							But with FEFA<br>you can always consider it easily solved.
						</p>
					</div>
					<div id="Txt1" style="display:none">
						<h1>High quality<br> Services and Products</h1>
						<p>
							 UPS, Solar Panels, Batteries and special power Solutions.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="highlight">
			<div class="clearfix">
				<div class="testimonial">
					<div class="content-right">
						<h2 class="title1">Direct Links</h2>
						<ul>
							<li><a href="ups/ups.html"> UPS </a></li>
							<li><a href="/datacenter/datacenter.html"> Data Centers </a></li>
							<li><a href="/solar/solar.html"> Solar Panels </a></li>
							<li><a href="expertise.html"> Our Expertise</a></li>
							<li><a href="consultancy.html"> Consultancy </a></li>
							<li><a href="contact.html">Contact </a></li>
						</ul>
					</div>
					<div class="content-right">
					<h2 class="title1">News & Events</h2>
					@foreach($news as $message)
						<a href="/newsdetail/{{$message->id}}"> <b>{{$message->title}}</b></a>
						<p>
						&ldquo;{{$message->description}}&rdquo;
						</p>
					@endforeach
					<span><a href="/news" class="more">See all news</a></span>
					</div>

				</div>
				<table class="list_table">
					<tbody>
						<tr>
							<td>
								<div class="large_box">
									<img src="images/manufacturing.jpeg" alt="Img" height="200" width="300">
								</div>
							</td>
							<td id="image-desc-right">
								<p id="large_box_desc">
									<b>Providing Power Solutions</b> <br>
									We provide power solution products such as UPS, data center solutions, Solar Systems solutions, Batteries and other special single and three phase solutions.
									<br>
									<a href="products.html" class="more">Read More</a>
								</p>
								
							</td>
							</tr>
					
						<td>
							<div class="large_box">
								<img src="images/datacenter.jpg" alt="Img" height="200" width="300">
							</div>
						</td>
						<td id="image-desc-right">
							<p id="large_box_desc">
								<b>Supply & Installation</b> <br>
								With our top product and engineering quality, we provide excellent service from design to installation and maintenance.
								<br>
								<a href="products.html" class="more">Read More</a>
							</p>
							
						</td>
						</tr>
						<tr>
							<td>
								<div class="large_box">
									<img src="images/consultancy.jpeg" alt="Img" height="200" width="300">
								</div>
							</td>
							<td id="image-desc-right">
								<p id="large_box_desc">
									<b>Consulting</b> <br>
										 We give expert advise and consultancy. Through a network of reputed consultancy firms all over the world, our client can get the optimum solution for their power supply applications.
									<br>
									<a href="consultancy.html" class="more">Read More</a>
								</p>
								
							</td>
							</tr>
							
							
		
							<tr>
					</tbody>
				</table>
				
			</div>
		</div>
		<div class="featured">
			<h2>Our products features</h2>
			<ul class="clearfix">
				<li>
					<div class="frame1">
						<div class="box">
							<a href="resource_list.html"><img src="images/scshot.png" alt="Img" height="130" width="197"></a>
						</div>
					</div>
					<p>
						<a href="resource_list.html"><b>Platform</b></a> All of our UPS products come with 7 inches touch screen, fully graphic
						operation,supporting muti-language
					</p>
				
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<a href="resource_list.html"><img src="images/redundantfan.jpg" alt="Img" height="130" width="197"></a>
						</div>
					</div>
					<p>
						<a href="resource_list.html"><b>Redundant fan design</b></a> if 1 fan fails, power module can offer
						50% full power;if 2 fans fail, power module can offer 30% full power
					</p>
					
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<a href="ups/ups.html"><img src="images/flexible.jpg" alt="Img" height="130" width="197"></a>
						</div>
					</div>
					<p>
						<a href="ups/ups.html"><b>Modular UPS of all sizes</b></a>Flexible Modular Parallel Redundancy UPS Series
					</p>
				
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<a href="ups/ups.html">
								<img src="images/memopower.jpg" alt="Img" height="130" width="197">
								</a>
						</div>
					</div>
					<p>
						<a href="ups/ups.html"><b>1-1000KVA online UPS</b></a> Browse through our online transformerless series including FE-UDC and FE-MEMOPOWER, within 1-1000KVA range.
					</p>
					
				</li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<!-- <h4>Latest News</h4>
				<p>
					This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link.
				</p> -->
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
					<span>Email:</span> info@fefa.com.tr
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					If you have requests or to keep in touch with us, don't hesitate to send us a message.
				</p>
				<a href="/contact.html" class="subscribe">Click to send us an email</a>
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
