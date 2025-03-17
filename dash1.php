<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" type="icon" href="./image/logo5.png"> -->
    <link href="./asset/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./asset/fontawesome/css/all.css" rel="stylesheet" >
    <link rel="icon" type="icon" href="./asset/image/logo5.png">

	<link rel="stylesheet" type="text/css" href="./hover.css">   <!-- pic l&r text & pic shin hover-->
	<link rel="stylesheet" type="text/css" href="./pi_hover.css">     <!-- pic circle shine hover -->
	<link rel="stylesheet" type="text/css" href="./ani_hover.css"> <!-- animation card -->
	<link rel="stylesheet" type="text/css" href="./ani_move_txt.css"> <!-- animation text movtion -->

    
    <!-- bootstrap@5.3.3 -->
    <script type="text/javascript" src="./asset/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title>SHALOO</title>
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
		color: white !important;
		font-size: large !important;
    	font-weight: bolder !important;
    	margin-top: 8px;
	}
	.nv_colrr{
		color: white !important;
		font-size: large !important;
    	font-weight: bolder !important;
	}
	.nav-link:focus, .nav-link:hover{
		color: var(--bs-nav-link-hover-color)!important;
	}
	.ban{
		background-image: url(./asset/image/view.jpg);
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
	.wel{
		width: 85%;
		height: 280px;
	}
	.wel_mar{
		margin: 80px;
	}
	.wel_hd{
		text-align: center;
		margin: 5%;
	}
	.crd_tit{
		text-align: center;
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
		margin-top: 50px;
    }
	.view_bder:hover{
        box-shadow: 0px 0px 30px #fbfbfb;

	}
	.view_bg{
        background: #5c74e114;
    }
    #about{
    	background-image: url(./asset/image/pic3.jpg);
    	width: 100%;
	    height: 700px;
	    background-position: center;
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
    	font-family: cursive;
    }
    .pic_small{
    	height: 185px;
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
    .frm_bg{
    	background-image: url(./asset/image/pic6.jpg);
    	width: 100%;
    	height:100%;
    	background-size: cover;
    }
    .frm_in{
    	margin: 15px;
    }
    .frm_txtarea{
    	height: 100px !important;
    }
    .adv_hd{
    	margin-top: 100px;
    }
    .adv_tit{
    	/*margin: 50px;*/
        text-align: center;
    }
    /* .adv_im{
    	height: 100px;
    } */
    .adv_imm{
    	/*width: 100px;*/
	    height: 90px;
	    padding: 20px;
    }
    .adv_brd{
    	border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color)!important;
    	padding: 15px;
    	width: 76%;
	    /*border-radius: 80px;*/
	    border-radius: 20px;
	    background: #f0f8ffad;
    }
    .adv_txt{
    	text-align: center;
    }
    .adv_cen{
    	text-align: -webkit-center;
    }
    .footer{
        background-color:#70665c;
    }	
    .ft_clr{
    	color: #e9f2fa;
		height: 50px;
    }
	.ft_fnt_cor{
		color: white;
	}
	.ft_ican{
		/*--bs-gutter-y: 2.5rem;*/
		width: fit-content;
    	font-size: x-large;
	}
	.ft_solo{
		color: white;
	    font-size: larger;
	    text-align: center;
	    /*margin-top: 30px;*/
	    font-family: auto;
	    margin: 130px;
	}
</style>

