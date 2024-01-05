<!DOCTYPE html>
<html>
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="Joglosemar">
        <link rel="canonical" href="https://joglosemarbus.com/paket/cekpaket">
        
        <!-- title -->
                <title>Cek Paket</title>
        
        
                
                <!-- shortcut icon -->
        <link rel="shortcut icon" href="https://joglosemarbus.com/default/joglosemar/images/icon/favicon.png">
        <!-- bootstrap -->
        <link href="https://joglosemarbus.com/default/joglosemar/css/bootstrap.min.css" rel="stylesheet">
        <!-- flatpickr -->
        <link href="https://joglosemarbus.com/default/joglosemar/css/flatpickr.min.css" rel="stylesheet">
        <!-- slimselect -->
        <link href="https://joglosemarbus.com/default/joglosemar/css/slimselect.min.css" rel="stylesheet">
            
        <!-- font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- custom -->
        
        <link href="https://joglosemarbus.com/default/joglosemar/css/custom.css?ver=3.0" rel="stylesheet">
        <style>
            .ss-optgroup-label {
                color: #e44f00;
            }
            
            .ss-option {
                color: #746D6D;
            }

            .btn-copy {
                border: 1px solid grey;
                color: grey;
                font-size: 13px;
            }

            .card-outlet-jadwal{
                overflow: hidden;
                position: relative;
                animation: 0.75s showItemCard ease-in-out;
                border-radius: 8px;
            }

            @media (min-width: 991.98px) {
                .card-outlet-jadwal {
                    height: 200px !important;
                }
            }

            .btn-outlet-lokasi{
                border-radius: 50px;
                color:#fff !important;
                font-size:14px;
                text-transform: capitalize;
            }

            .justify-content {
                justify-content: center;
            }

            .fs-32 {
                font-size: 32px;
            }

            .fs-40 {
                font-size: 40px;
            }

            .border-circle{
                border-radius: 50px;
            }

            .border-outer {
                border: 2px solid #966B15;
            }
        </style>
        <style>
	.form-control-reservasi {
  		border: 2px solid #6F6F6F !important;
  		border-radius: 3px !important;
		padding-left: 10px !important
	}

	.modal-footer {
		justify-content: normal !important;
	}
</style>
    </head>
    <body >
        
			
		

        <!-- SCRIPTS -->
        <!-- jquery -->
        <script src="https://joglosemarbus.com/default/joglosemar/js/jquery-3.3.1.min.js"></script>
        <!-- bootstrap tooltips -->
        <script src="https://joglosemarbus.com/default/joglosemar/js/popper.min.js"></script>
        <!-- bootstrap -->
        <script src="https://joglosemarbus.com/default/joglosemar/js/bootstrap.min.js"></script>
        <!-- flatpickr -->
        <script src="https://joglosemarbus.com/default/joglosemar/js/flatpickr.js"></script>
        <script type="text/javascript" src="https://joglosemarbus.com/global/js/flatpickr.id.js"></script>
        <!-- slimselect -->
        <script src="https://joglosemarbus.com/default/joglosemar/js/slimselect.min.js"></script>
        <!-- filterinput -->
        <script src="https://joglosemarbus.com/default/joglosemar/js/filterinput.js"></script>
        <script src="https://joglosemarbus.com/global/js/moment.js"></script>
            
        <script type="text/javascript" src="https://joglosemarbus.com/global/js/date-id.js"></script>

        

                <div class=" sticky-top mr-0">
    <nav class="navbar navbar-expand-xl navbar-light bg-light" style="box-shadow: 0 0px 7px #505050cc;">	
    <a class="navbar-brand ml-lg-5" href="index.html"><img src="https://joglosemarbus.com/default/joglosemar/images/icon/logo.png" class="img-fluid logo-navbar"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav ml-auto font-bold-o">
        
                
                <li class="nav-item ">
            <a class="nav-link" href="login.html">Pesan Tiket</a>
        </li>
                <li class="nav-item ">
            <a class="nav-link" href="index.html">Tentang Kami</a>
        </li>
                <li class="nav-item ">
            <a class="nav-link" href="test.html">Lacak Paket</a>
        </li>
        
        <form class="form-inline my-2 my-lg-0">
                        <li class="nav-item">
                <a href="login.html" class="nav-link ddaccount mr-3">
                    <i class="fa fa-user-circle pr-2"></i>
                                        LOGIN
                                    </a>
            </li>
    
        </ul>
        </form>
    </div>
    </nav>
    
