<div id="mySidenav" class="sidenav">
	<a href="<?php echo site_url('User/LayananPerizinan');?>" id="Informasi">
		<span data-icon="&#x68;"></span>
		<span class="text-side-nav hidden-xs" style="font-size: 14px !important;">Layanan Perizinan</span>
	</a>
	<a href="<?php echo site_url('User/LayananPublik');?>" id="LPublik">
		<span data-icon="&#xe0ef;"></span>
		<span class="text-side-nav hidden-xs" style="font-size: 14px !important;">Layanan Publik</span>
	</a>
	<a data-toggle="modal" data-target="#darurat" id="LPerizinan" style="background-color: #e96076 !important;">
		<span data-icon="&#xe090;"></span>
		<span class="text-side-nav hidden-xs" style="font-size: 14px !important;">Layanan Darurat</span>
	</a>
	<a href="<?php echo site_url('User/LayananPengaduan');?>" id="LPengaduan">
		<span data-icon="&#x77;"></span>
		<span class="text-side-nav hidden-xs" style="font-size: 14px !important;">Layanan Pengaduan</span>
	</a>
	<a href="<?php echo site_url('User/Infografis');?>" id="LCovid">
		<span data-icon="&#xe005;"></span>
		<span class="text-side-nav hidden-xs" style="font-size: 14px !important;">Infografis</span>
	</a>
</div>

<div class="modal" id="darurat" role="dialog" style="z-index: 9999999;">
        <div class="container-popupdarurat">
            <form action="#" method="post" class="popup-form">

                         <div class="blog-page-content">

                         <button type="button" class="close" data-dismiss="modal" style="background-color: #008489; padding: 5px 10px 5px 10px;
                         color: white; border-radius: 4px; margin: 5px;">&times;</button>

                    <div class="blog-item" style="box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1); padding: 20px;border-radius: 5px;">

                        <div class="col-12" style="margin-top: 20px;">
                        <div class="row">

                        <div class="col-lg-12 col-12">
							<p style="margin-bottom: 0px;"><a href="tel:110" class="btn_1 btn_scroll" 
								style="width: 100%;">110 Polisi <span
									data-icon="&#xe03c;"></span></a></p>
                        </div>

						<div class="col-lg-12 col-12">
							<p style="margin-bottom: 0px;"><a href="tel:113" class="btn_1 btn_scroll" 
								style="width: 100%;">113 Pemadam Kebakaran <span
									data-icon="&#xe03c;"></span></a></p>
                        </div>

						<div class="col-lg-12 col-12">
							<p style="margin-bottom: 0px;"><a href="tel:115" class="btn_1 btn_scroll" 
								style="width: 100%;">115 SAR/BASARNAS <span
									data-icon="&#xe03c;"></span></a></p>
                        </div>

						<div class="col-lg-12 col-12">
							<p style="margin-bottom: 0px;"><a href="tel:129" class="btn_1 btn_scroll" 
								style="width: 100%;">129 Posko Bencana <span
									data-icon="&#xe03c;"></span></a></p>
                        </div>

						<div class="col-lg-12 col-12">
							<p style="margin-bottom: 0px;"><a href="tel:082164902482" class="btn_1 btn_scroll" 
								style="width: 100%;">Call Center Covid <span
									data-icon="&#xe03c;"></span></a></p>
                        </div>

                        </div>
                        </div>
            </div>
            </div>
            </form>
        </div>
    </div>

