<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>BADAN PENGAWAS PEMILIHAN UMUM</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href={{ asset('img/bawaslu.png') }} />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href={{ asset('css/app.css') }}>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:600,400' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="img/Informasi_Alur.png" id="logo_navbar" alt="Informasi_Alur.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#jns_pelanggaran">PELANGGARAN</a></li>
        <li><a href="#jadwal">JADWAL</a></li>
        <li><a href="#kontak">KONTAK</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--  Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>		
        </ol>

        <!-- deklarasi carousel -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" >
                <img src="img/motto.jpg" alt="bawaslu.png">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/kantor.jpg" alt="kantor.jpg">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/bwaslu_icon.jpg" alt="bwaslu_icon.jpg">
                <div class="carousel-caption">
                </div>
            </div>				
        </div>

        <!-- membuat panah next dan previous -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!--  Akhir Carousel -->


<!-- Container (Jenis Pelanggaran Section) -->
    <div id="jns_pelanggaran" class="container-fluid text-center">
        <h2>Pelanggaran</h2>
        <h4>Jenis-Jenis Pelanggaran Pemilu :</h4>
        <br>
        <div class="row slideanim">
        <div class="col-sm-6 col-md-3 ">
            <span class="bi bi bi-list-check logo-small"></span>
            <h4>Pelanggaran Administrasi</h4>
            <br>
            <a href="/pelanggaran_administrasi"><p>Baca Selengkapnya >></p></a>
        </div>
        <div class="col-sm-6 col-md-3 ">
            <span class="bi bi-shield-exclamation logo-small"></span>
            <h4>Pelanggaran Pidana</h4>
            <br>
            <a href="pelanggaran_pidana"><p>Baca Selengkapnya >></p></a>
        </div>
        <div class="col-sm-6 col-md-3 ">
            <span class="bi bi-hand-thumbs-down-fill logo-small"></span>
            <h4>Pelanggaran Kode Etik Penyelenggara Pemilu</h4>
            <a href="pelanggaran_etik"><p>Baca Selengkapnya >></p></a>
        </div>
        <div class="col-sm-6 col-md-3 ">
            <span class="bi-journal-bookmark-fill logo-small"></span>
            <h4>Pelanggaran Peraturan Perundang-Undangan Lainnya</h4>
            <a href="pelanggaran_peraturan"><p>Baca Selengkapnya >></p></a>
        </div>
        </div>
    </div>

<!-- Container (Jadwal Section) -->
    <div id="jadwal" class="container-fluid text-center">
        <header class="section-header">
            <h2>JADWAL</h2>
            <h4>Tahapan Pemilu 2024 di Kabupaten Ogan Ilir</h4>
        </header>
        <br>
        <div class="content">
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mb30">
                      <div class="table-responsive">
                          <div class="container">
                              <ul class="timeline">
                                  <li>
                                      <div class="timeline-badge">2022</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Verifikasi Administrasi Partai Politik</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 2 Agustus – 14 Oktober 2022 </p>
                                          </div>
                                          <h5>Proses Penanganan Pelanggaran dari tanggal 3 Agustus – 3 November 2022</h5>
                                          <div class="read-more">
                                              <div class="timeline-body">
                                                <p>Hasil rekap Posko Aduan Masyarakat Pada Tahapan Verifikasi Keanggotaan Masyarakat Partai politik Dalam Aplikasi <a href="https://sipol.kpu.go.id/" target="_blank" style="color: #f4511e;">SIPOL</a><br/></p>
                                                <p><b>Keterangan :</b><br>23 orang terdaftar menjadi anggota partai</p>
                                            </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="timeline-badge">2022</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Verifikasi Faktual Partai Politik</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 15 Oktober – 7 Desember 2022</p>
                                          </div><h4 style="background-color: green;">Tahapan Sedang Berlangsung</h4>
                                            <div class="timeline-body">
                                            <h5>Proses Penanganan Pelanggaran dari tanggal 16 Oktober – 27 Desember 2022</h5>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="timeline-inverted">
                                      <div class="timeline-badge">2023</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Pencalonan Anggota DPD</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 6 Desember 2022 – 25 November 2023</p>
                                          </div><h4 style="background-color: orange;">Tahapan belum terlaksana</h4>
                                            <div class="timeline-body">
                                                <h5>Proses Penanganan Pelanggaran dari tanggal 7 Desember 2022 – 12 Desember 2023</h5>
                                            </div>
                                          </div>
                                  </li>
                                  <li class="timeline-inverted">
                                      <div class="timeline-badge">2023</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Pencalonan Anggota DPRD Kabupaten/Kota</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 24 April – 25 November 2023 </p>
                                          </div><h4 style="background-color: orange;">Tahapan belum terlaksana</h4>
                                          <div class="timeline-body">
                                              <h5>Proses Penanganan Pelanggaran dari tanggal 25 April – 12 Desember 2023</h5>
                                          </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="timeline-badge">2024</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Kampanye</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 8 November 2023 – 10 Februari 2024</p>
                                          </div><h4 style="background-color: orange;">Tahapan belum terlaksana</h4>
                                          <div class="timeline-body">
                                              <h5>Proses Penanganan Pelanggaran dari tanggal 9 November 2023 – 29 Februari 2024</h5>
                                          </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="timeline-badge">2024</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Masa Tenang</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 11 Februari – 13 Februari 2024</p>
                                          </div><h4 style="background-color: orange;">Tahapan belum terlaksana</h4>
                                          <div class="timeline-body">
                                              <h5>Proses Penanganan Pelanggaran dari tanggal 12 Februari – 4 Maret 2024</h5>
                                          </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="timeline-badge">2024</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Pemungutan Suara</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 14 Februari 2024</p>
                                          </div><h4 style="background-color: orange;">Tahapan belum terlaksana</h4>
                                          <div class="timeline-body">
                                              <h5>Proses Penanganan Pelanggaran dari tanggal 15 Februari – 5 Maret 2024</h5>
                                          </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="timeline-badge">2024</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Perhitungan Suara</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 14 Februari – 15 Februari 2024</p>
                                          </div><h4 style="background-color: orange;">Tahapan belum terlaksana</h4>
                                          <div class="timeline-body">
                                              <h5>Proses Penanganan Pelanggaran dari tanggal 15 Februari – 5 Maret 2024</h5>
                                          </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="timeline-badge">2024</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Rekapitulasi Hasil Perhitungan Suara Tingkat Kabupaten</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 15 Februari – 20 Maret 2024</p>
                                          </div><h4 style="background-color: orange;">Tahapan belum terlaksana</h4>
                                          <div class="timeline-body">
                                              <h5>Proses Penanganan Pelanggaran dari tanggal 16 Februari – 9 April 2024</h5>
                                          </div>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="timeline-badge">2024</div>
                                      <div class="timeline-panel">
                                          <div class="timeline-heading">
                                              <h4 class="timeline-title">Pengawasan Penetapan Hasil Pemilu Tingkat Kabupten</h4>
                                                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small> 21 Maret – 23 Maret 2024</p>
                                          </div><h4 style="background-color: orange;">Tahapan belum terlaksana</h4>
                                          <div class="timeline-body">
                                              <h5>Proses Penanganan Pelanggaran dari tanggal 22 Maret – 11 April 2024</h5>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>

