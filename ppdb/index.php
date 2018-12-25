<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PPDB Online - SDN 12 Sragen</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="./" style="color:red">
				<marquee><strong> SD NEGERI 12 SRAGEN</strong></marquee></a> 
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1 active"><a href="./"><span class="fa fa-home"></span><strong> Home</strong></a></li>
					<li class="c2"><a href="pengumuman.php"><span class="fa fa-users"></span><strong> Pengumuman</strong></a></li>
					<li class="c3"><a href="pendaftaran.php"><span class="fa fa-pencil"></span><strong> Pendaftaran</strong></a></li>
					<li class="c7"><a href="admin" target="_blank"><span class="fa fa-lock"></span><strong> Login</strong></a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
             <div class="heading-text">							
							<h1 class="animated flipInY delay1">PPDB Online - SDN 12 SRAGEN</h1> <br/>
							<p>Cetak Generasi Muda Berbudi Perkerti dan Berprestasi</p>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                        </div> 
                        <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->

  <div class="container">
    <div class="row">
			
					<div class="col-md-12">
						<div class="grey-box-icon b4">  
							<h3><strong>SELAMAT DATANG</strong> </h3>
							<p>Daftarkan Segera Anak Anda dan Cetak Generasi Muda Untuk Berkarya</p>
							<br>
							<h4><strong>Alur Pendaftaran :</strong></h4>
							<p>1. Pendaftaran dapat dilakukan baik secara Online dan Offline</p>
							<p>2. Untuk pendaftaran Online gunakan Link Pengisin Form dibawah ini dan mengganti biaya cetak setelah calon siswa dinyatakan LULUS</p>
							<p>3. Untuk pendafatarn Offline silakan download formulir dan melakukan
							pengumpulan formulir secara langsung ke pihak sekolah.</p>
							<br>
     						<p><a href="./pendaftaran.php"><em>Daftar Online Disini →</em></a></p>
     						<?php
	     						$res = mysqli_query($konek,"select * from download");
	     						$row = mysqli_fetch_array($res);
							?>
     						<p><a href="<?php echo $row["path"]; ?>" target="_blank"><em>Download Formulir Pendaftaran Offline</em></a></p>


     						<br>
     						*) Silakan Menghubungi Kontak Sekolah apabila ada pertanyaan terkait Pendaftaran
						</div><!--grey box -->
					</div><!--/span3-->
				</div>
    </div>
      <section class="news-box top-margin">
     
    </section>
   
  
	
     
      
    	 
    <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">

    <div class="col-md-12 col-sm-7"> 
                <div class="footerwidget"> 
                     <strong><h3>Kontak Sekolah</h3> </strong>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Jl. dr. Soetomo No.4 Sragen<br>
            <i class="fa fa-phone"></i> +81262612222 <br>
             <i class="fa fa-envelope-o"></i> sdn12@gmail.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

				

					<div class="col-md-12 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2018. Rouse House Project
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    
</body>
</html>