</div>


 <nav class="d-none d-lg-block" style="border-bottom: 2px solid #ebebeb;">
    <div class="container">
        <div class="d-flex">
                    </div>
    </div>
</nav>






        <div class="container-fluid px-0" style="min-height: 80vh">
            	<!-- cek booking -->
	<section>
		<div class="container">
			<div class="row justify-content-center align-items-center" style="min-height: 80vh">
				<div class="col-lg-5">
					<p class="text-center"><img src="https://joglosemarbus.com/default/joglosemar/images/icon/courier.png" class="img-fluid center mb-3"></p>
                    <p class="text-center fs-20 first-color">Cek Resi Paket Kamu</p>
					<form class="needs-validation" novalidate action="https://joglosemarbus.com/paket/detail" method="get">
						<div class="form-row">
							<div class="form-group col-12">
								<div class="card-form px-3 py-2-5">
									<p class="fs-11 text-muted mb-0">Nomor Resi</p>
									<input class="form-control" placeholder="Masukan Kode Disini" type="text" name="noresi" required="">
									<div class="invalid-feedback">
										Silahkan masukan nomor resi
									</div>
								</div>
							</div>
							<div class="form-group col-12 mb-0">
								<button type="submit" class="btn btn-radius first-bg-color text-white py-2 btn-block">Cek Paket <i class="far fa-check-square pl-2 text-yellow" aria-hidden="true"></i></button>
								<button type="button" class="btn btn-radius third-bg-color text-white py-2 btn-block" data-toggle="modal" data-target="#modalCekTarif">
									Cek Tarif <i class="fas fa-tags pl-2"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- ./cek booking -->


	<div class="modal fade" id="modalCekTarif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Cek Tarif Pengiriman Paket Anda</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row first-color font-weight-bold">
						<div class="col-6">
							
								<div class="form-group">
									<p class="mb-1 font-weight-bold"><i class="fas fa-arrow-alt-circle-up pr-2" aria-hidden="true"></i>Asal</p>
									<select name="" class="form-control-reservasi" id="asal" required="">
																														<option value="67">BANJARNEGARA RM AYAM GORENG BU MANSUR</option>
																				<option value="347">MANDIRAJA BANJARNEGARA</option>
																																								<option value="73">BOYOLALI AGEN TOKO NONIK</option>
																																								<option value="334">ALFAMIDI TAMAN SENTOSA CIKARANG</option>
																				<option value="316">HALTE CITYWALK LIPPO CIKARANG</option>
																				<option value="331">INDOMARET HYBRID AKSES TOL CIKARANG</option>
																				<option value="328">[DROP POINT] ALFAMIDI TAMAN SENTOSA CIKARANG</option>
																				<option value="325">[DROP POINT] INDOMARET HYBRID AKSES TOL CIKARANG</option>
																																								<option value="319">HALTE AO SHUTTLE BLOK M</option>
																				<option value="337">HALTE KOMDAK 1 JAKARTA</option>
																				<option value="322">[DROP POINT] HALTE KOMDAK 1</option>
																																								<option value="277">KLATEN AGEN BAKRIE KRAGUMAN</option>
																				<option value="310">KLATEN AGEN ECHA TIKET</option>
																				<option value="172">KLATEN AGEN NCS PONCOWATI </option>
																																								<option value="353">BOROBUDUR TAMAN PARKIR</option>
																				<option value="34">MAGELANG AGEN HOTEL CATUR</option>
																				<option value="31">MUNTILAN AGEN RAHAYU PERSADA</option>
																				<option value="82">[DROP POINT] MAGELANG ARMADA TOWN SQUARE</option>
																				<option value="307">[DROP POINT] MAGELANG BLABAK</option>
																				<option value="295">[DROP POINT] MAGELANG BLONDO</option>
																				<option value="256">[DROP POINT] MAGELANG KEBONPOLO</option>
																				<option value="259">[DROP POINT] MAGELANG MENOWO</option>
																				<option value="298">[DROP POINT] MAGELANG PALBAPANG</option>
																				<option value="79">[DROP POINT] MUNTILAN PMI </option>
																																								<option value="271">PURBALINGGA  AGEN TIKET SUJIATI</option>
																				<option value="70">PURBALINGGA AGEN HOTEL UTAMA</option>
																																								<option value="25">PURWOKERTO TOWN OFFICE</option>
																				<option value="118">SOKARAJA AGEN BU ROMLAH</option>
																				<option value="359">[PICK UP POINT] HALTE UNSOED PURWOKERTO</option>
																				<option value="365">[PICKUP POINT] INDOMARET SUNAN AMPEL PURWOKERTO</option>
																				<option value="362">[PICKUP POINT] MC DONALDS SUPARNO PURWOKERTO</option>
																																								<option value="88">SALATIGA TOKO RATNA TIRTA</option>
																				<option value="76">SALATIGA TURINDO</option>
																																								<option value="85">AMBARAWA AGEN CAFE SASAME</option>
																				<option value="43">BAWEN AGEN RM PUKA SARI</option>
																				<option value="178">NGALIYAN AGEN STUDIO 19 </option>
																				<option value="13">NGALIYAN PECEL MADIUN</option>
																				<option value="205">SEMARANG AGEN TOKO MAWAR  JAVA MALL</option>
																				<option value="202">SEMARANG AGEN WALLET STUDIO TENTARA PELAJAR</option>
																				<option value="247">SEMARANG RS KARIADI</option>
																				<option value="16">SEMARANG SPBU AKPOL</option>
																				<option value="10">SEMARANG SPBU SRONDOL</option>
																				<option value="253">SEMARANG UDINUS </option>
																				<option value="19">SEMARANG VETERAN TOWN OFFICE</option>
																				<option value="22">SEMARANG YARDIP PEMUDA</option>
																				<option value="232">SEMARANG [DROP POINT] TAMAN TIRTO AGUNG</option>
																				<option value="112">SEMARANG [PREMIUM LOUNGE] TIC PEMUDA</option>
																				<option value="91">UNGARAN 4U RESTO </option>
																				<option value="46">UNGARAN AGEN TIKI </option>
																				<option value="40">[DROP POINT] AMBARAWA SPBU NGAMPIN</option>
																				<option value="241">[DROP POINT] SEMARANG HOTEL PLAZA</option>
																				<option value="244">[DROP POINT] SEMARANG KSATRIAN</option>
																																								<option value="55">KARTASURA TOKO SEJAHTERA</option>
																				<option value="7">SOLO AGEN TURINDO SLAMET RIYADI</option>
																				<option value="4">SOLO KEPRABON TOWN OFFICE</option>
																																								<option value="313">TERMINAL RAWA MEKAR BSD</option>
																																								<option value="121">PARAKAN AGEN JNT KEMALANGAN</option>
																				<option value="61">PARAKAN AGEN TIKET BUS BU YAYUK (HUDA)</option>
																				<option value="58">TEMANGGUNG AGEN KUSUMA WISATA</option>
																																								<option value="64">WONOSOBO AGEN  MATAHARI GALAXO CARWASH</option>
																																								<option value="350">KRIDOSONO NASI KAPAU PRIMARAJA</option>
																				<option value="109">YOGYA AGEN  XT SQUARE</option>
																				<option value="145">YOGYA AGEN HENKY SALON</option>
																				<option value="142">YOGYA AGEN MITRA PERSADA </option>
																				<option value="106">YOGYA AGEN POS KOPMA UGM</option>
																				<option value="139">YOGYA AGEN PRIMA SR </option>
																				<option value="130">YOGYA AGEN RAJAWALI POS GODEAN </option>
																				<option value="28">YOGYA AGEN SETURAN</option>
																				<option value="127">YOGYA AGEN TIKET TNT</option>
																				<option value="133">YOGYA AGEN TOTAL NUSA</option>
																				<option value="136">YOGYA AGEN TURINDO </option>
																				<option value="1">YOGYAKARTA TOWN OFFICE</option>
																				<option value="265">[DROP POINT] YOGYA DENGGUNG</option>
																				<option value="274">[DROP POINT] YOGYA TEMPEL</option>
																				<option value="286">[PICKUP/DROP POINT] SPBU BANDARA ADI SUCIPTO</option>
																													</select>
								</div>
								<div class="form-group">
									<p class="mb-1 font-weight-bold"><i class="fas fa-arrow-alt-circle-down pr-2" aria-hidden="true"></i>Tujuan</p>
									<select name="" class="form-control-reservasi" id="tujuan" required="">
																														<option value="67">BANJARNEGARA RM AYAM GORENG BU MANSUR</option>
																				<option value="347">MANDIRAJA BANJARNEGARA</option>
																																								<option value="73">BOYOLALI AGEN TOKO NONIK</option>
																																								<option value="334">ALFAMIDI TAMAN SENTOSA CIKARANG</option>
																				<option value="316">HALTE CITYWALK LIPPO CIKARANG</option>
																				<option value="331">INDOMARET HYBRID AKSES TOL CIKARANG</option>
																				<option value="328">[DROP POINT] ALFAMIDI TAMAN SENTOSA CIKARANG</option>
																				<option value="325">[DROP POINT] INDOMARET HYBRID AKSES TOL CIKARANG</option>
																																								<option value="319">HALTE AO SHUTTLE BLOK M</option>
																				<option value="337">HALTE KOMDAK 1 JAKARTA</option>
																				<option value="322">[DROP POINT] HALTE KOMDAK 1</option>
																																								<option value="277">KLATEN AGEN BAKRIE KRAGUMAN</option>
																				<option value="310">KLATEN AGEN ECHA TIKET</option>
																				<option value="172">KLATEN AGEN NCS PONCOWATI </option>
																																								<option value="353">BOROBUDUR TAMAN PARKIR</option>
																				<option value="34">MAGELANG AGEN HOTEL CATUR</option>
																				<option value="31">MUNTILAN AGEN RAHAYU PERSADA</option>
																				<option value="82">[DROP POINT] MAGELANG ARMADA TOWN SQUARE</option>
																				<option value="307">[DROP POINT] MAGELANG BLABAK</option>
																				<option value="295">[DROP POINT] MAGELANG BLONDO</option>
																				<option value="256">[DROP POINT] MAGELANG KEBONPOLO</option>
																				<option value="259">[DROP POINT] MAGELANG MENOWO</option>
																				<option value="298">[DROP POINT] MAGELANG PALBAPANG</option>
																				<option value="79">[DROP POINT] MUNTILAN PMI </option>
																																								<option value="271">PURBALINGGA  AGEN TIKET SUJIATI</option>
																				<option value="70">PURBALINGGA AGEN HOTEL UTAMA</option>
																																								<option value="25">PURWOKERTO TOWN OFFICE</option>
																				<option value="118">SOKARAJA AGEN BU ROMLAH</option>
																				<option value="359">[PICK UP POINT] HALTE UNSOED PURWOKERTO</option>
																				<option value="365">[PICKUP POINT] INDOMARET SUNAN AMPEL PURWOKERTO</option>
																				<option value="362">[PICKUP POINT] MC DONALDS SUPARNO PURWOKERTO</option>
																																								<option value="88">SALATIGA TOKO RATNA TIRTA</option>
																				<option value="76">SALATIGA TURINDO</option>
																																								<option value="85">AMBARAWA AGEN CAFE SASAME</option>
																				<option value="43">BAWEN AGEN RM PUKA SARI</option>
																				<option value="178">NGALIYAN AGEN STUDIO 19 </option>
																				<option value="13">NGALIYAN PECEL MADIUN</option>
																				<option value="205">SEMARANG AGEN TOKO MAWAR  JAVA MALL</option>
																				<option value="202">SEMARANG AGEN WALLET STUDIO TENTARA PELAJAR</option>
																				<option value="247">SEMARANG RS KARIADI</option>
																				<option value="16">SEMARANG SPBU AKPOL</option>
																				<option value="10">SEMARANG SPBU SRONDOL</option>
																				<option value="253">SEMARANG UDINUS </option>
																				<option value="19">SEMARANG VETERAN TOWN OFFICE</option>
																				<option value="22">SEMARANG YARDIP PEMUDA</option>
																				<option value="232">SEMARANG [DROP POINT] TAMAN TIRTO AGUNG</option>
																				<option value="112">SEMARANG [PREMIUM LOUNGE] TIC PEMUDA</option>
																				<option value="91">UNGARAN 4U RESTO </option>
																				<option value="46">UNGARAN AGEN TIKI </option>
																				<option value="40">[DROP POINT] AMBARAWA SPBU NGAMPIN</option>
																				<option value="241">[DROP POINT] SEMARANG HOTEL PLAZA</option>
																				<option value="244">[DROP POINT] SEMARANG KSATRIAN</option>
																																								<option value="55">KARTASURA TOKO SEJAHTERA</option>
																				<option value="7">SOLO AGEN TURINDO SLAMET RIYADI</option>
																				<option value="4">SOLO KEPRABON TOWN OFFICE</option>
																																								<option value="313">TERMINAL RAWA MEKAR BSD</option>
																																								<option value="121">PARAKAN AGEN JNT KEMALANGAN</option>
																				<option value="61">PARAKAN AGEN TIKET BUS BU YAYUK (HUDA)</option>
																				<option value="58">TEMANGGUNG AGEN KUSUMA WISATA</option>
																																								<option value="64">WONOSOBO AGEN  MATAHARI GALAXO CARWASH</option>
																																								<option value="350">KRIDOSONO NASI KAPAU PRIMARAJA</option>
																				<option value="109">YOGYA AGEN  XT SQUARE</option>
																				<option value="145">YOGYA AGEN HENKY SALON</option>
																				<option value="142">YOGYA AGEN MITRA PERSADA </option>
																				<option value="106">YOGYA AGEN POS KOPMA UGM</option>
																				<option value="139">YOGYA AGEN PRIMA SR </option>
																				<option value="130">YOGYA AGEN RAJAWALI POS GODEAN </option>
																				<option value="28">YOGYA AGEN SETURAN</option>
																				<option value="127">YOGYA AGEN TIKET TNT</option>
																				<option value="133">YOGYA AGEN TOTAL NUSA</option>
																				<option value="136">YOGYA AGEN TURINDO </option>
																				<option value="1">YOGYAKARTA TOWN OFFICE</option>
																				<option value="265">[DROP POINT] YOGYA DENGGUNG</option>
																				<option value="274">[DROP POINT] YOGYA TEMPEL</option>
																				<option value="286">[PICKUP/DROP POINT] SPBU BANDARA ADI SUCIPTO</option>
																													</select>
								</div>
								<div class="form-group">
									<p class="mb-1 font-weight-bold"><i class="fas fa-box pr-2" aria-hidden="true"></i>Jenis Paket</p>
									<select name="" class="form-control-reservasi" id="jenispaket" required="">
																														<option value="BRG">Barang</option>
																				<option value="BRGC">Barang</option>
																				<option value="DOK">Dokumen</option>
																				<option value="VOL">Volume</option>
																													</select>
								</div>
							
						</div>
						<div class="col-6">
							<div class="form-group">
								<p class="mb-1">Panjang (CM)</p>
								<input type="" name="panjang" id="panjang" class="form-control form-control-reservasi font-weight-bold f0kom9" value="0" onkeypress="return isNumber(event)">
							</div>
							<div class="form-group">
								<p class="mb-1">Lebar (CM)</p>
								<input type="" name="lebar" id="lebar" class="form-control form-control-reservasi font-weight-bold f0kom9" value="0" onkeypress="return isNumber(event)">
							</div>
							<div class="form-group">
								<p class="mb-1">Tinggi (CM)</p>
								<input type="" name="tinggi" id="tinggi" class="form-control form-control-reservasi font-weight-bold f0kom9" value="0" onkeypress="return isNumber(event)">
							</div>
							<div class="form-group">
								<p class="mb-1">Berat (KG)</p>
								<input type="" name="berat" id="berat" class="form-control form-control-reservasi font-weight-bold f0kom9" value="0" onkeypress="return isNumber(event)">
							</div>
						</div>


						
					</div>
				</div>
				<div class="modal-footer">
					<div class="col-lg-6 mt-auto">
						<button class="btn first-bg-color text-white" onclick="cekHarga()">
							<span class="mr-2">Cek Tarif Paket</span>  
							<small>
								<img id="loader" width="20px" src="https://joglosemarbus.com/img/loader.gif" class="d-none mb-1">
							</small>
						</button>
					</div>
					<div class="col-lg-6 text-right first-color" id="price"></div>
				</div>
			</div>
		</div>
	</div>
        </div>

                <!-- Footer -->
