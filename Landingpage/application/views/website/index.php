<main>
<div class="">
<div id="close">
			<div class="container-popup">
				<form action="#" method="post" class="popup-form">

					<div class="blog-page-content">

						<a class="close" href="#close">&times;</a>

						<div class="blog-item"
							style="box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1); padding: 20px;border-radius: 5px;">
							<h5 style="font-weight: bold;">Pengumuman</h5>
							<div class="blog-item-img">
								<a href="#">
									<img src="<?php echo base_url('');?>assets-web/img/STTNF/pengumuman.jpg" alt="STTNF" class="img-responsive"
										style="height: 200px; object-fit: cover; margin-bottom: 10px; border-radius: 5px;">
								</a>
							</div>

							<div class="blog-item-content">
								<h4><a href="#">Program Beastudi STTNF Akan segera dibuka ...</a></h4>
								<p>Program beastudi STTNF akan segera dibuka dengan banyak pilihan beasiswa, salahsatunya adalah beasiswa 100% full, lihat persyaratannya disini ...</p>
								<div class="metadata">
									<i class="fa fa-calendar" style="padding-right: 5px;"></i> <a
										href="#">18 - 12 - 2021</a>
									<span class="separator">|</span>
									<i class="fa fa-user" style="padding-right: 5px; padding-left: 5px;"></i> <a
										href="">Kemahasiswaan STTNF</a>
								</div>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>

	<!-- Banner Area Start 2 -->
	<div id="banner">

	<div class="banner-slider" data-pagination="true">


		<div class="banner-item" data-bg-img="" style="background-color: #f0feff;">
			<div class="opacity-mask d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12" style="margin-bottom: auto; margin-top: auto;">
						<div class="vc-parent">
							<div class="vc-child">

								<section class="banner-item-content" style="padding: 30px 20px 0px 20px;">

									<h3><strong>Kampus IT</strong> yang Siap Menjadi Perintis Teknologi Digital Masa Depan</h3>
									<p style="font-family: 'Poppins';"><span>STT Terpadu Nurul Fikri Mencetak Sarjana Komputer yang Berakhlak Mulia, Professional dan Bersertifikat IT serta Mampu Bersaing Secara Global.</span></p>


										<a href="#" class="btn_1"><i class="fa fa-arrow-circle-right" 
										aria-hidden="true"></i> Selengkapnya</a>
								</section>

							</div>
						</div>
					</div>

					<div class="col-md-6 col-xs-12">
						<div class="vc-parent">
							<div class="vc-child">

							<img src="<?php echo site_url('');?>assets-web/img/STTNF/banner2.gif" alt="" style="margin-top: 10%;">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

	</div>
	</div>

		<div class="service-area">
			<div class="container">
				<div class="service-wrap service-wrap-hm9" style="padding: 20px 20px 0px 20px; border-radius: 20px;">
					<div class="row center">
						<div class="col-xs-6 col-sm-4 col-lg-4" style="padding-bottom: 10px;">
							<div class="single-service-wrap mb-30">
								<div class="service-icon service-icon-blue" style="margin-bottom: 20px;">
									<img src="<?php echo base_url('');?>assets-web/img/STTNF/check.png" alt="STTNF" width="60" height="60">
								</div>
								<div class="service-content">
									<h3><a href="<?php echo site_url('User/Pajak');?>">Prodi Sistem Informasi</a></h3>
									<p>Informasi Program Studi SI mulai dari SKS, peminatan dan mata kuliah.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-lg-4" style="padding-bottom: 10px;">
							<div class="single-service-wrap mb-30">
								<div class="service-icon service-icon-blue" style="margin-bottom: 20px;">
									<img src="<?php echo base_url('');?>assets-web/img/STTNF/check.png" alt="STTNF" width="60" height="60">
								</div>
								<div class="service-content">
									<h3><a href="<?php echo site_url('User/LayananKesehatan');?>">Prodi Teknik Informatika </a></h3>
									<p>Informasi Program Studi TI mulai dari SKS, peminatan dan mata kuliah.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-lg-4" style="padding-bottom: 10px;">
							<div class="single-service-wrap mb-30">
								<div class="service-icon service-icon-blue" style="margin-bottom: 20px;">
									<img src="<?php echo base_url('');?>assets-web/img/STTNF/check.png" alt="STTNF" width="60" height="60">
								</div>
								<div class="service-content">
									<h3><a href="<?php echo site_url('User/LayananPerizinan');?>">Prodi Bisnis Digital</a></h3>
									<p>Informasi Program Studi BD mulai dari SKS, peminatan dan mata kuliah.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg_gray" style="background-color: white; padding-bottom: 50px;">
			<div class="container">
				<div class="main_title">
					<span><em></em></span>
					<h2>Angka Kejadian Covid-19 Terpantau Kota Depok</h2>
					<p>Update Terakhir: <strong><?php echo ($corona['LastUpdate']);?></strong></p>
				</div>
				<!-- /main_title -->
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6">
						<div class="box_topic" style="background-color: #e8646f">
							<h3 style="color: white; font-weight: 500;">Total Terkonfirmasi</h3>
							<h2 style="color: white; font-weight: bold;"><?php echo number_format($corona['positif']['total_terkonfirmasi']);?></h2>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="box_topic">
							<h3>Total Pasien Aktif</h3>
							<h2 style="color: #ceb546; font-weight: bold;"><?php echo number_format($corona['positif']['total_aktif']);?></h2>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="box_topic">
							<h3>Selesai Isolasi/Sembuh</h3>
							<h2 style="color: #50bfa5; font-weight: bold;"><?php echo number_format($corona['positif']['total_sembuh']);?></h2>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="box_topic">
							<h3>Meninggal</h3>
							<h2 style="color: #a20e0e; font-weight: bold;"><?php echo number_format($corona['positif']['total_meninggal']);?></h2>
						</div>
					</div>
				</div>
				<!-- /row -->
				<!-- /carousel -->
				<p><a href="https://ccc-19.depok.go.id/" target="_blank" class="btn_1 btn_scroll" style="float: right !important;">Lihat Selengkapnya <span
							data-icon="&#xe03c;"></span></a></p>
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_gray -->
		<div class="" style="background-color: #f0feff;" id="waktu">
			<div class="container" style="padding-bottom: 20px; padding-top: 40px;">	

				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-6">
						<div class="box_topic" style="padding: 20px 20px 10px 20px;">
							<figure><img src="<?php echo base_url('');?>assets-web/img/calendar.png" alt="STTNF" width="50" height="50"></figure>
							<h3 style="font-weight: bold;"><?php echo date("d F Y");?></h3>
							<p id="tanggalHijriah"></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="box_topic" style="padding: 20px 20px 10px 20px;">
							<figure><img src="<?php echo base_url('');?>assets-web/img/jam.png" alt="STTNF" width="50" height="50"></figure>
							<h3 style="margin-bottom: 5px; font-weight: bold;">
							<?php
                                    date_default_timezone_set("Asia/Jakarta");
                                    function sign($x) {
                                        if ($x == 0) return 0;
                                        else return $x / abs($x);
                                    }

                                    $time_ini = date('H : i : s');

                                    function WaktuShalat($jadwal) {
                                        $tanggal = getdate();
                                        date_default_timezone_set("Asia/Jakarta");
                                        $J = $tanggal['yday'];
                                        $H = 0; // Ketinggian laut (meter)
                                        $Gd = 19.5; // Sudut Fajar Senja (15°-19°)  -  Dawn’s Twilight Angle (15°-19°)
                                        $Gn = 17.5; // Sudut Malam Senja (15°-19°)  -  Night’s Twilight Angle (15°-19°)
                                        $B = - 6.3944475; // Garis Lintang (derajat)  -  Latitude (Degrees)
                                        $L = 106.8213664; // Garis Bujur (derajat)  -  Longitude (Degrees)
                                        $TZ = 7; // Waktu Daerah (jam)  -  Time Zone (Hours)
                                        $Sh = 1; // Sh=1 (Shafii) - Sh=2 (Hanafi)

                                        // STOP EDITING,

                                        $D = 0; // Turun mengenai matahari (derajat)  -  Solar Declination (derajat)
                                        $T = 0; // Persamaan dari waktu (menit)  -  Equation of times (minutes)
                                        $R = 0; // Referensi Garis Bujur (derajat)  -  Reference Longitude (Degrees)
                                        $beta = 2 * pi() * $J / 365;
                                        $D = (180 / pi()) * (0.006918 - (0.399912 * cos($beta)) + (0.070257 * sin($beta)) - (0.006758 * cos(2 * $beta)) + (0.000907 * sin(2 * $beta)) - (0.002697 * cos(3 * $beta)) + (0.001480 * sin(3 * $beta)));
                                        $T = 229.18 * (0.000075 + (0.001868 * cos($beta)) - (0.032077 * sin($beta)) - (0.014615 * cos(2 * $beta)) - (0.040849 * sin(2 * $beta)));
                                        $R = 15 * $TZ;
                                        $G = 18;
                                        $Z = 12 + (($R - $L) / 15) - ($T / 60);
                                        $U = (180 / (15 * pi())) * acos((sin((-0.8333 - 0.0347 * sign($H) * sqrt(abs($H))) * (pi() / 180)) - sin($D * (pi() / 180)) * sin($B * (pi() / 180))) / (cos($D * (pi() / 180)) * cos($B * (pi() / 180))));
                                        $Vd = (180 / (15 * pi())) * acos((-sin($Gd * (pi() / 180)) - sin($D * (pi() / 180)) * sin($B * (pi() / 180))) / (cos($D * (pi() / 180)) * cos($B * (pi() / 180))));
                                        $Vn = (180 / (15 * pi())) * acos((-sin($Gn * (pi() / 180)) - sin($D * (pi() / 180)) * sin($B * (pi() / 180))) / (cos($D * (pi() / 180)) * cos($B * (pi() / 180))));
                                        $W = (180 / (15 * pi())) * acos((sin(atan(1 / ($Sh + tan(abs($B - $D) * pi() / 180)))) - sin($D * pi() / 180) * sin($B * pi() / 180)) / (cos($D * pi() / 180) * cos($B * pi() / 180)));
                                        switch ($jadwal) {
                                            case 1:
                                            $hasil = $Z - $Vd;
                                            break;

                                            case 2:
                                            $hasil = $Z - $U;
                                            break;

                                            case 3:
                                            $hasil = $Z;
                                            break;

                                            case 4:
                                            $hasil = $Z + $W;
                                            break;

                                            case 5:
                                            $hasil = $Z + $U;
                                            break;

                                            case 6:
                                            $hasil = $Z + $Vn;
                                            break;
                                        }

                                        $subuh = $Z - $Vd;
                                        $jam = floor($hasil);
                                        $menit = floor(($hasil - $jam) * 60);
                                        $detik = floor(((($hasil - $jam) * 60) - $menit) * 60);
                                        if (strlen($jam) == 1) $jam = "0" . $jam;
                                        if (strlen($menit) == 1) $menit = "0" . $menit;
                                        if (strlen($detik) == 1) $detik = "0" . $detik;
                                        $output = "$jam.$menit WIB";
                                        return $output;
                                    }
                                            
                                    if ($time_ini > WaktuShalat(1) && $time_ini < WaktuShalat(2)) {
                                        echo WaktuShalat(2) . "</h5><p>Sholat Dhuha</p>";
                                    }
                                    elseif ($time_ini > WaktuShalat(2) && $time_ini < WaktuShalat(3)) {
                                        echo WaktuShalat(3) . "</h5><p>Sholat Dzuhur</p>";
                                    }
                                    elseif ($time_ini > WaktuShalat(3) && $time_ini < WaktuShalat(4)) {
                                        echo WaktuShalat(4) . "</h5><p>Sholat Ashar</p>";
                                    }
                                    elseif ($time_ini > WaktuShalat(4) && $time_ini < WaktuShalat(5)) {
                                        echo WaktuShalat(5) . "</h5><p>Sholat Magrib</p>";
                                    }
                                    elseif ($time_ini > WaktuShalat(5) && $time_ini < WaktuShalat(6)) {
                                        echo WaktuShalat(6) . "</h5><p>Sholat Isya</p>";
                                    }
                                    elseif ($time_ini > WaktuShalat(6) && $time_ini > WaktuShalat(1)) {
                                        echo WaktuShalat(1) . "</h5><p>Sholat Subuh</p>";
                                    }
                                ?>
                            </h3>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="box_topic" style="padding: 20px 20px 10px 20px;">
							<figure><img src="<?php echo base_url('');?>assets-web/img/cloudy.png" alt="STTNF" width="50" height="50"></figure>							
							<h3 style="font-weight: bold;">32&deg;C</h3>
							<p>Hari Ini</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="box_topic" style="padding: 20px 20px 10px 20px;">
							<figure><img src="<?php echo base_url('');?>assets-web/img/cloudy.png" alt="STTNF" width="50" height="50"></figure>
							<h3 style="font-weight: bold;">33&deg; - 35&deg;C</h3>
							<p>Besok</p>
						</div>
					</div>
				</div>
				<!-- /row -->

				<div class="main_title" style="padding-top: 20px;">
					<span><em></em></span>
					<h2 style="font-weight: 600;">Layanan & Informasi</h2>
					<p>Akses Layanan dan Informasi STT Terpadu Nurul Fikri</p>
				</div>

				<div class="row justify-content-center align-items-center"
					style="padding-top: 30px; padding-bottom: 20px;">
					<div class="col-lg-2 pl-lg-2 text-center d-none d-lg-block">
						<object type="image/svg+xml" style="width: 100%; height: auto;" data="https://ik.imagekit.io/smartcity/layanan2.svg"></object>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<a href="#">
									<div class="box_topic layanan">
										<figure><img src="<?php echo base_url('');?>assets-web/img/STTNF/1.png" alt="STTNF" width="60" height="60"></figure>
										<h3 style="font-weight: 500;">Sistem Akademik (AIS)</h3>
										<p>Aplikasi informasi Akademik dan Panduan KRS bagi mahasiswa-mahasiswi aktif.</p>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-6">
							<a href="#">
								<div class="box_topic layanan">
									<figure><img src="<?php echo base_url('');?>assets-web/img/STTNF/2.png" alt="STTNF" width="60" height="60"></figure>
									<h3 style="font-weight: 500;">Pendaftaran Mahasiswa Baru</h3>
									<p>Informasi Penerimaan Mahasiswa Baru STT-NF.</p>
								</div>
							</a>
							</div>
							<div class="col-lg-4 col-md-6">
							<a href="#">
								<div class="box_topic layanan mb-1">
									<figure><img src="<?php echo base_url('');?>assets-web/img/STTNF/3.png" alt="STTNF" width="60" height="60"></figure>
									<h3 style="font-weight: 500;">Program Beastudi</h3>
									<p>Informasi dan pengumuman program Beasiswa STT Terpadu Nurul Fikri.</p>
								</div>
							</a>
							</div>
							<div class="col-lg-4 col-md-6">
							<a href="#">
								<div class="box_topic layanan">
									<figure><img src="<?php echo base_url('');?>assets-web/img/STTNF/4.png" alt="STTNF" width="60" height="60"></figure>
									<h3 style="font-weight: 500;">Kemahasiswaan STT-NF</h3>
									<p>Informasi civitas akademik dan berita dari kegiatan LFK atau IT Club.</p>
								</div>
							</a>
							</div>
							<div class="col-lg-4 col-md-6">
							<a href="#">
								<div class="box_topic layanan">
									<figure><img src="<?php echo base_url('');?>assets-web/img/STTNF/5.png" alt="STTNF" width="60" height="60"></figure>
									<h3 style="font-weight: 500;">BAAK - Biro</h3>
									<p>Administrasi Akademik & Kemahasiswaan STT Terpadu Nurul Fikri.</p>
								</div>
							</a>
							</div>
							<div class="col-lg-4 col-md-6">
							<a href="#">
								<div class="box_topic layanan">
									<figure><img src="<?php echo base_url('');?>assets-web/img/STTNF/6.png" alt="STTNF" width="60" height="60"></figure>
									<h3 style="font-weight: 500;">Penelitian</h3>
									<p>Lembaga Penelitian dan Pengabdian Masyarakat (LPPM STT-NF).</p>
								</div>
							</a>
							</div>
						</div>
					</div>
					<div class="col-lg-2 pl-lg-2 text-center d-none d-lg-block">
						<object type="image/svg+xml" style="width: 100%; height: auto;" data="https://ik.imagekit.io/smartcity/layanan1.svg"></object>
					</div>
				</div>
				<!-- /row -->
				<!-- /container -->
			</div>
		</div>

		<div class="" style="background-color: white;">
			<div class="container">

				<div class="main_title" style="padding-top: 50px;">
					<span><em></em></span>
					<h2>Fasilitas STT Terpadu Nurul Fikri</h2>
					<p>Informasi seputar Fasilitas di STT Terpadu Nurul Fikri</p>
				</div>

				<div class="owl-carousel owl-theme carousel_4">

					<div class="item">
						<div class="strip">
							<figure>
								<img src="<?php echo base_url('');?>assets-web/img/STTNF/auditorium.jpg" 
								data-src="<?php echo base_url('');?>assets-web/img/STTNF/auditorium.jpg" class="owl-lazy"
									alt="STTNF" style="width: 100%; object-fit: cover; height: 190px;">
								<a data-toggle="modal" data-target="#fasilitas" class="strip_info">
									<!-- <small>Gunung</small> -->
									<div class="item_title">
										<h3>Auditorium</h3>
									</div>
								</a>
							</figure>
							<ul>
								<li><a data-toggle="modal" data-target="#fasilitas"> <span class="loc_open">Selengkapnya</span> </a></li>
								<li>
									<div class="score"> <a href="" target="_blank"> <span data-icon="&#xe01d;"> Lokasi</span></a></div>
								</li>
							</ul>
						</div>
					</div>

					<div class="item">
						<div class="strip">
							<figure>
								<img src="<?php echo base_url('');?>assets-web/img/STTNF/perpus.jpg" 
								data-src="<?php echo base_url('');?>assets-web/img/STTNF/perpus.jpg" class="owl-lazy"
									alt="STTNF" style="width: 100%; object-fit: cover; height: 190px;">
								<a data-toggle="modal" data-target="#fasilitas" class="strip_info">
									<!-- <small>Gunung</small> -->
									<div class="item_title">
										<h3>Perpustakaan</h3>
									</div>
								</a>
							</figure>
							<ul>
								<li><a data-toggle="modal" data-target="#fasilitas"> <span class="loc_open">Selengkapnya</span> </a></li>
								<li>
									<div class="score"> <a href="" target="_blank"> <span data-icon="&#xe01d;"> Lokasi</span></a></div>
								</li>
							</ul>
						</div>
					</div>

					<div class="item">
						<div class="strip">
							<figure>
								<img src="<?php echo base_url('');?>assets-web/img/STTNF/musholla.jpg" 
								data-src="<?php echo base_url('');?>assets-web/img/STTNF/musholla.jpg" class="owl-lazy"
									alt="STTNF" style="width: 100%; object-fit: cover; height: 190px;">
								<a data-toggle="modal" data-target="#fasilitas" class="strip_info">
									<!-- <small>Gunung</small> -->
									<div class="item_title">
										<h3>Mushola</h3>
									</div>
								</a>
							</figure>
							<ul>
								<li><a data-toggle="modal" data-target="#fasilitas"> <span class="loc_open">Selengkapnya</span> </a></li>
								<li>
									<div class="score"> <a href="" target="_blank"> <span data-icon="&#xe01d;"> Lokasi</span></a></div>
								</li>
							</ul>
						</div>
					</div>

					<div class="item">
						<div class="strip">
							<figure>
								<img src="<?php echo base_url('');?>assets-web/img/STTNF/WifiArea.jpg" 
								data-src="<?php echo base_url('');?>assets-web/img/STTNF/WifiArea.jpg" class="owl-lazy"
									alt="STTNF" style="width: 100%; object-fit: cover; height: 190px;">
								<a data-toggle="modal" data-target="#fasilitas" class="strip_info">
									<!-- <small>Gunung</small> -->
									<div class="item_title">
										<h3>Wifi Area</h3>
									</div>
								</a>
							</figure>
							<ul>
								<li><a data-toggle="modal" data-target="#fasilitas"> <span class="loc_open">Selengkapnya</span> </a></li>
								<li>
									<div class="score"> <a href="" target="_blank"> <span data-icon="&#xe01d;"> Lokasi</span></a></div>
								</li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /carousel -->


