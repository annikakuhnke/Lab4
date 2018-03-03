<?php
	echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\"/>";
	$email=$_POST["username"];
	$pass=$_POST["password"];
	$doggy=$_POST["dog"];
	$kitty=$_POST["cat"];
	$birdy=$_POST["bird"];
	$ship=$_POST["shipping"];
	
	echo "Welcome " . $email . " Your password is " . $pass . ". Your receipt is below:<br>";
	echo "<table border=\"1\">";
	echo "<tr>";
		echo "<td></td>";
		echo "<th>Quantity</th>";
		echo "<th>Cost Per Item</th>";
		echo "<th>Sub Total</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Dog</th>";
		echo "<td>$doggy</td>";
		echo "<td>$150</td>";
		echo "<td>$" . ($doggy * 150) . "</td>";
	echo "</tr>";
	echo "<tr>";
                echo "<th>Cat</th>";
                echo "<td>$kitty</td>";
                echo "<td>$75</td>";
                echo "<td>$" . ($kitty * 75) . "</td>";
        echo "</tr>";
	echo "<tr>";
                echo "<th>Rare Orange Crested Macaw</th>";
                echo "<td>$birdy</td>";
                echo "<td>$4199</td>";
                echo "<td>$" . ($birdy * 4199) . "</td>";
        echo "</tr>";
	echo "<tr>";
		echo "<th>Shipping</th>";
		echo "<td colspan=\"2\">$ship day shipping</td>";
		if($ship==1)
		{
			echo "<td>$50.00</td>";
		}
		else if($ship==3)
		{
			echo "<td>$5.00</td>";
		}
		else if($ship==7)
		{
			echo "<td>$0.00</td>";
		}
	echo "</tr>";
	echo "<tr>";
		echo "<th colspan=\"3\">Total Cost</th>";
		if($ship==1)
		{
			echo "<th>$" . (50 + ($doggy * 150) + ($kitty * 75) + ($birdy * 4199)) . "</th>";
		}
		if($ship==3)
                {
                        echo "<th>$" . (5 + ($doggy * 150) + ($kitty *	75) + ($birdy *	4199)) . "</th>";
                }
		if($ship==7)
                {
                        echo "<th>$" . (0 + ($doggy * 150) + ($kitty *	75) + ($birdy *	4199)) . "</th>";
                }
	echo "</tr>";
	echo "</table>";
?>
