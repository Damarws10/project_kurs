<?= $this->extend('layout/page_kurs') ?>

<?= $this->section('content') ?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Kurs Lain</h2>
			</div>
		</div>
	</div>
</section>

<div class="container">
    
       <div class="row">
              <div class="col-md-8">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>PT. LOREM IPSUM</span></h3>
                </div>
                <p>Definsi nilai tukar mata uang (exchange rate) adalah pertukaran antara dua mata uang yang berbeda, yaitu perbandingan nilai atau harga mata uang antara kedua mata uang yang berbeda tersebut. Nilai tukar biasanya mengalami perubahan, perubahannya dapat berupa depresiasi maupun apresiasi.</p>
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
                      BCA
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                      <a href="#"><h3>Kurs BCA</h3></a>
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i>
                      BNI
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <a href="<?= base_url('bni') ?>"><h3>Kurs BNI</h3></a>
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> BRI
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <a href="<?= base_url('bri') ?>"><h3>Kurs BRI</h3></a>
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
            </div>
  </div>



  <div class="container">
      <h2 style="text-align: center;">TABEL KURS TRANSAKSI BCA</h2>
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
    $code = get_web_page("https://kurs.dollar.web.id/bank.php/?/@BCA");
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
      margin-bottom: 100px;
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

<?= $this->endSection() ?>