</head>
<body>
	<div class="nv_con">
		<nav class="navbar" style="background-color: #e3f2fd;">
			<div class="nv_title" >
				<div class="container">
					<div class="row">
						<div class="col-4 col-sm- col-md- col-lg- ">
							<!-- <img src="./image/logo.png"style="width: 100%;"> -->
							<!-- <img src="./image/logo1.png"style="width: 100%;"> -->
							<!-- <img src="./image/logo3.png"style="width: 100%;"> -->
							<img src="./asset/image/logo4.png"style="width: 50%;">
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
		<div class="ban shne_hvr">
			<div id="home">
				<div class="container">
					<div class="col-8">
						<h1 class="ban_header">TRAVEL</h1>
						<p class="ban_p">
						  <div class="ban_txt">Here</div>
						  <div class="ban_txt">are</div>
						  <div class="ban_txt">my</div>
						  <div class="ban_txt">favorite</div>
						  <div class="ban_txt">travel</div>
						  <div class="ban_txt">and</div>
						  <div class="ban_txt">adventure</div>
						  <div class="ban_txt">quotes,</div>
						  <div class="ban_txt">paired</div>
						  <div class="ban_txt">with</div>
						  <div class="ban_txt">images</div>
						  <div class="ban_txt">from</div>
						  <div class="ban_txt">my</div>
						  <div class="ban_txt">journeys</div>
						  <div class="ban_txt">around</div>
						  <!-- <div class="ban_txt">the</div> -->
						  <div class="ban_txt">the world.</div>
						</p>
					</div>
					<div class="col-4"></div>
				</div>
			</div>
		</div>
			<!-- BANNER END -->

				<!-- welcome shaloo start -->

		<div class="wel_mar">
			<div class="wel_hd">
				<h1>WHERE LUXURY WEDS NATURE</h1>
				<p>THE BEST 5 STAR RESORT IN VALPARAI</p>
			</div>
			<div class="container">
				<div>
					<div class="row">
						<div class="col-6 effect10 ">
							<div>
					            <img src="./asset/image/welcome.webp" alt="" class="wel">
					            <div class="caption">
					                <h2>WELCOME TO SHOLAA...</h2>
					                <!-- <p> I guess if you want children beaten, you have to do it yourself.</p> -->
					            </div>
				            </div>
				        </div>
						<div class="col-6">
							<div>
								<h2>welcome</h2>
								<p>Welcome to the official website of Blanket Hotel & Spa, a luxury resorts in Munnar. We are one of the top and best 5 star hotels in Munnar.Situated at Pallivasal, near the mystical Attukad waterfalls, this best hotel is soon becoming one of the most sought after top five star resorts in Munnar for honeymoon couples. At Blanket Nature Hotels in Munnar, we believe that luxury is best experienced when it blends with the beauty of nature. In this context, we have gone to great lengths to make Blanket one of the best eco friendly 5 star hotels in Munnar. Best time to visit Munnar will be from December to February .Once you experience the beauty and romantic getaway that is Blanket, you will keep coming back for more.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
					<!-- welcome end -->
					<!-- ROOMS START -->
		<div class="wel_mar">
			<div class="container">
				<div>
					<div class="row">
						<div class="col-4 effect10 ">
							<div>
					            <img src="./asset/image/room5.jpg" alt="" class="wel">
					            <div class="caption">
					                <h2>SHOLAA CAMELLIA</h2>
					                <!-- <p> I guess if you want children beaten, you have to do it yourself.</p> -->
					            </div>
				            </div>
				        </div>
						<div class="col-4 effect10 ">
							<div>
					            <img src="./asset/image/room1.jpg" alt="" class="wel">
					            <div class="caption">
					                <h2>SHOLAA PREMIER</h2>
					                <!-- <p> I guess if you want children beaten, you have to do it yourself.</p> -->
					            </div>
				            </div>
				        </div>
				        <div class="col-4 effect10 ">
							<div>
					            <img src="./asset/image/room2.jpg" alt="" class="wel">
					            <div class="caption">
					                <h2>SHOLAA VALLEY CLUB</h2>
					                <!-- <p> I guess if you want children beaten, you have to do it yourself.</p> -->
					            </div>
				            </div>
				        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="wel_mar">
			<div class="container">
				<div>
					<div class="row">
						<div class="col-6 effect10 ">
							<div>
					            <img src="./asset/image/room3.jpg" alt="" class="wel">
					            <div class="caption">
					                <h2>SHOLAA HONEYMOON PAVILION</h2>
					                <!-- <p> I guess if you want children beaten, you have to do it yourself.</p> -->
					            </div>
				            </div>
				        </div>
						<div class="col-6 effect10 ">
							<div>
					            <img src="./asset/image/room4.jpg" alt="" class="wel">
					            <div class="caption">
					                <h2>SHOLAA PRESIDENTIAL SUITE</h2>
					                <!-- <p> I guess if you want children beaten, you have to do it yourself.</p> -->
					            </div>
				            </div>
				        </div>
					</div>
				</div>
			</div>
		</div>
					<!-- ROMS END -->
					<!-- animation card start -->
		<div>
			<div class="crd_tit">
				<h1>Holistic Experience</h1>
				<p>The body is the foremost tool for manifesting our mind.Embrace nourishment as your remedy.</p>
			</div>
		</div>
		<div class="crd_bdy">
			<div>
				
			</div>
			<div class=" container">
				<div class="row">
					<div class="col-3">
						<div class="crd-contanr aayr-crd">
						  <img class="avtr" src="./asset/image/aayr1.png"></img>
						  <div class="crd aayr"></div>
						</div>
					</div>				
					<div class="col-3">
						<div class="crd-contanr yoga-crd">
						  <img class="avtr" src="./asset/image/yoga1.png"></img>
						  <div class="crd yoga"></div>
						</div>
					</div>
					<div class="col-3">
						<div class="crd-contanr gym-crd">
						  <img class="avtr" src="./asset/image/gym1.png"></img>
						  <div class="crd gym"></div>
						</div>
					</div>	
					<div class="col-3">
						<div class="crd-contanr spa-crd">
						  <img class="avtr" src="./asset/image/spa1.png"></img>
						  <div class="crd spa"></div>
						</div>
					</div>	
				</div>
			</div>
		</div>

					<!-- animation card end -->

		<!-- view point start -->
		<div class="bg_slde" id="view_point">
			<div class="container">
				<div>
					<h1>Start Your Jorney</h1>
					<p>The most searched countries in August.</p>
				</div>
			</div>
			
			<div ontouchstart="" class="wrapper">	
  				<div class="">
					<div class="row g-3 hrd">
						<div class="col-4  ">
							<div class="slde_hver effect1 " >
								<img src="./asset/image/fal.webp">
								<div class="caption">
					                <div class="leftSide"></div>
					                <div class="rightSide"></div>
					                <span class="leftInfo">SOLAIYAR</span>
					                <span class="rightInfo">DAM</span>
					            </div>
							</div>
						</div>
						<div class="col-4  ">
							<div class="slde_hver effect1 " style="margin-top: 60%;">
								<img src="./asset/image/fal6.webp">
								<div class="caption">
					                <div class="leftSide"></div>
					                <div class="rightSide"></div>
					                <span class="leftInfo">BALAJI</span>
					                <span class="rightInfo">TEMPLE</span>
					            </div>
							</div>
						</div>
						<div class="col-4  ">
							<div class="slde_hver effect1 " >
								<img src="./asset/image/fal8.webp">
								<div class="caption">
					                <div class="leftSide"></div>
					                <div class="rightSide"></div>
					                <span class="leftInfo">TEA</span>
					                <span class="rightInfo">ESTATE</span>					             
					            </div>
							</div>
						</div>
						<div class="col-4  ">
							<div class="slde_hver effect1 " >
								<img  src="./asset/image/fal3.webp">
								<div class="caption">
					                <div class="leftSide"></div>
					                <div class="rightSide"></div>
					                <span class="leftInfo">VELLAMALAI</span>
					                <span class="rightInfo">RIVER</span>
					            </div>
							</div>
						</div>
						<div class="col-4  ">
							<div class="slde_hver effect1 " style="margin-top: 60%;">
								<img  src="./asset/image/fal4.webp">
								<div class="caption">
					                <div class="leftSide"></div>
					                <div class="rightSide"></div>
					                <span class="leftInfo">BIRALA</span>
					                <span class="rightInfo">WATERFALLS</span>
					            </div>
							</div>
						</div>
						<div class="col-4  ">
							<div class="slde_hver effect1 " >
								<img  src="./asset/image/fal5.webp">
								<div class="caption">
					                <div class="leftSide"></div>
					                <div class="rightSide"></div>
					                <span class="leftInfo">CHINNA KALLAR</span>
					                <span class="rightInfo">FALLS</span>
					            </div>
							</div>
						</div>
						<div class="col-4  ">
							<div class="slde_hver effect1 " >
								<img  src="./asset/image/fal2.webp">
								<div class="caption">
					                <div class="leftSide"></div>
					                <div class="rightSide"></div>
					                <span class="leftInfo">MONKEY</span>
					                <span class="rightInfo">FALLS</span>   
					            </div>
							</div>
						</div>
						<div class="col-4  ">
							<div class="slde_hver effect1 " style="margin-top: 60%;">
								<img src="./asset/image/fal7.webp">
								<div class="caption">
					                <div class="leftSide"></div>
					                <div class="rightSide"></div>
					                <span class="leftInfo">NATIONAL</span>
					                <span class="rightInfo">PARK</span>
					            </div>
							</div>
						</div>
						<div class="col-4  ">
							<div class="slde_hver effect1 " >
								<img  src="./asset/image/fal1.webp">
								<div class="caption">
					                <div class="leftSide"></div>
					                <div class="rightSide"></div>
					                <span class="leftInfo">NIRAR</span>
					                <span class="rightInfo">DAM</span>
					            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	

			<!-- view point end -->
	</div>
	<!-- about us start -->
			<div id="about">
				<div class="container"> 
					<div style="padding: 60px">
						<div class="p-3 ">
							<div class="row row-cols-2">
								<div class="col-sm-6">
									<h4 class="view_tittle" ><b>Valparai A Treasure Chest of Experiences…</b></h4>
									<p class="border view_bder">The sholaa luxury 5 star hotel in Valparai is the epitome of what a five star resort should aspire to be. Nestled in the idyllic locales of mystic Attukad, the 5 star resort is a perfect escape for honeymoon couples and families alike who are on holiday in Valparai. With settings that boast of the most comfortable and luxurious holiday experience, The Sholaa is a luxury 5 star resort that offers guests luxury and beauty in abundance. Located in the state of Tamil Nadu, along the Western Ghats, Valparai is a kaleidoscopic paradise that is home to some of the finest tea plantations in India.</p>
								</div>
								<div class="col-sm-6">
									<!-- <img src="./image/view.jpg" style="width: 90%"> -->
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

			<div class="pic_slde_over ">
				<div class="container">
				  <div class="pi_hvr colu">

					<div class="row g-2">
							<div class="col-6"> 
								<figure><img class="slde " src="./asset/image/pic.webp"></figure>
							</div>

							<div class="col-6">
								<div class="">
									<div class="row g-2">
										<div class="col-6">
											<figure><img class="slde pic_small" src="./asset/image/pic1.webp"></figure>
										</div>
										<div class="col-6">
											<figure><img class="slde pic_small" src="./asset/image/pic2.webp"></figure>
										</div>
									
								
										<div class="col-6">
											<figure><img class="slde pic_small" src="./asset/image/tea3.jpg"></figure>
										</div>
										<div class="col-6">
											<figure><img class="slde pic_small" src="./asset/image/pic4.webp"></figure>
										</div>
									</div>
								</div>
							</div>	
						
						<div class="col-6">
							<div class="">
								<div class="row g-2">
									<div class="col-6">
										<figure><img class="slde pic_small" src="./asset/image/pic5.webp"></figure>
									</div>
									<div class="col-6">
										<figure><img class="slde pic_small" src="./asset/image/pic6.webp"></figure>
									</div>
								
									<div class="col-6">
										<figure><img class="slde pic_small" src="./asset/image/tea5.jpg"></figure>
									</div>
									<div class="col-6">
										<figure><img class="slde pic_small" src="./asset/image/pic8.webp"></figure>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6" > 
							<figure><img class="slde" style="height: 416px;" src="./asset/image/pic7.webp"></figure>
						</div>							
					</div>
				</div>
				</div>
			</div>

			<!-- gallert end -->

			<!-- form start -->
    <div class="frm_bg" style="background-color:  #e9f2fa;">
    	<div style="padding: 100px">
        <div class="container" id="form">
            <!-- <div class="frm_over"> -->
                <!-- <div class="col-4"></div> -->
            <div class="row">
                <div class="col-6">
                	<div class="ft_solo"> 
        	<p><b>"</b>Travel makes one modest. You see what a tiny place you occupy in the world.<b>"</b></p>
        </div> 
                </div>
                <div class="frm col-4" >
					<!-- <div><img src="./image/logo5.png"></div> -->
            <form method="POST" action="./mail.php">
                <div class="container form" > 
                    <div class=" g-2">
                        <div class="col-md">
                            <div class="form-floating frm_in">
                                <input type="text" class="form-control" id="floatingname"  placeholder="yjyt" value="" name="name">
                                <label for="floatingname" style="--bs-body-bg: #fff0;">NAME</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating frm_in">
                                <input type="content" class="form-control" id="floatingInputphone" placeholder="yjhyt" value="" name="mobile">
                                <label for="floatingInputphone" style="--bs-body-bg: #fff0;">PHONE</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3 frm_in">
                                <input type="email" class="form-control" id="floatingInputemail" placeholder="name@example.com" value="" name="email">
                                <label for="floatingInputemail" style="--bs-body-bg: #fff0;">EMAIL</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating frm_in">
                                <textarea type="text" class="form-control frm_txtarea" id="floatingInputadd" placeholder="uhy6uh" value="" name="feedback"></textarea>
                                <label for="floatingInputadd" style="--bs-body-bg: #fff0;">FEEDBACK</label>
                            </div>
                        </div>                        
                    </div> 
                   <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary" value="start UR RIDE" style="border-radius: 50px;">SEND</button>                      
                    </div>
                                                         
                </div>
            </form>
                </div> 
                <!-- <div class="col-4"></div> -->
            </div>
            <!-- </div> -->
        </div>
        </div>
    </div>
       <!-- form end -->
       <!-- advantage start -->
    <div style="background-image: url(./asset/image/bak.png);background-color: #e9f2fa;">
    <div style="margin: 90px;">
    	<div class="adv_tit">
    		<div>
    			<h2>Stay in comfort at our homestays boasting a range of amenities</h2>
    		</div>
    	</div>
    	<div class="adv_hd">
			<div class="container">
				 <div class="pi1_hvr colu">
				 	<!-- <div class="row g-2"> -->
						<div class="adv_im">
							<div class="row">
								<div class="col adv_cen">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./asset/image/note.png"></figure>
										<div class="adv_txt">WATER HEATER</div>
									</div>
								</div>
								<div class="col adv_cen">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./asset/image/note1.png"></figure>
										<div class="adv_txt">DOCTOR</div>
									</div>
								</div>
							
						
								<div class="col adv_cen">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./asset/image/note2.png"></figure>
										<div class="adv_txt">HILL VIEW STAY</div>										
									</div>
								</div>
								<div class="col adv_cen">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./asset/image/note3.png"></figure>
										<div class="adv_txt">PARKING AVAILABLE</div>
									</div>
								</div>
								<div class="col adv_cen">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./asset/image/note4.png"></figure>
										<div class="adv_txt">HOUSEKEEPING</div>
									</div>
								</div>
							</div>
						</div>							
					<!-- </div> -->							
					</div>
				</div>

				<div class="container">
				 <div class="pi1_hvr colu">
				 	<!-- <div class="row g-2"> -->
						<div class="adv_im">
							<div class="row ">
								<div class="col-3 adv_cen">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./asset/image/note5.png"></figure>
										<div class="adv_txt adv_hvr">HOME MADE FOOD</div>
									</div>
								</div>
								<div class="col-3 adv_cen">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./asset/image/note6.png"></figure>
										<div class="adv_txt adv_hvr">OPEN DINNING HALL</div>
									</div>
								</div>
							
						
								<div class="col-3 adv_cen">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./asset/image/note7.png"></figure>
										<div class="adv_txt adv_hvr">ROOM SERVICE</div>
									</div>
								</div>
								<div class="col-3 adv_cen">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./asset/image/note8.png"></figure>
										<div class="adv_txt adv_hvr">WIFI</div>
									</div>
								</div>
								<!-- <div class="col">
									<div class="adv_imt adv_brd">
										<figure><img class="adv_imm" src="./image/note9.png"></figure>
										<div class="adv_txt">DOCTOR</div>
									</div>
								</div> -->
							</div>
						</div>							
					<!-- </div> -->							
					</div>
				</div>
			</div>
    </div>
