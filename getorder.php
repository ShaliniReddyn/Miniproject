<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel=stylesheet href=../css/bootstrap.min.css>





<?php
//include "../includes/header.html";

include"../connect.php";
session_start();
if(!isset($_SESSION['ebauser']))
{
    header("location:index.php");
}







?>


<div class="container-fluid" style="background-color:#abaac2;"> 
    <div class=row>
        <div class=col-12>
              <div class="p-5 mb-4">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Admin Panel</h1>
                            <p class="col-md-8 fs-4">Admin can Add / Update Products. You can manage your orders from here</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class=container-fluid>
    <div class=row>
        <div class=col-3 style="background-color:#ababff;">
            <a href=admindashboard.php class="btn btn-primary" style="width:250px;">Dashboard</a><br><br>
        </div>
        <div class="col-8" id=frmData >
            <?php
            
                $bno=$_GET['bno'];
                $res=mysqli_query($con," select bill.bill_no,product.pid,pname,pprice,pqty from product,short_bill,bill where short_bill.billno=bill.bill_no and ostatus='Ordered' and short_bill.pid=product.pid and bill.bill_no=$bno");
                ?>
                <table class="table table-striped">
<tr><th>Product Id</th><th>Product Name</th><th>Price</th><th>Ordered Qty </th><th>Available Qty</th></tr>
<?php

while($row=mysqli_fetch_array($res))
{
    echo "<tr><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>1</th><th>$row[4]</th><th>";?>
   </tr>
    <?php
    
}
?>
<tr><td colspan=5 align=right><a href=updateorderstatus.php?bno=<?php echo $bno;?> class="btn btn-info">Packed & In Transit</a></td></tr> 
  <?php 

?>



        </div>
    </div>
</div>










<?php



?>