<div class="modal" id="fasilitas" role="dialog">
        <div class="container-popup2">
            <form action="#" method="post" class="popup-form">

                         <div class="blog-page-content">

                         <button type="button" class="close" data-dismiss="modal" style="background-color: #008489; padding: 5px 10px 5px 10px;
                         color: white; border-radius: 4px; margin: 5px;">&times;</button>

                    <div class="blog-item" style="box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1); padding: 20px;border-radius: 5px; max-height: fit-content !important;">
						<h5 style="font-weight: bold;">Fasilitas STT-NF</h5>

                        <div class="col-12" style="margin-top: 20px;">
                        <div class="row">

                        <div class="col-lg-12 col-12">
                        <div class="blog-item-img">
                            <a href="" data-toggle="modal" data-target="#fotofasilitas">
                                <img src="
								
								<?php echo base_url('');?>assets-web/img/STTNF/auditorium.jpg
								
								" alt="STTNF" class="img-responsive" style ="width: 100%; height: 200px; object-fit: cover;">
                            </a>
                        </div>
                        </div>

                        </div>

                        <div class="col-lg-12 col-12" id="scroll">
						<h5>Auditorium STT-NF</h5>
                        <p style="font-family:Poppins, Helvetica, sans-serif !important;">Dalam melakukan implementasi pembelajaran di kampus Sekolah Tinggi Teknologi Terpadu Nurul Fikri (STT-NF), kini telah disiapkan ruang Auditorium yang berada dilantai 1 kampus B2 STT-NF. Ruangannya cukup respentetative, nyaman, dan bersih dengan kapasitas berjumlah kurang lebih 300 orang, juga dilengkapi dengan pendingin ruangan (AC), soundsystem, meja, kursi, karpet serta LCD/Screen projector sehingga mahasiswa/i yang ingin melakukan kegiatan perkuliahan, seminar, maupun penelitian yang ingin dipresentasikan ke Dosen dapat terealisasi dengan baik dan lancar.</p>
                        </div>

                        </div>
                        </div>
            </div>
            </div>
            </form>
        </div>
    </div>


