<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" type="icon" href="./image/playstore.png"> -->
    <link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- bootstrap@5.3.3 -->
    <script type="text/javascript" src="./bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>THE SHALOO</title>
<style type="text/css">
	.nv_con{
		position: relative;
	    top: 0;
	    right: 0;
	    left: 0;
	}
	.nv_p{
		font-weight: bold;
		color: navy;
	}
	.nv_title{
		justify-content: flex-end !important;
		width: 100%;
	}
	.nv_colr{
		color: white;
		font-size: large;
    	font-weight: bolder;
	}
	.ban{
		background-image: url(image/boat.jpeg);
		width: 100%;
		height: 750px;
	    background-size: cover;
	    background-repeat: no-repeat;
	    background-position: center;
	    color: white;
	}
	.ban_header
	{
		padding-top: 30%;
		font-size: 5.625rem;
	}
	.ban_p{
		font-size: xx-large;
	}
	.bg_slde{
		background-color: #e9f2fa;
		text-align: -webkit-center;
		padding: 70px;
	}
	.slde{
		width: 100%;
	}
	.slde_mrg{
		margin:8%;
	}
	.slde_hver:hover{
        box-shadow:  0px 0px 30px rgb(139 183 223);
        height: 100%;
        border-radius: 5%;
    }
    .slde_brd{
    	height: fit-content;
    }
	.view_brder{
        margin-top: 60px;
        border-radius:11px; 
    }
	.view_bder{
        padding: 20px;
        border-radius: 20px;
        /* box-shadow: 0px 0px 30px rgb(9 60 240 / 18%);; */
        background-color: aliceblue;
    }
	.view_bder:hover{
        box-shadow: 0px 0px 30px rgb(9 60 240 / 18%);;

	}
	.view_bg{
        background: #5c74e114;
    }
    .footer{
        background-color:#70665c;;
    }
    .ft_clr{
    	color: white;
    }
</style>

