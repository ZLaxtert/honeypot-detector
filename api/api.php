<?php
if(isset($_POST['submit'])){
    $chain = $_POST['chain'];
    $token = $_POST['token'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.banditcoding.xyz/honeypot/?chain=$chain&address=$token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $res = curl_exec($ch);
    $json = json_decode($res, TRUE);

    $chain = strtoupper($chain);

    $symbol   = $json['data']['symbol'];

    $nameC    = $json['data']['name'];
    $decimal  = $json['data']['decimals'];
    $webC     = $json['data']['officialwebsite'];
    $icon     = $json['data']['icon'];
        $ex = explode("?",$icon);
        $link = $ex[0];
    $pot      = $json['data']['info']['honeypot'];
    $err      = $json['data']['info']['error'];
    $maxtx    = $json['data']['info']['MaxTaxAmount'];
    $maxtxBNB = $json['data']['info']['MaxTxAmountBNB'];
    $buytx    = $json['data']['info']['BuyTax'];
    $selltx   = $json['data']['info']['SellTax'];
    $buygas   = $json['data']['info']['BuyGas'];
    $sellgas  = $json['data']['info']['SellGas'];
    

    if(strpos($res, '"msg":"Token not compatible with Chain!"')){

    	echo '<script>alert("Token not compatible with Chain!");window.location.href = "../";</script>';
    }
    if(strpos($res, '"honeypot":"No"')){
        $cek = '✅ This contract address is not a honeypot ✅ ';
        
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
								  <th>Icon</th>
								  <th>Name</th>
								  <th>Symbol</th>
								  <th>Decimals</th>
								  <th>Website</th>
                                  <th>Chain</th>
                                  <th>Message</th>
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
								<th><img src="'.$link.'" height="50px" widht="50px" /></th>
								<th>'.$nameC.'</th>
								<th>'.$symbol.'</th>
								<th>'.$decimal.'</th>
								<th>'.$webC.'</th>
                                <th>'.$chain.'</th>
                                <th>'.$cek.'</th>
								<th>NO</th>
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
    }elseif(strpos($res, '"honeypot":"Yes"')){
         $cek = '❌ Yes, this is a honeypot! ❌ ';
                        
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
								  <th>Icon</th>
								  <th>Name</th>
								  <th>Symbol</th>
								  <th>Decimals</th>
								  <th>Website</th>
                                  <th>Chain</th>
                                  <th>Message</th>
                                  <th>Error</th>
								  <th>Honeypot</th>
								  <th>Contract Address</th>
								  
								</tr>
							  </thead>
							  <tbody>
								<tr class="alert" role="alert">
								<th><img src="'.$link.'" height="50px" widht="50px" /></th>
								<th>'.$nameC.'</th>
								<th>'.$symbol.'</th>
								<th>'.$decimal.'</th>
								<th>'.$webC.'</th>
                                <th>'.$chain.'</th>
                                <th>'.$cek.'</th>
                                <th>'.$err.'</th>
								<th>YES</th>
								<td>'.$token.'</td>
								
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
								  <th>Message</th>
								  
								</tr>
							  </thead>
							  <tbody>
								<tr class="alert" role="alert">
								<th>Not Found</th>
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
    }
    

    

	
}else{
	echo '<script>alert("Failed!");window.location.href = "../";</script>';
}

?>
