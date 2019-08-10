<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{
		font-family: Arial;
		font-size: 17px;
	}

		input {
    width: 15%;
    padding: 8px 8px;
    margin: auto;
    text-align: center;
    border:none;
    border-bottom: 1px solid #c6c6c6;
}
div.radio-j {
	position: absolute;
    right: 5px;
    top: 168px;
    width: 50%;

}
div.radio-i {
	 position: absolute;
    right: -43px;
    top: 48px;
    width: 40%;
}
input[type="number"]:focus {
	outline: none;
	border-bottom: 1px solid #cf1e2a;
}
input[type="submit"] {
    position: absolute;
    bottom: 70px;;
    left: 8%;
    margin: 0;
}
div
{
	width: 100%;
}
input[type=submit]
{
	 background-color: #fff; /* Green */
    border: 1px solid #c6c6c6;
    border-radius: 2px;
    color:#cf1e2a;
    width: 10%;
    padding: 5px 10px;
    width: auto;
    font-weight: 600;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0;
    cursor: pointer;
}

	</style>
</head>
<body>
	<div style="">
<form method="post" action="form.php">
	Years of Operation <span style="margin-left: 117px;"></span>
	<span style="margin-left: 33px;"><input style="position: absolute; top: -10px;right: 22px" type="number"  name="vops" style=""></span><br><br>
	Product in Market? <div class="radio-i"><span></span>
	<span><input type="radio" name="pim" value="Yes"><span>Yes</span></span>
	<span><input type="radio" name="pim" value="No"><span>No</span></span></div><br><br>
	Last Quarter Revenue (in USD)<span style="margin-left: 25px;"></span>
	<span style="margin-left: 30px;"><input style="position:absolute;top:70px;right: 22px" type="number" name="revs"></span><br><br>
	Total Capital Raised<span style="margin-left: 118px;"></span>
	<span style="margin-left: 30px;"><input style="position: absolute;top: 110px;right: 22px;" type="number" name="capr"></span><br><br>
	Cash Flow State<div class="radio-j"><span></span>
	<span><input type="radio" name="cfa" value="Positive"><span>Positive</span ></span>
	<span><input type="radio" name="cfa" value="Negative"><span>Negative</span></span></div>
	<br>
	<input type="submit" name="submit"></span><br>

	<!-- Investment Stage<span style="margin-left: 129px;">|</span><br><br>
	Approx. Investment Potential<span style="margin-left: 44px;">|</span> -->
	

</form><br>
<?php
		if (isset($_POST["submit"]))
		 {
			$vops = $_POST['vops'];
			$pim = $_POST['pim'];
			
			$revs = $_POST['revs'];
			
			$capr = $_POST['capr'];
			
			$cfa = $_POST['cfa'];

			
			if($vops<1)
			{

				echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Seed Stage ";

			}			
			else if ( ($vops >=1) && ('No'==$pim) ) 
			{
				
				
					echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span>Seed Stage";

				}	
				elseif (($vops>=1) && ('Yes' == $pim) ) {
					
					if (($capr<=350000) && ($revs<=500000) && ('Positive' == $cfa)) {
						
						echo "Investment Stage   <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Seed Stage <br><br>";
						echo "Approx. Investment Potential<span>&nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp</span>USD 500000 <br>";
					}
					elseif (($capr<=350000) && ($revs<=500000) && ('Negative' == $cfa)) {
						
						echo "Investment Stage   <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Seed Stage <br><br>";
						echo "Approx. Investment Potential<span>&nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp</span>USD 350000 <br>";	
					}

					elseif (($capr<=600000) && ($revs<=750000)&& ('Positive' == $cfa)) {
						$res1=500000+($revs/2);
						echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Early Stage <br><br>";
						echo "Approx. Investment Potential <span>&nbsp &nbsp  &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp</span> USD".$res1."<br>";
					}
					elseif (($capr<=600000) && ($revs<=750000)&& ('Negative' == $cfa)) {
						$res1=500000+($revs/4);
						echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Early Stage <br><br>";
						echo "Approx. Investment Potential <span>&nbsp &nbsp  &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp</span> USD".$res1."<br>";
					}


					elseif (($capr <=900000) && ($revs <=1000000)&& ('Positive' == $cfa)) {

						$res2=$capr*3;
						echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Growth Stage <br><br>";
						echo "Approx. Investment Potential <span>&nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> USD".$res2."<br>";
					}
					elseif (($capr <=900000) && ($revs <=1000000)&& ('Negative' == $cfa)) {

						$res2=$capr*2;
						echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Growth Stage <br><br>";
						echo "Approx. Investment Potential <span>&nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> USD".$res2."<br>";
					
					}

					elseif (($capr <=2500000) && ($revs <= 2500000) && ($vops>=2) &&($vops<=6)&& ('Positive' == $cfa)) {
						
						$res3=($capr*3)+($revs/2);
						echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Establishment Stage <br><br>";
						echo "Approx. Investment Potential<span>&nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp</span>USD".$res3."<br>";
					}
					elseif (($capr <=2500000) && ($revs <= 2500000) && ($vops>=2) &&($vops<=6)&& ('Negative' == $cfa)) {
						
						$res3=($capr*3)+($revs/4);
						echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Establishment Stage <br><br>";
						echo "Approx. Investment Potential<span>&nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp</span>USD".$res3."<br>";
					
					}
					elseif ( ($capr<=10000000) && ($revs<=10000000) && ($vops>=6) ) {
						
						echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Late Stage <br><br>";
						echo "Approx. Investment Potential <span>&nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp</span> Strategic <br><br>";
					
					}
					elseif ( ($capr>=10000000) && ($revs>=10000000) && ($vops>=6) ) {
						
						echo "Investment Stage <span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp</span> Maturity and Possible Stage <br><br>";
						echo "Approx. Investment Potential <span>&nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp  &nbsp</span> Strategic <br><br>";
					
					}

					else{
							echo "";
						}
					

				}

			}
			else{
				echo "";
			}

		
?>
</div>
</body>
</html>