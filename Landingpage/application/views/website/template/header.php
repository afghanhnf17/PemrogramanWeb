<header class="header clearfix element_to_stick">

		<div id="top_line">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 d-xs-none"
						style="padding: 10px; background-color: #115fa6; color: white; text-align: center; border-radius: 0px 0px 100px 0px;">
						<strong style="font-size: 14px;">STTNF I Sekolah Tinggi Terpadu Nurul Fikri</strong></div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="padding: 10px;">
						<ul class="additional_links" style="padding: 0px;">
							<li><a href="tel:+6285716243174" style="color: black; font-size: 14px;">
									<span aria-hidden="true" class="icon_phone" style="color: black;"></span>&nbsp;
									+62 857 1624 3174</a></li>
							<li><a href="mailto:tel:info@nurulfikri.ac.id" style="color: black; font-size: 14px;">
									<span aria-hidden="true" class="icon_mail" style="color: black;"></span>&nbsp;
									info@nurulfikri.ac.id</a></li>
							<li>
								<a href="" target="_blank" style="color: black; font-size: 14px;">
									<span aria-hidden="true" class="social_instagram" style="color: black;"></span></a>
								&nbsp;<a href="" target="_blank" style="color: black; font-size: 14px;">
									<span aria-hidden="true" class="social_facebook_square"
										style="color: black;"></span></a>
								&nbsp;<a href="" target="_blank" style="color: black; font-size: 14px;">
									<span aria-hidden="true" class="social_twitter_square"
										style="color: black;"></span></a>
								&nbsp;<a href="" target="_blank" style="color: black; font-size: 14px;">
											<span aria-hidden="true" class="social_youtube"
												style="color: black;"></span></a>
							</li>
						</ul>
					</div>
				</div><!-- End row -->
			</div><!-- End container-->
		</div><!-- End top line-->

		<div class="container">
			<div id="logo">
				<a href="<?php echo site_url('User/index#close');?>">
					<img src="<?php echo base_url('');?>assets-web/img/STTNF/logo2.png" width="190" height="65" alt="" class="logo_normal">
					<img src="<?php echo base_url('');?>assets-web/img/STTNF/logo2.png" width="190" height="65" alt="" class="logo_sticky">
				</a>
			</div>
			<!-- /top_menu -->
			<a href="#0" class="open_close">
				<i class="icon_menu"></i><span>Menu</span>
			</a>
			<nav class="main-menu">
				<div id="header_menu">
					<a href="#0" class="open_close">
						<i class="icon_close"></i><span>Menu</span>
					</a>
				</div>
				<ul>
					<li class="submenu">
						<a href="#0" class="show-submenu">Profil <span data-icon="&#x43;"></span></a>
						<ul>
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="#">Visi dan Misi</a></li>
							<li><a href="#">Identitas</a></li>
							<li><a href="#">Struktur Organisasi</a></li>
							<li><a href="#">Profil Dosen</a></li>
							<li><a href="#">Fasilitas</a></li>
						</ul>
					</li>

					<li class="submenu">
						<a href="#0" class="show-submenu">Program Studi <span data-icon="&#x43;"></span></a>
						<ul>
							<li><a href="#">Sistem Informasi</a></li>
							<li><a href="#">Teknik Informatika</a></li>
							<li><a href="#">Bisnis Digital</a></li>
						</ul>
					</li>

					<li class="submenu">
						<a href="#0" class="show-submenu">Informasi <span data-icon="&#x43;"></span></a>
						<ul>
							<li><a href="#">Kemahasiswaan</a></li>
							<li><a href="#">BAAK - Biro</a></li>
							<li><a href="#">Sistem Akademik AIS</a></li>
						</ul>
					</li>

					<li><a href="#">Galeri</a></li>
					<li><a href="#">Berita</a></li>
					<li><a href="#">Pengumuman</a></li>
					<li><a href="#">Hubungi Kami</a></li>

				</ul>
			</nav>
		</div>
	</header>
	<!-- /header -->

    <style>

	/*-------- 1.3 Structure --------*/

	/* Header */

	header.sticky #top_line {
		height: 0;
		overflow: hidden;
		padding: 0;
		opacity: 0;
		transition: all 0.2s ease-in-out;
		-moz-transition: all 0.2s ease-in-out;
		-webkit-transition: all 0.2s ease-in-out;
		-o-transition: all 0.2s ease-in-out;
	}

	header.sticky {
		-webkit-box-shadow: 0px 2px 10px -2px rgba(0, 0, 0, 15%);
		-moz-box-shadow: 0px 2px 10px -2px rgba(0, 0, 0, 15%);
		box-shadow: 0px 2px 10px -2px rgba(0, 0, 0, 15%);
		background-color: #fff;
	}

	#top_line {
		color: black;
		font-size: 12px;
		border-bottom: 1px solid rgba(0, 0, 0, 0.1);
		font-size: 13px !important;
		visibility: visible;
		opacity: 1;
		margin-bottom: 10px;
		position: relative;
		z-index: 999999;
	}

	ul#top_links {
		list-style: none;
		margin: 0;
		padding: 0;
		float: right;
	}

	a#access_link,
	a#wishlist_link {
		position: relative;
		display: inline-block;
	}

	#access_link:before,
	#wishlist_link:before {
		font-style: normal;
		font-weight: normal;
		font-family: "fontello";
		font-size: 0px;
		position: absolute;
		left: 0;
		top: 0;
	}

	.layanan {
		padding: 20px 20px 10px 20px;
		background: transparent;
		box-shadow: none;
		margin-bottom: 10px;
	}

	.disabled {
		pointer-events: none;
		cursor: default;
		text-decoration: none !important ;
		font-size: 15px !important; font-weight: 500;
	}

    </style>