</head>
<body>
	<div class="nv_con">
		<nav class="navbar" style="background-color: #e3f2fd;">
			<div class="nv_title" >
				<div class="container">
					<div class="row">
						<div class="col-6">
							<h3 class="nv_p">THE SHALOO</h3>
						</div>
						<div class="col-6">
							<div class="container">
								<div class="row">
									<ul class="nav justify-content-end ">
										<li class="nav-item">
											<a class="nav-link nv_colr" aria-current="page" href="#home">HOME</a>
										</li>
										<li class="nav-item">
										    <a class="nav-link nv_colr" href="#view_point">VIEW POINT</a>
										</li>
										<li class="nav-item">
										    <a class="nav-link nv_colr" href="#about">ABOUT US</a>
										</li>
										<li class="nav-item">
										    <a class="nav-link nv_colr" href="#content">CONTENT</a>
										</li>
									</ul>	  
								</div>
							</div>				 			
						</div>
					</div>
				</div>
			</div>
		</nav>

		<!-- BANNER START -->
		<div class="ban">
			<div id="home">
				<div class="container">
					<div class="col-6 ">
						<h1 class="ban_header">TRAVEL</h1>
						<p class="ban_p">Here are my favorite travel and adventure quotes, paired with images from my journeys around the world.</p>
					</div>
					<div class="col-6"></div>
				</div>
			</div>
		</div>
			<!-- BANNER END -->

		<div class="bg_slde" id="view_point">
		<!-- view point start -->
			<div class="container">
				<div>
					<h1>Start Your Jorney</h1>
					<p>The most searched countries in March</p>
				</div>
			</div>
			<div class="slde_mrg">
				<div class="container">
					<div class="row">
						<div class="col-4 slde_brd">
							<div class="slde_hver">
								<img class="slde" src="./image/im.jpg">
								<p>VIEW POINT</p>
							</div>
						</div>
						<div class="col-4 slde_brd">
							<div class="slde_hver" style="margin-top: 20%;">
								<img class="slde" src="./image/im.jpg">
								<p>VIEW POINT</p>
							</div>
						</div>
						<div class="col-4 slde_brd">
							<div class="slde_hver">
								<img class="slde" src="./image/im2.jpg">
								<p>VIEW POINT</p>
							</div>
						</div>

					<!-- </div>
				</div>
			</div>

			<div class="slde_mrg">
				<div class="container">
					<div class="row"> -->
						<div class="col-4 slde_brd">
							<div class="slde_hver">
								<img class="slde" src="./image/im2.jpg">
								<p>VIEW POINT</p>
							</div>
						</div>
						<div class="col-4 slde_brd">
							<div class="slde_hver" style="margin-top: 20%;">
								<img class="slde" src="./image/im.jpg">
								<p>VIEW POINT</p>
							</div>
						</div>
						<div class="col-4 slde_brd">
							<div class="slde_hver">
								<img class="slde" src="./image/im.jpg">
								<p>VIEW POINT</p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- view point end -->
		</div>	
	</div>
	<!-- about us start -->
			<div id="about">
				<div class="container"> 
					<div >
						<div class="p-3  border view_bg view_brder">
							<div class="row row-cols-2">
								<div class="col-sm-6">
									<img src="./image/im2.jpg" style="width: 90%">
								</div> 
								<div class="col-sm-6">
									<h4 class="view_tittle" ><b>ABOUT US</b></h4>
									<p class="border view_bder">At FLEXI STEEL STRUCTURES, our mission is to offer unparalleled steel detailing services that exceed our clients' expectations. We are committed to enhancing the construction process by providing precise and detailed drawings that facilitate smooth and efficient project execution. Our goal is to be the go-to solution for all your steel detailing needs, fostering long-term relationships based on trust, quality, and reliability.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- about us end -->



	<!-- footer -->
    <footer class="footer" id="content" style="padding: 77px;"> 
      <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="ft_clr">MENU</h4>
                <br><br>
                <div class="col"><a href="#home" class="nav-link ft_clr">HOME</a></div><br>
                <div class="col"><a href="#view_point" class="nav-link ft_clr">VIEW POINT</a></div><br>
                <div class="col"><a href="#about" class="nav-link ft_clr">ABOUT US</a></div><br>                
                <div class="col"><a href="#content" class="nav-link ft_clr"><i class="bi bi-arrow-through-heart">CONTENT</i></a></div>
                
            </div>
            <div class="col">
                <h4 class="ft_clr">ADDRESS</h4>
                <br><br>
                <div><img src="image/office.png" style="width: 8%">&nbsp;<label>rk streat,rk town,rk dt.601218.</label></div><br>
                <div><img src="image/phone.png" style="width: 8%">&nbsp;<label><a href="tel:5456564" class="nav-link ft_clr">044 2415628</a></label></div><br>
                <div><img src="image/iphone.png" style="width: 8%">&nbsp;<label><a href="const:" class="nav-link ft_clr">8489749277</a></label></div><br>
                <div><img src="image/email.png" style="width: 8%">&nbsp;<label class="cont-email" ><a href="mailto:www.rk012612@gmail.com" class="nav-link ft_clr">www.rk012612@gmail.com</a></label></div>
            </div>        
            <div class="col">
                <h4 class="ft_clr">FOLLOW US</h4>
                <br><br>
                <div class="row">
                <div class="col"><a href="#"><img src="image/facebook.png" style="width: 30%"></a></div><br>
                <div class="col"><a href="#"><img src="image/instagram.png" style="width: 30%"></a></div><br>
                <div class="w-100"></div><br>
                <div class="col"><a href="#"><img src="image/twitter.png" style="width: 30%"></a></div><br>
                <div class="col"><a href="#"><img src="image/whatsapp.png" style="width: 30%"></a></div><br>
                <div class="w-100"></div><br>
                <div class="col"><a href="#"><img src="image/youtube.png" style="width: 35%"></a></div><br>
                <div class="col"><a href="#"><img src="image/linkedin.png" style="width: 30%"></a></div>  <br>       
                </div>
            </div>
            <div class="col">
                <h4 class="ft_clr">MAP LOCATION</h4>
                <br><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1364.6704463242006!2d77.04472544328974!3d11.041711467698603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2829fce3c0fddf4d%3A0x48058830592e5339!2sTecnova%20Technologies%20Private%20Limited!5e1!3m2!1sen!2sin!4v1718082249787!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
      </div>
    </footer>  
    <footer>
        <div style="background-color: black;text-align: center;color: white;padding:30px;">
            <div class="container">
                <div class="row">
                    <div>© 2024 RK CARS. All right reserved. </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