<footer class="page-footer font-small bg-dark pt-4 position-relative">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left py-3">

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mt-md-0 mt-3 text-center">

        <!-- Content -->
                <img src="https://joglosemarbus.com/default/joglosemar/images/icon/logo.png" alt="Logo" class="logo-footer">

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-white">Call Center</h5>
                <ul class="list-group" style="list-style: none; ">
                                        <li class="py-2 text-muted">Telepon <br> (0274) 623 700 </li>
                                        <li class="py-2 text-muted">Pesan Whatsapp <br> <a class="text-muted" target="_blank" href="https://wa.me/62">0819 1435 3767</a> (Hanya Pesan)</li>
                </ul>

        </div>

        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-white">Informasi</h5>
            <ul class="list-group" style="list-style: none; ">
            <li class="py-2"><a href="index.html" class="text-muted">Tentang Kami</a></li>       
            <li class="py-2"><a href="https://wa.me/+6285173240443" class="text-muted">Kontak</a></li>
            <li class="py-2"><a href="index.html" class="text-muted">Pesan Tiket</a></li>
			<li class="py-2"><a href="index.html" class="text-muted">Lacak Paket</a></li>
            </ul>  

        </div>

        <!-- Grid column -->

        <div class="col-md-2 mb-md-0 mb-3 medsos">
            <h5 class="text-white pb-4">Sosial Media</h5>
                                                <a target="_blank"  href="#" class="text-white px-2"><img src="https://joglosemarbus.com/default/global/images/sosmed/facebook.png" class="img-fluid" alt='icon'></li></a>
                                                <a target="_blank"  href="#" class="text-white px-2"><img src="https://joglosemarbus.com/default/global/images/sosmed/instagram.png" class="img-fluid" alt='icon'></li></a>
                                                <a target="_blank"  href="#" class="text-white px-2"><img src="https://joglosemarbus.com/default/global/images/sosmed/tiktok.png" class="img-fluid" alt='icon'></li></a>
                                </div>
    </div>
    <!-- Grid row -->
    </div>
