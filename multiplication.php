<?php
	echo "<table border=\"1\">";
	for($row=0; $row<=100; $row++){
		if($row==0){
			echo "<td></td>";
		}
		else
			echo "<td>$row</td>";
	}
	for($row=1; $row<=100; $row++) {
		echo "<tr> \n";
		echo "<td>$row</td>";
		for($column=1; $column<=100; $column++) {
			$print=$row*$column;
			echo "<td>$print</td> \n";
		}
		echo "</tr>";
	}
	echo "</table>";
?>
