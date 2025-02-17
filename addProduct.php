<?php
include"../connect.php";

$pname=$_POST['txtPname'];
$pprice=$_POST['txtPrice'];
$cat=$_POST['txtCat'];
$desc=$_POST['txtDesc'];
$qty=$_POST['txtQty'];
$tmpname=$_FILES['pImg']['tmp_name'];
$iname=$_FILES['pImg']['name'];

if(move_uploaded_file($tmpname,"../uploads/".time().$iname))
{
    $imgname="../uploads/".time()."$iname";

    $x=mysqli_query($con,"insert into product(pname,pprice,pdesc,pqty,pimage,pcat,uid)values('$pname','$pprice','$desc',$qty,'$imgname','$cat',1)");

    if($x>0)
    {
        ?>
            <script>
                if(confirm("Product Added"))
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
                if(confirm("Product Upload Error"))
                    location="admindashboard.php";
                else
                    location="admindashboard.php";  
            </script>      
  
    <?php
    }
    
}
else
{
    ?>
         <script>
                if(confirm("Image Upload Error"))
                    location="admindashboard.php";
                else
                    location="admindashboard.php";  
            </script>      
  
    <?php
}

?>






