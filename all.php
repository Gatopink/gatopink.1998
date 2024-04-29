<?php

#Receive inputs values from HTML form
$name = $_POST ['name'];
$email = $_POST ['email'];
$adulttickets = (int)$_POST['adultickets'];
$childtickets = (int)$_POST['childtickets'];
$date = $_POST['date'];
$location = $_POST['location'];


#Declare and define global named constants
define ("TAX", 0.07);
define ("ADULT_COST", 36.75);
define ("CHILD_COST", 25.50);
define ("MIN_FEE", 0.50);
define ("MAX_FEE", 1.00);
DEFINE ("ATTEND", 5);


$totaltickets = $adulttickets + $childtickets;
if ($totaltickets <=ATTEND)
{
	$fee = ($totaltickets * MAX_FEE);
}
else
{
	$fee = ($totaltickets * MIN_FEE);
}
$subtotal = ($adultickets * ADULT_COST) + ($childtickets * CHILD_COST);
$salestax = ($subtotal * TAX);
$totalcost = $subtotal + $salestax + $fee;


print ("<p>thank you <b>".$name."</b.> at <b>".$email.
	"</b>.Details of your total cost <b>$".
	number_format($totalcost, 2)
	"</b> are shown below:</p>");
print ("<ul><li>Adult Tickets: $adulttickets </li>");
print ("<li>Child Tickets:" .$childtickets."</li>");
print ("<li>Date: " .$date. "</li>");
print ("<li>Location: " .$location."</li>");
print ("<li>Sub-total: $".number_format($subtotal, 2)."</li>);
print ("<li>Sales tax: $".number_format($salestax, 2)."</li>);
print ("<li>fee: $".number_format($fee, 2)."</li></ul>");
print ("<ul><li><b>TOTAL:</b><b> $".number_format($totalcost, 2)."</b></li></ul>")
print ("<h3>thank your for usimg this program!</h3>");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Concert Form </title>
  <link href="concert.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <div class="container">
    <header class = "fctr">
	<h1 class="white">Summary of Concert Ticket Cost</h1>
    </header>
    
    
    
    <footer class = "fctr">
        <a class="white" href="concert_form.html">Return to Form Entry To Continue</a>
    </footer>
  </div> 
</body>
</html>

