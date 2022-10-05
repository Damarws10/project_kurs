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
    $code = get_web_page("https://kurs.dollar.web.id/kurs-jual-bca-mandiri-bni.php");
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