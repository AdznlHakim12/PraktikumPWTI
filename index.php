<?php
 $brush_price = 5;
 
 echo "<table border=\"1\" align=\"center\">";
 echo "<tr><th>Kuantitas</th>";
 echo "<th>Harga</th></tr>";
 
 $counter = 5;
 do {
 echo "<tr><td>";
 echo $counter;
 echo "</td><td>";
 echo $brush_price * $counter;
 echo "</td></tr>";
 $counter += 5;
 } while ($counter <= 100);
 
 echo "</table>";