<div class="modal" id="fotofasilitas" role="dialog">
        <div class="container-popup2">
            <form action="#" method="post" class="popup-form">

                         <div class="blog-page-content">

                         <button type="button" class="close" data-dismiss="modal" style="background-color: #008489; padding: 5px 10px 5px 10px;
                         color: white; border-radius: 4px; margin: 5px;">&times;</button>

                    <div class="blog-item" 
					style="box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1); padding: 20px;border-radius: 5px; min-height: auto !important; max-height: fit-content;">

                        <div class="col-12" style="margin-top: 20px;">
                        <div class="row">

                        <div class="col-lg-12 col-12">
                        <div class="blog-item-img">
                            <a href="#">
                                <img src="
								
								<?php echo base_url('');?>assets-web/img/STTNF/auditorium.jpg
								
								" alt="STTNF" class="img-responsive" style ="width: 100%; height: auto; object-fit: cover;">
                            </a>
                        </div>
                        </div>

                        </div>
                        </div>
            </div>
            </div>
            </form>
        </div>
    </div>

<div class="container">
<div class="row" style="padding-bottom: 20px;">
					<div class="col-md-6">
						<div class="main_title version_2" style="padding-top: 10px;">
							<span><em></em></span>
							<h2>Agenda Terbaru</h2>
							<p>Akses Informasi Agenda Kemahasiswaan STT-NF</p>
							<a href="#">Lainnya</a>
						</div>
						<div class="list_home">
							<ul>

								<li>
									<a data-toggle="modal" data-target="#agenda">
										<figure>
											<img src="<?php echo base_url('');?>assets-web/img/STTNF/agenda1.jpg" data-src="<?php echo base_url('');?>assets-web/img/STTNF/agenda1.jpeg"
												alt="STTNF" class="lazy">
										</figure>
										<em>LPPM STT Terpadu Nurul Fikri</em>
										<h3>Building a Dashboard for Network Monitoring</h3>
										<small>Rabu, 22 Desember 2021</small>
										<ul>
											<li> <span class="loc_open">Selengkapnya</span> </li>
										</ul>
									</a>
								</li>

								<li>
									<a data-toggle="modal" data-target="#agenda">
										<figure>
											<img src="<?php echo base_url('');?>assets-web/img/STTNF/agenda2.jpg" data-src="<?php echo base_url('');?>assets-web/img/STTNF/agenda2.jpeg"
												alt="STTNF" class="lazy">
										</figure>
										<em>DSC STT Terpadu Nurul Fikri</em>
										<h3>Talk Session : Gitogether</h3>
										<small>Minggu, 14 November 2021</small>
										<ul>
											<li> <span class="loc_open">Selengkapnya</span> </li>
										</ul>
									</a>
								</li>

							</ul>
						</div>
						
					</div>
					<div class="col-md-6">
						<div class="main_title version_2" style="padding-top: 10px;">
							<span><em></em></span>
							<h2>Pengumuman</h2>
							<p>Akses Informasi Pengumuman Seputar STT-NF</p>
							<a href="#">Lainnya</a>
						</div>

						<div class="list_home">
							<ul>

								<li>
									<a data-toggle="modal" data-target="#agenda">
										<figure>
											<img src="<?php echo base_url('');?>assets-web/img/STTNF/pengumuman2.jpeg" data-src="<?php echo base_url('');?>assets-web/img/STTNF/pengumuman2.jpeg"
												alt="STTNF" class="lazy">
										</figure>
										<em>Senada STT Terpadu Nurul Fikri</em>
										<h3>Donasi Pray For Semeru</h3>
										<small>08 - 15 Desember 2021</small>
										<ul>
											<li> <span class="loc_open">Selengkapnya</span> </li>
										</ul>
									</a>
								</li>

								<li>
									<a data-toggle="modal" data-target="#agenda">
										<figure>
											<img src="<?php echo base_url('');?>assets-web/img/STTNF/pengumuman.jpg" data-src="<?php echo base_url('');?>assets-web/img/STTNF/pengumuman.jpg"
												alt="STTNF" class="lazy">
										</figure>
										<em>Kemahasiswaan STT Terpadu Nurul Fikri</em>
										<h3>Program Beastudi Akan Segera Dibuka</h3>
										<small>Minggu, 18 Desember 2021</small>
										<ul>
											<li> <span class="loc_open">Selengkapnya</span> </li>
										</ul>
									</a>
								</li>

							</ul>
						</div>

					</div>
				</div>
