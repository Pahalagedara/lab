<!DOCTYPE html>
<html>
<head>
	<title>EUROFLORA</title>
	<link rel = "icon" href ="images/logo-small.png" type = "image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="styleSheet.css" rel="styleSheet" type="text/css">
	<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster+Two" /> -->
</head>
<body>
	<div class="nav">
		<div class="navLog">
			<img src="images/logo-small.png">
		</div>
		<ul class="navLink">
			<li><a href="#"><i class="fa fa-fw fa-home"></i> Home</a></li>
			<li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact us</a></li>
			<li><a href="#"><i class="fa fa-th-large"></i> The florist</a></li>
			<li><a href="#"><i class="fa fa-fw fa-camera"></i> Gallery</a></li>
			<li><a href="#"><i class="fa fa-fw fa-cogs"></i> How to order</a></li>
			<li><a href="#"><i class="fa fa-fw fa-phone"></i> Order by phone</a></li>
			<li><a href="#"><i class="fa fa-fw fa-comment"></i> Chat</a></li>
		</ul>
	</div>
	<div class="page">
		<div class="row">
			<h3><span style="font-size:150%; font-style:'Lobster Two'; color:rgb(177,101,39);">Malshan Flora</span> your online Florist to deliver Flowers in Kotikawatta</h3>
		</div>
		<br>

		<div class="row" style="flex-wrap: wrap;">
			<div class="container">
				<img src="images/euroflora-florist-flower-bouquet.jpg">
				<div class="bottom-right">
					<h4>SEPTEMBER OFFERS: TODAY -15%</h4>
					<hr>
					<h5>Delivery service included</h5>
				</div>
			</div>
			<div class="container">
				<img src="images/Cheyanne.jpg">
				<div class="bottom">
					<h5>Bright gerberas or daisies, alstroemerias and mixed flowers</h5>
				</div>
			</div>
		</div>
		<br>
		<p>We offer a same day Flowers and Plants delivery service in Kotikawatta even in a few hours.
            From our online Flower shop can order nice Bouquets and Flowers Gifts quickly and easily.
            Choose your Bouquet from 68 € delivery included. Payments accepted: Credit Card and Paypal.</p>
        <br>
        <div class="itemSet">
			<?php 
			include "db.php";
			$sql="SELECT * FROM images";
			$stmt=$conn->prepare($sql);
			$stmt->execute();
			$count=$stmt->rowCount();
			$result=$stmt->fetchAll();
			
			if($count>0){
				foreach($result as $row){
					
					echo'<a href="thesmile.php">
							<div class="item">
							 <img src="data:'.$row['contenttype'].';base64,'.base64_encode( $row['imagedata'] ).'"/>;
				
								<div class="discription">
									<h4>'.$row['name'].'</h4>
									<p>Roses and mixed flowers</p>
								</div>
								<div class="prePrice">'.$row['name'].' &euro;</div>
								<div class="foot">
										<i class="fa fa-info-circle" style="font-size: 30px; color:rgb(80,60,39);"></i>
										<div class="priceTag" >78.90 &euro;</div>
								</div>
							</div>
						</a>';
				}
			}
			?>
		</div>
			
	</div>

</body>
</html>