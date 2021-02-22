
<?php

include("../db.php");
echo "<html><table border='1'>
       <tr><th>S.No</th><th>Name</th><th>Department</th><th>Gender</th>
       <th>Email</th></tr>";
$query=mysqli_query($conn,"select *from details");
   $i=0;
        while($row=mysqli_fetch_array($query,MYSQLI_NUM))

        {
  
               echo "<tr><td>".++$i."</td>";
        	echo "<td>".$row[1]."</td>";
  	        echo "<td>".$row[2]."</td>";
  	        echo "<td>".$row[3]."</td>";
  	        echo "<td>".$row[4]."</td>";
        }
echo "</tr></table></html>";
?>