<html>

<?php

echo "<link rel=stylesheet href=../css/bootstrap.min.css>";

include"../connect.php";

$rs=mysqli_query($con,"select * from product"); 

?>
<table class="table table-striped">
<tr><th>Pid</th><th>Name</th><th>Price</th><th>Qty</th><th>Image</th></tr>
<?php

while($row=mysqli_fetch_array($rs))
{
    echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[4]</th><th><img src=$row[5] height=100px width=100px></th></tr>";

}

?>


