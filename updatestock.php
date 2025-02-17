<html>

<?php

echo "<link rel=stylesheet href=../css/bootstrap.min.css>";

include"../connect.php";

$rs=mysqli_query($con,"select * from product"); 

?>
<table class="table table-bordered">
<tr><th>Pid</th><th>Name</th><th>Price</th><th>Qty</th><th>Image</th><th></th></tr>
<?php

while($row=mysqli_fetch_array($rs))
{
    echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[4]</th><th><img src=$row[5] height=40px width=40px></th><th>";?><a href=editproduct.php?pid=<?php echo $row[0];?> class="btn btn-warning">Edit</a></th></tr>
    <?php


}

?>