</div>
       <!-- advantage end -->

	<!-- footer -->
    <footer class="footer" id="content" style="padding: 35px;"> 
      <div class="container">
        <div class="row">
            <div class="col-3">
                <h4 class="ft_clr" >MENU</h4>
                
                <div><a href="#home" class="nav-link nv_colr">HOME</a></div>
                <div><a href="#view_point" class="nav-link nv_colr">VIEW POINT</a></div>
                <div><a href="#about" class="nav-link nv_colr">ABOUT US</a></div>                
                <div><a href="#content" class="nav-link nv_colr"><i class="bi bi-arrow-through-heart">CONTACT</i></a></div>
                
            </div>
            <div class="col-3">
                <h4 class="ft_clr">ADDRESS</h4>
                
                <div><i class="fa-solid fa-building  ft_fnt_cor"></i>&nbsp;<label class="nv_colrr">rk streat,rk town,rk dt.601218.</label></div>
                <div><i class="fa-solid fa-phone  ft_fnt_cor"></i>&nbsp;<label><a href="tel:5456564" class="nav-link nv_colr">044 2415628</a></label></div>
                <div><i class="fa-solid fa-mobile  ft_fnt_cor"></i>&nbsp;<label><a href="const:" class="nav-link nv_colr">8489749277</a></label></div>
                <div><i class="fa-solid fa-envelope ft_fnt_cor"></i>&nbsp;<label><a href="mailto:www.rk012612@gmail.com" class="nav-link nv_colr">www.rk012612@gmail.com</a></label></div>
            </div>        
            <div class="col-3">
                <h4 class="ft_clr">FOLLOW US</h4>
            
                <div class="row g-2 ft_ican">
					<div class="col-6"><a href="#"><i class="fa-brands fa-facebook-f ft_fnt_cor"></i></a></div>
					<div class="col-6"><a href="#"><i class="fa-brands fa-instagram ft_fnt_cor"></i></a></div>
					<!-- <div class="w-100"></div> -->
					<div class="col-6"><a href="#"><i class="fa-brands fa-twitter ft_fnt_cor"></i></a></div>
					<div class="col-6"><a href="#"><i class="fa-brands fa-whatsapp ft_fnt_cor"></i></a></div>
					<!-- <div class="w-100"></div> -->
					<div class="col-6"><a href="#"><i class="fa-brands fa-youtube ft_fnt_cor"></i></a></div>
					<div class="col-6"><a href="#"><i class="fa-brands fa-x-twitter ft_fnt_cor"></i></a></div>       
                </div>
            </div>
            <div class="col-3">
                <h4 class="ft_clr">MAP LOCATION</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3925.3291039575756!2d76.900187!3d10.315525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07892e60180ae9%3A0x2c54960c63b7b666!2sSholaa%20Plantations%20Private%20Ltd!5e0!3m2!1sen!2sin!4v1722407155771!5m2!1sen!2sin" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1364.6704463242006!2d77.04472544328974!3d11.041711467698603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2829fce3c0fddf4d%3A0x48058830592e5339!2sTecnova%20Technologies%20Private%20Limited!5e1!3m2!1sen!2sin!4v1718082249787!5m2!1sen!2sin" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>
        </div>
              
      </div>
    </footer>  
    <footer>
        <div style="background-color: black;text-align: center;color: white;padding:15px;">
            <div class="container">
                <div class="row">
                    <div>©Sholaa Plantation Pvt.ltd . All right reserved by 2024. </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