<!-- Container (Kontak Section) -->
<div id="kontak" class="container-fluid bg-grey">
    <h2 class="text-center">KONTAK</h2>
    </div>
    <br>
    <div class="col-md-3">
        <h2>Informasi</h2>
        <p><strong>Email:</strong><a href="mailto:Bawasluoganilir.SS.08@gmail.com" style="color: #f4511e;"><strong> Bawasluoganilir.SS.08@gmail.com</strong></a><br />
            <strong>Phone:</strong> 0711-580060<br />
            <strong>Website:</strong><a href="https://oganilir.bawaslu.go.id/" target="_blank" style="color: #f4511e;"><strong> www.oganilir.bawaslu.go.id</strong></a><br/>
            <strong>Address:</strong> Jl. Lintas Timur Km. 35 Komplek Perkantoran Eks. Distamben Indralaya Ogan Ilir</p>
    </div>
    <div class="col-md-2">
        <h2>Tautan</h2>
        <p>
            <a href="https://www.kpu.go.id/" target="_blank" class="tautan"><strong>KPU RI</strong></a><br/>
            <a href="https://www.bawaslu.go.id/" target="_blank" class="tautan"><strong>BAWASLU RI</a></strong><br/>
            <a href="https://dkpp.go.id/" target="_blank" class="tautan"><strong>DKP PEMILU RI</a></strong><br/>
            <a href="https://www.kemendagri.go.id/" target="_blank" class="tautan"><strong>KEMENDAGRI</a></strong><br/>
            <a href="https://polri.go.id/" target="_blank" class="tautan"><strong>POLRI</a></strong><br/>
        </p>
    </div>
    <div class="col-md-2">
        <h2>Media Social</h2>
        <ul class="list-inline social-link">
            <li>
                <a href="https://www.instagram.com/bawasluoganilir/"><i class="bi bi-instagram logo-social"></i></a> 
            </li>
            <li>
                <a href="https://web.facebook.com/bawaslu.oganilir"><i class="bi bi-facebook logo-social"></i></a> 
            </li>
        </ul>
    </div>
    <div class="col-md-5 form-group">
    <div class="containt-header">
        <h2>Kritik & Saran</h2>
    </div>
    <form action="{{ route('send.email') }}" method="POST"> 
        @csrf
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="row">
            <div class="col-sm-6 form-group">    
                <input class="form-control" id="name" name="name" placeholder="Masukkan Nama Anda" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Masukkan E-mail Anda" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Masukkan Saran & Kritik" rows="5"></textarea><br>
        <div class="row">
            <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Kirim</button>
            </div>
        </div>
    </form> 
    </div>
</div>
<footer class="container-fluid text-center">
    <div>
        <p id="footer"><strong>Copyright &copy; 2022 Badan Pengawas Pemilihan Umum</strong></p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var readMoreHTML = $(".read-more").html();
			var lessText = readMoreHTML.substr(0, 100);

			if(readMoreHTML.length > 10){
				$(".read-more").html(lessText).append("<a href='' class='read-more-link'> Read More</a>");
			} else{
				$("read-more1").html(readMoreHTML1);
			}

			$("body").on("click", ".read-more-link", function(event){
				event.preventDefault();
				$(this).parent(".read-more").html(readMoreHTML).append("<br><a href='' class='show-less-link'> Show Less</a>");
			});

			$("body").on("click", ".show-less-link", function(){
				event.preventDefault();
				$(this).parent(".read-more").html(readMoreHTML.substr(0, 100)).append("<a href='' class='read-more-link'> Read More</a>");
			});
            
		});
	</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>