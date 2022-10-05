  <!DOCTYPE html>
  <html>
  <head>
     <meta charset="utf-8">
     <title>Grab Konten Website Lain Dengan CURL</title>
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
     <style>
       body,*{font-family: 'Roboto', sans-serif;}
     </style>
 </head>
 <body>
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
		table {text-align:center; border:solid 1px #af0069;}
		th {background-color:#c70039; color:#fff;}
		tr, td {width:110px; height:38px;}
		tr:nth-child(odd) {background:#e6b566;}
		tr:nth-child(even) {background:#e8e9a1;}
	</style>
	<?php
		echo "<table>";
		echo $data;
		echo "</table>";
	?>
	</body>
</html>
