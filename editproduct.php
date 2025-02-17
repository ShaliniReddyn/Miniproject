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

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $pid=$_POST['txtPid'];
    $pqty=$_POST['txtQtyU'];
    $pr=$_POST['txtPrice'];

    $x=mysqli_query($con,"update product set pqty=pqty+$pqty,pprice=$pr where pid=$pid");
    if($x>0)
    {
        ?>
        <script>
               if(confirm("Product Updated "))
                   location="admindashboard.php";
               else
                   location="admindashboard.php";  
           </script>      
 
   <?php

    }
    else
    {
        ?>
         <script>
                if(confirm("Product Updatation Error"))
                    location="admindashboard.php";
                else
                    location="admindashboard.php";  
            </script>      
  
    <?php


    }
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
            
                $bno=$_GET['pid'];
                $res=mysqli_query($con," select pid,pname,pprice,pdesc,pqty from product where pid=$bno");
                $row=mysqli_fetch_array($res);
            ?>
                <link rel=stylesheet href=../css/bootstrap.min.css>



<div class="form-group">
            <label for="exampleInputEmail1"><font color=red size=20px>Update Product</font></label>
</div>
<!--div class="col-4" style="margin-top:20px; padding:60px;"-->
    <form action="editproduct.php" method=post enctype="multipart/form-data">
    <div class="form-group">
            <label for="exampleInputEmail1">Product ID</label>
            <input type="text" class="form-control" id="txtPid" name="txtPid" value=<?php echo $row[0];?> readonly>
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>      
    <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" id="txtPname" name="txtPname" value="<?php echo $row[1];?>" readonly>
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
       
          <div class="form-group">
            <label for="exampleInputEmail1">Price Rs.</label>
            <input type="text" class="form-control" id="txtPrice" name="txtPrice" value=<?php echo $row[2];?> >
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" id="txtDesc" name="txtDesc" value="<?php echo $row[3];?>" readonly>
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Available Quantity</label>
            <input type="Number" class="form-control" id="txtQty" name="txtQty" value=<?php echo $row[4];?> readonly>

            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">New Quantity</label>
            <input type="Number" class="form-control" id="txtQtyU" name="txtQtyU">
            
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          
          <input type="submit" class="btn btn-success" style="width:350px;" value="Update Product">

        <div class="form-group" style="margin-top:20px;">
            
                         
      </div>

    </form>            










        </div>
    </div>
</div>










<?php



?>
