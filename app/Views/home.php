<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container" style="background-color: #0d947b; width: 100%;">    
  <div class="col-md-10 col-md-offset-1">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>   
      </ol>
 
      <!-- deklarasi carousel -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/slides/Banner1.png" alt="www.malasngoding.com">
          <div class="carousel-caption">
            <h3 style="color: white;">PT. LOREM IPSUM</h3>
            <p>Authorized Money Change</p>
          </div>
        </div>
        <div class="item">
          <img src="img/slides/Banner2.png" alt="www.malasngoding.com">
          <div class="carousel-caption">
            <h3 style="color: white;">PT. LOREM IPSUM</h3>
            <p>Change your money to explore your life</p>
          </div>
        </div>
        <div class="item">
          <img src="img/slides/Banner3.png" alt="www.malasngoding.com">
          <div class="carousel-caption">
            <h3 style="color: white;">PT. LOREM IPSUM</h3>
            <p>Information Detail In Contact</p>
          </div>
        </div>        
      </div>
    </div>
  </div>
</div>

<div class="content_white">
  <h2 style="text-align: center;">Welcome to Our Company</h2>
  <h2>PT. LOREM IPSUM</h2>
    <p>Visi
    <ol style="width: 27em; margin: 0 auto;">
      <li style="text-align: justify;">Menjadi KUPVA (Kegiatan Usaha Penukaran Valuta Asing) di Tangerang Selatan.</li>
      <li style="text-align: justify;">Untuk mencapai visi tersebut PT. LOREM IPSUM memberikan layanan terbaik (kemudahan, kecepatan, dan keramahan) dengan harga kompetitif dan menarik kepada segmen pasar korporasi, komersial dan konsumen biasa.</li>
    </ol>
  </p>
  <br>
  <p>
    Misi
    <ol style="width: 27em; margin: 0 auto;">
      <li style="text-align: justify;">Mengembangkan PT. LOREM IPSUM sebagai KUPVA yang Tangguh dan modern dengan basis teknologi informasi.</li>
      <li style="text-align: justify;">Mengembangkan kompetensi SDM agar mampu bersaing untuk memberikan pelayanan prima kepada customer.</li>
      <li style="text-align: justify;">Mengembangkan & meningkatkan Kerjasama dengan berbagai intansi terkait.</li>
      <li style="text-align: justify;">Menerapkan budaya perusahaan secara baik melalui konsep governance dengan dasar efektif, efisiens, dan produktif.</li>
      <li style="text-align: justify;">Meningkatkan kesejahteraan karyawan.</li>
    </ol>
  </p>
</div>

<div class="container">
      <h2 style="text-align: center;">TABEL KURS TRANSAKSI BANK INDONESIA</h2>
      <?php
     function get_web_page( $url )
     {
        $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
        );
     
        $ch      = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $content = curl_exec( $ch );
        $err     = curl_errno( $ch );
        $errmsg  = curl_error( $ch );
        $header  = curl_getinfo( $ch );
        curl_close( $ch );
     
        return $content;
  }
    $code = get_web_page("http://kurs.dollar.web.id/kurs-transaksi-bank-indonesia.php");
    $pecah = explode("<table cellspacing='0'>", $code);
    $final_table = explode("</table>", $pecah[1]);
    $data = $final_table[0];
  ?>

  <style>
    table {
      width: 50em;
      border:solid 1px #af0069;
      margin: 0 auto;
      text-decoration-color: #ffffff;
      text-align: center;
    }
    th {background-color:#0d957f; color:#fff;
      text-align: center;
      text-decoration: none}
    tr, td {width:110px; height:38px;}
    tr:nth-child(odd) {background:#73ada2ad;}
    tr:nth-child(even) {background:#ffffff;}
  </style>

  <?php
    echo "<table>";
    echo $data;
    echo "</table>";
  ?>
  </div>


<section id="content">
  
  
  <div class="container">
    
       <div class="row">
              <div class="col-md-8">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>PT. LOREM IPSUM</span></h3>
                </div>
                <p>Duis sagittis elementum erat, sit amet posuere enim egestas a. Cras quis leo rhoncus, dignissim mauris sed, fringilla ante. Nulla at tempus arcu. Sed in consectetur sapien. Curabitur eget sagittis metus. Morbi non elit nec dui blandit luctus. Nullam egestas ipsum porttitor neque vehicula, ullamcorper fermentum lacus congue. Vivamus finibus sapien at quam ultricies dignissim. Vestibulum eu dolor ac augue scelerisque molestie.</p>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Kurs Lain</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i>
                      Smartdeal
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                      <a href="https://www.smartdeal.co.id/rates/dki_banten"><h3>Kurs Smartdeal</h3></a>
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i>
                      Kurs Bank BCA
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <a href="https://www.bca.co.id/id/informasi/kurs"><h3>Kurs Bank BCA</h3></a>
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> Kurs Bank BRI
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <a href="https://bri.co.id/kurs-detail"><h3>Kurs Bank BRI</h3></a>
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
            </div>
  </div>
  
  </section>

    <div class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container">
        <h2>Pengertian Menurut Beberapa Penelitian</h2> 
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tortor nisl, suscipit et congue sed, eleifend at elit. Nunc sed lectus id purus viverra tincidunt maximus quis erat. Nulla a suscipit erat, id rutrum ante. Duis non tortor scelerisque, vulputate mauris nec, rhoncus elit. Pellentesque nec vehicula sapien. Ut quis varius dui. Maecenas pharetra magna vitae sapien gravida imperdiet. Phasellus semper nisl id leo imperdiet, in accumsan dolor tempus. Integer non lectus ac odio venenatis pulvinar. Mauris mi quam, ornare eget pellentesque at, vulputate non velit. Nunc in lectus orci. Maecenas lobortis feugiat accumsan. Suspendisse viverra urna ut tortor accumsan imperdiet.</p>
                        <p>
                            <b>- Orang Gak Kenal (2008) -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p style="text-align: justify;">“Fusce sed lorem felis. Integer mollis nulla laoreet sapien efficitur, vitae porttitor lorem volutpat. Etiam pulvinar vel quam vitae viverra. Integer dolor magna, ultricies a maximus at, sodales nec sapien. Fusce viverra tortor ut felis sodales, sit amet maximus massa aliquet. Phasellus id lectus at mi varius vestibulum. Pellentesque sit amet pharetra orci. Cras hendrerit est eget metus luctus pellentesque. In interdum vehicula ante, vehicula mollis sapien condimentum vitae. Sed lacinia dui tellus, at suscipit velit porta tempor."</p>
                        <p>
                            <b>- Theodeores,dkk (2014)  -</b>
                        </p>
                    </div>
                    <div class="item active">
                        <p style="text-align: justify;">"Duis sagittis elementum erat, sit amet posuere enim egestas a. Cras quis leo rhoncus, dignissim mauris sed, fringilla ante. Nulla at tempus arcu. Sed in consectetur sapien. Curabitur eget sagittis metus. Morbi non elit nec dui blandit luctus. Nullam egestas ipsum porttitor neque vehicula, ullamcorper fermentum lacus congue. Vivamus finibus sapien at quam ultricies dignissim. Vestibulum eu dolor ac augue scelerisque molestie."</p>
                        <p>
                            <b>- Syahdan (2010)  -</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  

<?= $this->endSection() ?>