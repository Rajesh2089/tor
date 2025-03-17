<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="icon" type="icon" href="./image/logo5.png">
    <link href="./bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- bootstrap@5.3.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="./bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>SHALOO</title>
<style type="text/css">
	.cls{
		border:1px solid white;
		padding: 10px;
		color: white;
		border-radius: 10px;

	}
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
		background-image: url(image/view.jpg);
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
		margin-bottom: 25px;
	}
	.slde_mrg{
		margin:5%;
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
        /*margin-top: 60px;*/
        border-radius:11px; 
    }
	.view_bder{
        padding: 20px;
        border-radius: 20px;
        /* box-shadow: 0px 0px 30px rgb(9 60 240 / 18%);; */
        background-color: aliceblue;
    }
	.view_bder:hover{
        box-shadow: 0px 0px 30px #fbfbfb;

	}
	.view_bg{
        background: #5c74e114;
    }
    #about{
    	background-image: url(./image/view.jpg);
    	width: 100%;
	    height: 700px;
	    /* background-position: center; */
	    background-repeat: no-repeat;
	    background-size: cover;
    /* margin-top: -123px; */
    }
    .pic_slde{
    	text-align: -webkit-center;
		padding: 70px;
		background-color: #e9f2fa;

		position: absolute;
	    z-index: 0;
	    width: 100%;
	    height: 50%;
    }
    .pic_slde_over{
    	position: relative;
	    z-index: 1;
	    margin-top: 230px;
    }
    .pic_p{
    	font-family: font-family: cursive;
    }
    .pic_small{
    	height: 195px;
    }


    .frm_over{
        /* margin-top: 315px; */
        z-index: 1;
        position: relative;
        bottom: 0;
    }
     .form{
        /*width: 615px;*/
        margin-block: 20px;
    }
    .frm{
        /*background-image: url(image/logo.png);*/
        border-radius: 20px;
        background-color: #6cc7f48c;
        padding:25px;
        margin:50px;
        /*border: ridge;*/
        /*box-shadow: 0px 0px 20px rgb(9 106 240 / 45%);*/
        border: 2px solid rgb(92 43 43 / 23%);
    }
    .frm_in{
    	margin: 15px;
    }


    .footer{
        background-color:#70665c;
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
						<div class="col-4">
							<!-- <img src="./image/logo.png"style="width: 100%;"> -->
							<!-- <img src="./image/logo1.png"style="width: 100%;"> -->
							<!-- <img src="./image/logo3.png"style="width: 100%;"> -->
							<img src="./image/logo4.png"style="width: 50%;">
						</div>
						<div class="col-3">
							
						</div>

						<div class="col-5">
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
										    <a class="nav-link nv_colr" href="#content">CONTACT</a>
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
					<p>The most searched countries in August.</p>
				</div>
			</div>
			<div class="slde_mrg">
				<div class="container">
					<div class="row g-2">
						<div class="col-4 slde_brd">
							<div class="slde_hver">
								<img class="slde" src="./image/tea.jpg">
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
					<div style="padding: 60px">
						<div class="p-3 ">
							<div class="row row-cols-2">
								<div class="col-sm-6">
									<!-- <img src="./image/view.jpg" style="width: 90%"> -->
								</div> 
								<div class="col-sm-6">
									<h4 class="view_tittle" ><b>ABOUT US</b></h4>
									<p class="border view_bder">Ganesh Kumar founded Tecnova as an IT wing of Causa and leading into creating cutting edge products catering to manufacturing industries, based on extensive implementation knowledge especially with Textile industry. Having 15+ years of insightful experience in textile industry, covering all areas of manufacturing, procurement, quality, delivery across globe. Founded Causa company for textile manufacturing and global supply. He is responsible for the strategic direction and overall performance of the enterprise and its long-term growth agenda..</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- about us end -->

			<!-- gallerry start -->

			<div class="pic_slde" >
					<div>
						<h2>Why Choose Us</h2>
						<p class="pic_p">The gladdest moment in human life, me thinks, is a departure into unknown lands.</p>
					</div>
				</div>

			<div class="pic_slde_over

			">
				<div class="container">
					<div class="row">
						<div class="col-6"> 
							<img class="slde " src="./image/pic.jpg">
						</div>

						<div class="col-6">
							<div class="container">
								<div class="row g-2">
									<div class="col-6">
										<img class="slde pic_small" src="./image/pic1.jpg">
									</div>
									<div class="col-6">
										<img class="slde pic_small" src="./image/pic2.jpg">
									</div>
								
							
									<div class="col-6">
										<img class="slde pic_small" src="./image/pic3.jpg">
									</div>
									<div class="col-6">
										<img class="slde pic_small" src="./image/pic4.jpg">
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
<!-- <br> -->
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="container">
								<div class="row">
									<div class="col-6">
										<img class="slde pic_small" src="./image/pic5.jpg">
									</div>
									<div class="col-6">
										<img class="slde pic_small" src="./image/pic6.jpg">
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-6">
										<img class="slde pic_small" src="./image/pic3.jpg">
									</div>
									<div class="col-6">
										<img class="slde pic_small" src="./image/pic8.jpg">
									</div>
								</div>
							</div>
						</div>
						<div class="col-6" > 
							<img class="slde" style="height: 416px;" src="./image/pic7.jpg">
						</div>							
					</div>
				</div>
			</div>

			<!-- gallert end -->

			<!-- form start -->
    <div  style="background-color:  #e9f2fa;"><br>
        <div class="container" id="form">
            <div class="frm_over">
            <div class="row">
                <div class="col-4"></div>
                <div class="frm col-4" >
            <form >
                <div class="container form" > 
                    <div class=" g-2">
                        <div class="col-md">
                            <div class="form-floating frm_in">
                                <input type="text" class="form-control" id="floatingname"  placeholder="yjyt" value="">
                                <label for="floatingname" style="--bs-body-bg: #fff0;">NAME</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating frm_in">
                                <input type="content" class="form-control" id="floatingInputphone" placeholder="yjhyt" value="">
                                <label for="floatingInputphone" style="--bs-body-bg: #fff0;">PHONE</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3 frm_in">
                                <input type="email" class="form-control" id="floatingInputemail" placeholder="name@example.com" value="">
                                <label for="floatingInputemail" style="--bs-body-bg: #fff0;">EMAIL</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating frm_in">
                                <textarea type="text" class="form-control txtarea" id="floatingInputadd" placeholder="uhy6uh" value=""></textarea>
                                <label for="floatingInputadd" style="--bs-body-bg: #fff0;">FEEDBACK</label>
                            </div>
                        </div>                        
                    </div> 
                    <!-- extra off start -->
                    
                    <br>
                    <!-- extra off end -->
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary" value="start UR RIDE" style="border-radius: 50px;">SEND</button>                      
                    </div>
                                                         
                </div>
            </form>
                </div> 
                <div class="col-4"></div>
            </div>
            </div>
        </div>
    </div>
       <!-- form end -->


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
                <div class="col"><a href="#content" class="nav-link ft_clr"><i class="bi bi-arrow-through-heart">CONTACT</i></a></div>
                
            </div>
            <div class="col">
                <h4 class="ft_clr">ADDRESS</h4>
                <br><br>
                <div><img src="image/office.png" style="width: 8%">&nbsp;<label>rk streat,rk town,rk dt.601218.</label></div><br>
                <div><img src="image/phone.png" style="width: 8%">&nbsp;<label><a href="tel:5456564" class="nav-link ft_clr">044 2415628</a></label></div><br>
                <div><img src="image/iphone.png" style="width: 8%">&nbsp;<label><a href="const:" class="nav-link ft_clr">8489749277</a></label></div><br>
                <div><img src="image/email.png" style="width: 8%">&nbsp;<label class="cont-email" ><i class="fi fi-brands-twitter"></i><a href="mailto:www.rk012612@gmail.com" class="nav-link ft_clr">www.rk012612@gmail.com</a></label></div>
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
                <div class="col"><a href="#"><i class="fa-brands fa-facebook text-white	"></i><i class="fa-brands fa-facebook-f cls"></i><img src="image/linkedin.png" style="width: 30%"></a></div>  <br>       
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