</footer>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h6 class="text-center font-bold-o py-4 text-muted">
                                        © 2023 Joglosemar. All Rights Reserved
                    <br>
                                    </h6>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->        
        <div class="modal fade" id="modal-load" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modal-load-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="spinner-border m-auto text-light" role="status" style="width: 60px; height:60px;">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>

<script>
    function showLoadPage(){
        $('#modal-load').modal({
            show: true
        })
    }
    
    function hideLoadPage(){
        $('#modal-load').modal('hide')
    }
</script>
        
        	<script src="https://joglosemarbus.com/global/js/numeral.js"></script>
	<script type="text/javascript" src="https://joglosemarbus.com/default/joglosemar/js/validationform.js"></script>
	<script>
		new SlimSelect({
			select: '#asal',
			placeholder:'Pilih Asal',
			searchText: 'Tidak Ada Asal !',
			searchPlaceholder: 'Cari',
		})

		new SlimSelect({
			select: '#tujuan',
			placeholder:'Pilih Tujuan',
			searchText: 'Tidak Ada Tujuan !',
			searchPlaceholder: 'Cari',
		})

		new SlimSelect({
			select: '#jenispaket',
			placeholder:'Pilih Jenis Paket',
			searchText: 'Tidak Ada Jenis Paket !',
			searchPlaceholder: 'Cari',
		})

		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			}
			return true;
		}

		function removeModal()
		{
			$('#modal-load').modal('hide');
			$('#modal-load').removeClass('show');
			$('#modal-load').css("display", "none");
			$('.modal-backdrop').remove();
			$(document.body).removeClass("modal-open");
		}

		$('#price').hide();

		function cekHarga() {
			let divprice = document.getElementById('price');
			$('#loader').removeClass('d-none')
			// request api
			let base_api = '/';

			let asal = $("#asal").val();
			let tujuan = $("#tujuan").val();
			let jenis = $('#jenispaket').val();
			let panjang = $('#panjang').val();
			let lebar = $('#lebar').val();
			let tinggi = $('#tinggi').val();
			let berat = $('#berat').val();

			let request = $.ajax({
				url: base_api+"paket/cektarif",
				method: "GET",
				data: { 
					"asal" : asal,
					"tujuan" : tujuan,
					"jenis" : jenis,
					"panjang": panjang,
					"lebar": lebar,
					"tinggi": tinggi,
					"berat": berat
				},
			});

			request.done(function(data){
				$('#price').show();

				if(data.status == "OK"){
					divprice.innerHTML = `<h3 class="font-weight-bold mb-0">Total Tarif : <span class="color-primary-text">Rp. ${numeral(data.result).format('0,0')}</span></h3>`;
				}else{
					divprice.innerHTML = `<h3 class="font-weight-bold mb-0">Harga Belum Terdaftar</h3>`;
				}
				$('#loader').addClass('d-none')
			});

			request.fail(function(jqXHR, textStatus){
				$('#price').show();

				divprice.innerHTML = `<h3 class="font-weight-bold mb-0">Harga Belum Terdaftar</h3>`;
				$('#loader').addClass('d-none')
			});
		}
	</script>
    </body>

</html>
