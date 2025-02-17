

<?php

echo "<link rel=stylesheet href=../css/bootstrap.min.css>";

include"../connect.php";

$rs=mysqli_query($con,"select bill_no,customer.cuname,cadd,cmob,pincode from customer,bill where bill.cuname=customer.cuname and Ostatus='Ordered'"); 

?>
<table class="table table-striped">
<tr><th>Bill No</th><th>Name</th><th>Address</th><th>Mobile </th><th>Pincode</th><th></th></tr>
<?php

while($row=mysqli_fetch_array($rs))
{
    echo "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th><th>";?>
    <a href=getorder.php?bno=<?php echo $row[0];?> class="btn btn-primary">Get Order Details</a> </tr>
    <?php
    
}

?>