</div>

			</div>
		</div>

		</div>
		</div>

		<!-- /container -->

		</main>
		<!-- /main -->
		<main>
		
	
<div class="container">
<div class="main_title center" style="padding-top: 20px; padding-bottom: 20px;">
						<span><em></em></span>
						<h2 style="font-size: 30px; font-weight: 600;">Berita & Artikel</h2>
					</div>
	
					<div class="row">
	
						<!-- /col -->
						<div class="col-md-4">
							<article class="blog">
								<figure>
									<a href="#" target="_blank">
									<img src="<?php echo base_url('');?>assets-web/img/STTNF/berita1.jpg" alt="STTNF" style="margin-bottom: auto; margin-top: 15%;">
										<div class="preview"><span>Selengkapnya</span></div>
									</a>
								</figure>
								<div class="post_info">
									<small>Kabar Kampus, Penelitian STTNF</small>
									<h2><a href="#" target="_blank">
									Dosen STT Terpadu Nurul Fikri mengikuti Konferensi ...</h2>
									<p>Bapak Dr. Lukman Rosyidi, S.T., M.M., M.T dengan Judul Publikasi “Design of Blockchain Implementation 
										fo Supervision of Vaccine Distribution : Indonesia Case” disusun oleh Lukman ...
									</p>
									<ul style="padding-top: 10px;">
										<li><a href="#"><i class="fab fa-whatsapp-square"></i></a> 
								<a href="#"><i class="fab fa-facebook-square"></i></a>
								<a href="#"><i class="fab fa-twitter-square"></i></a></li>
									</ul>
								</div>
							</article>
							<!-- /article -->
						</div>
						<!-- /col -->

							<!-- /col -->
							<div class="col-md-4">
							<article class="blog">
								<figure>
									<a href="#" target="_blank">
									<img src="<?php echo base_url('');?>assets-web/img/STTNF/berita2.png" alt="STTNF" style="margin-bottom: auto; margin-top: 15%;">
										<div class="preview"><span>Selengkapnya</span></div>
									</a>
								</figure>
								<div class="post_info">
									<small>Akademik, Kabar Kampus</small>
									<h2><a href="#" target="_blank">
									Prodi Baru untuk Maju” Program Studi Bisnis Digital ...</h2>
									<p>Banyak program studi baru dibuka mengikuti tren profesi kekinian. 
									Tujuannya supaya bisa menciptakan profesi baru sesuai perkembangan zaman dan memenuhi kebutuhan pasa ...
									</p>
									<ul style="padding-top: 10px;">
										<li><a href="#"><i class="fab fa-whatsapp-square"></i></a> 
								<a href="#"><i class="fab fa-facebook-square"></i></a>
								<a href="#"><i class="fab fa-twitter-square"></i></a></li>
									</ul>
								</div>
							</article>
							<!-- /article -->
						</div>
						<!-- /col -->

							<!-- /col -->
							<div class="col-md-4">
							<article class="blog">
								<figure>
									<a href="#" target="_blank">
									<img src="<?php echo base_url('');?>assets-web/img/STTNF/berita3.jpg" alt="STTNF" style="margin-bottom: auto; margin-top: 15%;">
										<div class="preview"><span>Selengkapnya</span></div>
									</a>
								</figure>
								<div class="post_info">
									<small>Kabar Kampus, Kabar Mahasiswa</small>
									<h2><a href="#" target="_blank">
									Orientasi Mahasiwa Akademik STT-NF 2021, diadakan ...</h2>
									<p>Ormik STT-NF 2021 ini memiliki perbedaan yang sangat drastis 
										dimana keseluruhan acaranya dilakukan secara daring dan ekslusif dengan tampilan ...
									</p>
									<ul style="padding-top: 10px;">
										<li><a href="#"><i class="fab fa-whatsapp-square"></i></a> 
								<a href="#"><i class="fab fa-facebook-square"></i></a>
								<a href="#"><i class="fab fa-twitter-square"></i></a></li>
									</ul>
								</div>
							</article>
							<!-- /article -->
						</div>
						<!-- /col -->

					</div>
					<p><a href="#" class="btn_1 btn_scroll" 
					style="margin-top: 0px; margin-bottom: 30px;">Lihat Selengkapnya <span
						data-icon="&#xe03c;"></span></a></p>
