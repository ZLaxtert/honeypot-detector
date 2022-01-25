<?php
if(isset($_POST['submit'])){
    $chain = $_POST['chain'];
    $token = $_POST['token'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.banditcoding.xyz/honeypot/?chain=$chain&token=$token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $res = curl_exec($ch);
    $json = json_decode($res, TRUE);

    if(strpos($res, '"msg":"Token not compatible with Chain!"')){
    	echo '<script>alert("Token not compatible with Chain!");window.location.href = "../";</script>';
    }

    $chain = strtoupper($chain);
    $pot      = $json['data']['honeypot'];
    $err      = $json['data']['error'];
    $maxtx    = $json['data']['MaxTaxAmount'];
    $maxtxBNB = $json['data']['MaxTxAmountBNB'];
    $buytx    = $json['data']['BuyTax'];
    $selltx   = $json['data']['SellTax'];
    $buygas   = $json['data']['BuyGas'];
    $sellgas  = $json['data']['SellGas'];
    if(strpos($res, '"honeypot":"No"')){
        $cek = "✅";
    }else{
        $cek = "❌";
    }

	echo '<!doctype html>
	<html lang="en">
	  <head>
		  <title>Check | '.$token.'</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">
		</head>
		<body>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">..:: INFO ::..</h2>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="table-wrap">
							<table class="table">
							  <thead class="thead-dark">
								<tr>
								  <th>Honeypot</th>
								  <th>Contract Address</th>
								  <th>MaxTaxAmount</th>
								  <th>MaxTaxBNB</th>
								  <th>BuyTax</th>
								  <th>SellTax</th>
								  <th>BuyGas</th>
								  <th>SellGas</th>
								</tr>
							  </thead>
							  <tbody>
								<tr class="alert" role="alert">
								<th scope="row">'.$pot.' '.$cek.'</th>
								<td>'.$token.'</td>
								<td>'.$maxtx.'</td>
								<td>'.$maxtxBNB.'</td>
								<td>'.$buytx.'</td>
								<td>'.$selltx.'</td>
								<td>'.$buygas.'</td>
								<td>'.$sellgas.'</td>
								</tr>
							  </tbody>
							</table>
						</div>
						<br />
						<center>
						<a href="../">
						<button class="btn btn-success">Back</button>
						</a>
						</center>
						<br />
					</div>
				</div>
			</div>
		</section>
	
		<script src="../js/jquery.min.js"></script>
	  <script src="../js/popper.js"></script>
	  <script src="../js/bootstrap.min.js"></script>
	  <script src="../js/main2.js"></script>
	
		</body>
	</html>
	
	';
}else{
	echo '<script>alert("Failed!");window.location.href = "../";</script>';
}

?>
