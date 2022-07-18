<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel expense</title>
    <link rel="stylesheet" href="travel.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css
" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->

</head>
<body>
    
    <div class = "container">
    <div class="topnav" id="myTopnav">
    <!-- <a href="#default"><img src="converter.jpg" class="img-fluid" height= "30px" width = "30px">
</a> -->
  <a href="#home" class="active">Send Money</a>
  <a href="#news">Resource</a>
  <a href="#contact">Tools</a>
  <a href="#about">Help</a>
  <a href="#about" class="split">Sign in</a>

</div>
<tr>
<form  action="old.php" method="post">

<div id="box">
<h2>Currency Converter</h2>
<table>
	<td>
		Enter Amount:<input type="text" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br>From:<select name='country1'>
	 <option value="AUD">Australian Dollor(AUD)</option>
	 <option value="USD" selected>US Dollar(USD)</option>
     <option value="CAD" selected>Canadian Dollar(CAD)</option>
     <option value="AED" selected>Emirati Dirham(AED)</option>
	 </select>
</td>
</tr>
<tr>
	<td>
	<br>To:<select name='country2'>
	 <option value="INR" selected >Indian Rupee(INR)</option>
	 <option value="CHF">Swiss franc(CHF)</option>
	 <option value="SGD">Singgapore(SGD)</option>
	
	</select>
</td>
</tr>
<tr>
<td><br>
<div class = "button">

<input type='submit' name='submit' value="CovertNow"></div>
</td>
</tr>
</table>

</form>

</div>
<?php
require('vendor/autoload.php');

 if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['country1'];
$cur2 = $_POST['country2'];
// first country form
if($cur1=="AUD" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*(0.651) . "</center>";
}

if($cur1=="AUD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*( 53.824) . "</center>";
}

if($cur1=="AUD" AND $cur2=="SGD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*( 0.94920) . "</center>";
}
// Second country from
if($cur1=="USD" AND $cur2=="CHF"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*(0.95800). "</center>";
}

if($cur1=="USD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* (79.0725) . "</center>";
}

if($cur1=="USD" AND $cur2=="SGD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*(1.3942)  . "</center>";
}

//third country from
if($cur1=="CAD" AND $cur2=="CHF"){
    echo "<center><b>Your Converted Amount is:</b><br></center>";
    echo "<center>" . $amount*(0.74155) . "</center>";

    }
    
    if($cur1=="CAD" AND $cur2=="INR"){
    echo "<center><b>Your Converted Amount is:</b><br></center>";
    echo "<center>" . $amount* (61.21) . "</center>";
    }
    
    if($cur1=="CAD" AND $cur2=="SGD"){
    echo "<center><b>Your Converted Amount is:</b><br></center>";
    echo "<center>" . $amount*(1.079)  . "</center>";
    }

    //fourth country
    if($cur1=="AED" AND $cur2=="CHF"){
        echo "<center><b>Your Converted Amount is:</b><br></center>";
        echo "<center>" . $amount*(0.74155) . "</center>";
    
        }
        
        if($cur1=="AED" AND $cur2=="INR"){
        echo "<center><b>Your Converted Amount is:</b><br></center>";
        echo "<center>" . $amount* (61.21) . "</center>";
        }
        
        if($cur1=="AED" AND $cur2=="SGD"){
        echo "<center><b>Your Converted Amount is:</b><br></center>";
        echo "<center>" . $amount*(1.079)  . "</center>";
        }
     
}
?>

<!-- <div class="footer-right">
				<p class="footer-company-about">
				<div class="footer-icons">
                    <a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer> -->
</div>
</div>


</body>
</html>