</div>

			</div>
				</div>
		</main>

<script>
$(document).ready(function(){
$(".preloader").delay(1500).fadeOut();
})
</script>

        <style>
			.kota{
				padding: 5px 15px;
				background-color: transparent;
				border-radius: 10px;
				font-weight: 600;
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
				.container-popup {
					margin-top: 50px !important;
				}

				.container-popup2 {
					margin-top: 50px !important;
				}

				.container-popupg {
					margin-top: 100px !important;
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
				.container-popup {
					width: 35%;
				}

				.container-popup2 {
					width: 65%;
				}

				.container-popupg {
					width: 65%;
				}
			}

			@media (max-width: 767px) {
				.container-popup {
					width: 90%;
				}

				.container-popup2 {
					width: 90%;
				}

				.tab button {
					width: 50%;
				}

				.container-popupg {
					width: 90%;
				}
			}

			.container-popup {
				position: relative;
				margin: 5% auto;
				margin-top: 10%;
				background-color: #fff;
				color: #333;
				border-radius: 8px;
			}

			.container-popup img {
				width: 100%
			}

			.container-popup2 {
				position: relative;
				margin: 5% auto;
				margin-top: 10%;
				background-color: #fff;
				color: #333;
				border-radius: 8px;
			}
			.container-popup2 img {
				width: 100%
			}

			.container-popupg {
				position: relative;
				margin: 5% auto;
				margin-top: 10%;
				background-color: #fff;
				color: #333;
				border-radius: 8px;
			}
			.container-popupg img {
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

			/*-------- 5. Service style ---------*/
			.service-wrap {
				background-color: #ffffff;
				margin-top: -100px;
				position: relative;
				z-index: 1;
				padding: 51px 0 25px;
			}

			.service-wrap.service-wrap-hm9 {
				margin-top: -70px;
			}

			@media only screen and (min-width: 992px) and (max-width: 1199px) {
				.service-wrap.service-wrap-hm9 {
					margin-top: -50px;
				}
			}

			@media only screen and (min-width: 768px) and (max-width: 991px) {
				.service-wrap.service-wrap-hm9 {
					margin-top: -30px;
				}
			}

			@media only screen and (max-width: 767px) {
				.service-wrap.service-wrap-hm9 {
					margin-top: 0px;
					border-bottom: 1px solid #e1e1e1;
				}
			}

			@media only screen and (min-width: 992px) and (max-width: 1199px) {
				.service-wrap {
					margin-top: -50px;
				}
			}

			@media only screen and (min-width: 768px) and (max-width: 991px) {
				.service-wrap {
					margin-top: -50px;
				}
			}

			@media only screen and (max-width: 767px) {
				.service-wrap {
					margin-top: -30px;
					padding: 41px 0 15px;
				}
			}

			.service-wrap-border {
				border: 1px solid #dfdfdf;
			}

			.service-wrap-padding {
				padding: 32px 0 3px;
			}

			.single-service-wrap {
				display: -webkit-box;
				display: -webkit-flex;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-pack: center;
				-webkit-justify-content: center;
				-ms-flex-pack: center;
				justify-content: left;
				-webkit-box-align: center;
				-webkit-align-items: center;
				-ms-flex-align: center;
				align-items: center;
			}

			.single-service-wrap .service-icon {
				margin-right: 23px;
				line-height: 1;
			}

			.single-service-wrap .service-icon i {
				font-size: 24px;
				color: #ff2f2f;
				display: inline-block;
				-webkit-transition: all .3s ease 0s;
				-o-transition: all .3s ease 0s;
				transition: all .3s ease 0s;
			}

			.single-service-wrap .service-icon.service-icon-black i {
				color: #000000;
			}

			.single-service-wrap .service-icon.service-icon-blue i {
				color: #0064e0;
			}

			.single-service-wrap .service-content h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0 0 8px;
				color: #222222;
			}

			.single-service-wrap .service-content span {
				display: block;
				line-height: 1;
				color: #999999;
			}

			.single-service-wrap:hover .service-icon i {
				-webkit-animation: 500ms ease-in-out 0s normal none 1 running flipOutY;
				animation: 500ms ease-in-out 0s normal none 1 running flipOutY;
			}

			.service-border-1 {
				position: relative;
			}

			.service-border-1:before {
				position: absolute;
				content: "";
				right: 0;
				top: -6%;
				width: 1px;
				height: 63px;
				background-color: #e0e0e0;
			}

			@media only screen and (min-width: 768px) and (max-width: 991px) {
				.service-border-1.service-border-1-none-md:before {
					display: none;
				}
			}

			@media only screen and (max-width: 767px) {
				.service-border-1:before {
					display: none;
				}

				.service-border-1.service-border-1-none-xs:before {
					display: none;
				}
			}

			.service-wrap-padding-2 {
				padding: 37px 35px 7px 35px;
			}

			.service-wrap-padding-3 {
				padding: 32px 0 3px;
			}

			@media only screen and (max-width: 767px) {
				.service-wrap-padding-3 {
					padding: 32px 20px 3px;
				}
			}

			.single-service-wrap-2 {
				display: -webkit-box;
				display: -webkit-flex;
				display: -ms-flexbox;
				display: flex;
				-webkit-flex-wrap: wrap;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				-webkit-box-align: center;
				-webkit-align-items: center;
				-ms-flex-align: center;
				align-items: center;
				-webkit-box-pack: center;
				-webkit-justify-content: center;
				-ms-flex-pack: center;
				justify-content: center;
			}

			@media only screen and (max-width: 767px) {
				.single-service-wrap-2 {
					-webkit-box-pack: start;
					-webkit-justify-content: flex-start;
					-ms-flex-pack: start;
					justify-content: flex-start;
				}
			}

			.single-service-wrap-2 .service-icon-2 {
				margin-right: 25px;
			}

			.single-service-wrap-2 .service-icon-2 i {
				font-size: 34px;
				color: #999999;
				-webkit-transition: all .3s ease 0s;
				-o-transition: all .3s ease 0s;
				transition: all .3s ease 0s;
			}

			.single-service-wrap-2 .service-content-2 h3 {
				font-size: 18px;
				font-weight: 600;
				margin: 0 0 5px;
			}

			.single-service-wrap-2 .service-content-2 p {
				margin: 0;
				letter-spacing: .25px;
			}

			.single-service-wrap-2.single-service-wrap-2-modify {
				-webkit-box-pack: start;
				-webkit-justify-content: flex-start;
				-ms-flex-pack: start;
				justify-content: flex-start;
			}

			.single-service-wrap-2.single-service-wrap-2-modify .service-icon-2 i {
				font-size: 30px;
			}

			.single-service-wrap-2.single-service-wrap-2-modify .service-content-2 h3 {
				font-size: 16px;
			}

			.single-service-wrap-2:hover .service-icon-2 i {
				color: #4dbdaf;
			}

			.single-service-wrap-2:hover .service-icon-2.icon-purple i {
				color: #6f50a7;
			}

			.single-service-wrap-2:hover .service-icon-2.icon-green-2 i {
				color: #6aae27;
			}

			.single-service-wrap-2:hover .service-icon-2.icon-red i {
				color: #ff2f2f;
			}

			@media only screen and (max-width: 767px) {
				.service-area.pt-45 {
					padding-top: 25px;
				}

				.service-area .pb-50 {
					padding-bottom: 30px;
				}
			}
		</style>