<style>
	.text-side-nav {
		display: none;
		transition: 0.3s;
	}

	#mySidenav a {
		position: fixed;
		border: 1px solid white;
		z-index: 9999999;
		left: 0;
		transition: 0.3s;
		padding: 8px 10px 8px 15px;
		width: 50px;
		text-decoration: none;
		font-size: 20px;
		color: white;
		border-radius: 0 5px 5px 0;
		overflow: hidden;
		background-color: #ff9769 !important;
	}

	#mySidenav a:hover {
		width: auto;
	}

	#mySidenav a:hover .text-side-nav {
		display: inline-block;
		margin-left: 8px;
		margin-right: 8px;
	}

	#Informasi {
		top: 184px;
	}

	#LPublik {
		top: 235px;
	}

	#LPerizinan {
		top: 286px;
	}

	#LPengaduan {
		top: 337px;
	}

	#LCovid {
		top: 388px;
	}

	a#pencarianGlobal:hover #formPencarian {
		display: block;
	}

	#formPencarian {
		position: absolute;
		display: none;
		z-index: 10;
		max-width: 500px;
		border-radius: 0;
		border: 1px solid #555;
		transition: .3s;
		/* right: 10px; */
	}

	#keyPencarian {
		border-radius: 0;
		border: none;
	}

	.button-addon {
		border-radius: 0;
		border: none;
		background-color: #333;
		color: white;
		/* width: 100%; */
		height: 100%;
	}

	.button-addon button {
		border-radius: 0;
		border: none;
		background-color: #333;
		color: white;
	}

	@media (max-width: 425px) {
		#mySidenav a {
			position: fixed;
			z-index: 999999;
			transition: 0.3s;
			width: 50px;
			text-decoration: none;
			font-size: 20px;
			color: white;
			border-radius: 5px 5px 5px 5px;
			overflow: hidden;
			background-color: #ff9769 !important;
		}

		#mySidenav a:hover {
			width: auto;
		}

		#mySidenav a:hover .text-side-nav {
			display: inline-block;
			margin-left: 8px;
			margin-right: 8px;
		}

		#Informasi {
			bottom: 10px !important;
			left: 15px !important;
			top: auto;
		}

		#LPublik {
			bottom: 10px !important;
			left: 75px !important;
			top: auto;
		}

		#LPerizinan {
			bottom: 10px !important;
			left: 135px !important;
			top: auto;
		}

		#LPengaduan {
			bottom: 10px !important;
			left: 195px !important;
			top: auto;
		}

		#LCovid {
			bottom: 10px !important;
			left: 255px !important;
			top: auto;
		}

		#lowongan {
			bottom: 10px !important;
			left: 195px !important;
			top: auto;
		}
	}

		/* The Close Button */
		.closes {
				color: white;
				float: right;
				font-size: 28px;
				font-weight: bold;
			}

			.closes:hover,
			.closes:focus {
				color: #000;
				text-decoration: none;
				cursor: pointer;
			}

			/* On smaller screens, decrease text size */
			@media only screen and (max-width: 425px) {
				.container-popupdarurat {
					margin-top: 50px !important;
				}
				.imgt {
					width: 30%;
					height: auto;
					object-fit: cover;
					border-radius: 5px;
				}
				/* Modal Content */
				.modal-contentt {
					position: relative;
					background-color: #fefefe;
					margin: auto;
					padding: 0;
					border: 1px solid #888;
					width: 90%;
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
					-webkit-animation-name: animatetop;
					-webkit-animation-duration: 0.4s;
					animation-name: animatetop;
					animation-duration: 0.4s
				}
			}

			#close {
				background-color: rgba(64, 68, 65, 0.5);
				position: fixed;
				z-index: 999999;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
			}

			#close:target {
				-webkit-transition: all 1s;
				-moz-transition: all 1s;
				transition: all 1s;
				opacity: 0;
				visibility: hidden;
			}

			@media (min-width: 768px) {
				.container-popupdarurat {
					width: 25%;
				}
			}

			@media (max-width: 767px) {
				.container-popupdarurat {
					width: 90%;
				}

				.tab button {
					width: 50%;
				}
			}

			.container-popupdarurat {
				position: relative;
				margin: 5% auto;
				margin-top: 10%;
				background-color: #fff;
				color: #333;
				border-radius: 8px;
			}
			.container-popupdarurat img {
				width: 100%
			}

			.close {
				position: absolute;
				top: 3px;
				right: 3px;
				background-color: #33898B;
				padding: 7px 10px;
				font-size: 15px;
				text-decoration: none;
				line-height: 1;
				color: #fff;
			}

			/* Fading animation */
			.fade {
				-webkit-animation-name: fade;
				-webkit-animation-duration: 2s;
				animation-name: fade;
				animation-duration: 2s;
			}

			@-webkit-keyframes fade {
				from {
					opacity: .4
				}

				to {
					opacity: 1
				}
			}

			@keyframes fade {
				from {
					opacity: .4
				}

				to {
					opacity: 1
				}
			}

    </style>