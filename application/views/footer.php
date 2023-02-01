<section class="features-area section-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title  style2 text-center">
                	<div class="section-top">
                		<h1><span>Q & A</span><b>Polling</b></h1><h4>Mari berpatisipasi dalam pengembangan website kami dengan menjawab beberapa pertanyaan dibawah ini</h4>
                	</div>
                </div>
                <h6>Apakah informasi yang tersaji pada website kami bermanfaat bagi anda?</h6>
                        <div id="poll">
                        <form>
                        <small>Ya </small><input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
                        <small>Tidak </small><input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                        </form>
                        </div>
                <h6>Apakah website kami berfungsi dengan baik?</h6>
                        <div id="poll2">
                        <form>
                        <small>Ya </small><input type="radio" name="vote2" value="0" onclick="getVote2(this.value)"><br>
                        <small>Tidak </small><input type="radio" name="vote2" value="1" onclick="getVote2(this.value)">
                        </form>
                        </div>
                <h6>Bagaimana tampilan website kami?</h6>
                        <div id="poll3">
                        <form>
                        <small>Bagus </small><input type="radio" name="vote3" value="0" onclick="getVote3(this.value)"><br>
                        <small>Jelek </small><input type="radio" name="vote3" value="1" onclick="getVote3(this.value)">
                        </form>
                        </div>

            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="footer" style="background-image:url('<?php echo base_url() ?>assets/img/map.png')">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Footer About -->       
                            <div class="single-widget footer-about widget"> 
                                <div class="logo">
                                    <div class="img-logo">
                                        <a class="logo" href="index.html">
                                            <img class="img-responsive" src="<?php echo base_url('assets/') ?>img/logo-BKAD1.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-widget-about-description">
                                    <p>Badan Keuangan dan Aset Daerah (BKAD) Provinsi Sulawesi Selatan</p>
                                </div>  
                                <div class="social">
                                    <!-- Social Icons -->
                                    <ul class="social-icons">
                                        <li><a class="facebook" href="https://www.facebook.com/bkadsulsel/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <!--<li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>-->
                                        <li><a class="instagram" href="https://www.instagram.com/bkadsulsel/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="youtube" href="https://www.youtube.com/channel/UC19mu8rgvpdBOFcDs8x0e9g/featured" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <div class="button"><a href="#tentang" class="bizwheel-btn">Tentang</a></div>
                            </div>      
                            <!--/ End Footer About -->      
                        </div>
                        
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Footer News -->
                            <div class="single-widget footer-news widget">  
                                <h3 class="widget-title">Alamat Kantor</h3>
                                <!-- Single News -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.776936606744!2d119.45083031494485!3d-5.139579653414146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefdce529cea83%3A0x6be78ecce435a83e!2sBKAD%20Prov.%20SulSel!5e0!3m2!1sid!2sid!4v1624842240056!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <!--/ End Single News -->
                            </div>          
                            <!--/ End Footer News -->           
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">  
                            <!-- Footer Contact -->     
                            <div class="single-widget footer_contact widget">   
                                <h3 class="widget-title">Kontak</h3>
                                <p><?php echo $SETTINGS->address ?></p>
                                <ul class="address-widget-list">
                                    <li class="footer-mobile-number"><i class="fa fa-phone-square"></i><?php echo $SETTINGS->fax ?> </li>
                                    <li class="footer-mobile-number"><i class="fa fa-phone"></i><?php echo $SETTINGS->phone ?></li>
                                    <li class="footer-mobile-number"><i class="fa fa-envelope"></i><?php echo $SETTINGS->email ?></li>
                                </ul>
                            </div>      
                            <!--/ End Footer Contact -->                        
                        </div>
                        <sdiv class="col-lg-3 col-md-6 col-12">
                            <!-- Footer Links -->       
                            <div class="single-widget f-link widget">
                                <h3 class="widget-title">Pengunjung</h3>
                                <p>
                                        <?php
                                    // Statistik user
                                    $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
                                    $tanggal = date("Y-m-d"); // Mendapatkan tanggal sekarang
                                    $waktu   = time(); // 

                                    // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
                                    $s = $this->db->query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
                                    // Kalau belum ada, simpan data user tersebut ke database
                                    if($s->num_rows() == 0){
                                        $this->db->query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
                                    } 
                                    else{
                                        $this->db->query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
                                    }

                                    $pengunjung       = $this->db->query("SELECT ip,hits,tanggal,online FROM statistik WHERE tanggal='$tanggal' GROUP BY ip,hits,tanggal,online")->num_rows();
                                    $totalpengunjung  = $this->db->query("SELECT COUNT(hits) as totpeng FROM statistik")->row('totpeng'); 
                                    $hits             = $this->db->query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal")->row_array(); 
                                    $totalhits        = $this->db->query("SELECT SUM(hits) as tothits FROM statistik")->row('tothits'); 
                                    $tothitsgbr       = $this->db->query("SELECT SUM(hits) as gbr FROM statistik")->row('gbr'); 
                                    $bataswaktu       = time() - 300;
                                    $pengunjungonline = $this->db->query("SELECT * FROM statistik WHERE online > '$bataswaktu'")->num_rows();

                                    $path = "counter/";
                                    $ext = ".png";

                                    $tothitsgbr = sprintf("%06d", $tothitsgbr);
                                    for ( $i = 0; $i <= 9; $i++ ){
                                        $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
                                    }

                                    echo "
                                        <span class='pengunjung'><img src=".base_url()."uploads/counter/online.png> Pengunjung Online : $pengunjungonline <br />
                                        <span class='pengunjung'><img src=".base_url()."uploads/counter/hariini.png> Pengunjung Hari Ini : $hits[hitstoday] <br />
                                        <span class='pengunjung'><img src=".base_url()."uploads/counter/total.png> Total pengunjung    : $totalpengunjung <br />
                                        <span class='pengunjung'><img src=".base_url()."uploads/counter/hariini.png> Hits hari ini    : $hits[hitstoday] <br />
                                        <span class='pengunjung'><img src=".base_url()."uploads/counter/online.png> Total Hits       : $totalhits <br />";
                                    ?>
                                    </p>
                            </div>          
                            <!--/ End Footer Links -->          
                        </sdiv>
                    </div>
                </div>
            </div>

<!-- Copyright -->
<div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-content">
                                <!-- Copyright Text -->
                                <p>&copy; 2020 <a href="#">BKAD</a> | Badan Keuangan dan Aset Daerah <a target="_blank" href="#">Prov. Sulawesi Selatan</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Copyright -->
        </footer>
        <!--/  End Footer -->
        
        </div>
		<!-- End Boxed Layout -->
		
		<!-- Jquery JS -->
		<script src="<?php echo base_url('assets/') ?>js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="<?php echo base_url('assets/') ?>js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="<?php echo base_url('assets/') ?>js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="<?php echo base_url('assets/') ?>js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script src="<?php echo base_url('assets/') ?>js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script src="<?php echo base_url('assets/') ?>js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="<?php echo base_url('assets/') ?>js/slicknav.min.js"></script>
		<!-- Way Points JS -->
		<script src="<?php echo base_url('assets/') ?>js/waypoints.min.js"></script>
		<!-- CounterUp JS -->
		<script src="<?php echo base_url('assets/') ?>js/jquery.counterup.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="<?php echo base_url('assets/') ?>js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script src="<?php echo base_url('assets/') ?>js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script src="<?php echo base_url('assets/') ?>js/easing.js"></script>
		<!-- Theme Option JS -->
		<script src="<?php echo base_url('assets/') ?>js/theme-option.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="<?php echo base_url('assets/') ?>js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script src="<?php echo base_url('assets/') ?>js/active.js"></script>
	</body>

</html>
<script>
    $(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
  
  $('#frame-floatb .close').click(function(){
            $('#frame-floatb').hide();
        });
  
  
});

function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","<?=base_url()?>polling?vote="+int,true);
  xmlhttp.send();
}

function getVote2(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll2").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","<?=base_url()?>polling/p2?vote2="+int,true);
  xmlhttp.send();
}

function getVote3(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll3").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","<?=base_url()?>polling/p3?vote3="+int,true);
  xmlhttp.send();
}

</script>
