<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel=stylesheet href=../css/bootstrap.min.css>

<script>
function displayProductForm()
{
    ob=new XMLHttpRequest();
   
    ob.open("GET","displayproduct.php");
    ob.send();
    ob.onreadystatechange=function()
    {
        if(ob.readyState==4)
            document.getElementById("frmData").innerHTML=ob.responseText;

            
    }
}
function displayallproducts()
{
    ob=new XMLHttpRequest();
   
    ob.open("GET","frmAddProduct.php");
    ob.send();
    ob.onreadystatechange=function()
    {
        if(ob.readyState==4)
            document.getElementById("frmData").innerHTML=ob.responseText;

            
    }
}
function displayOrders()
{
    ob=new XMLHttpRequest();
   
   ob.open("GET","checkorder.php");
   ob.send();
   ob.onreadystatechange=function()
   {
       if(ob.readyState==4)
           document.getElementById("frmData").innerHTML=ob.responseText;

           
   }

}
function updatestock()
{
    ob=new XMLHttpRequest();
   
   ob.open("GET","updatestock.php");
   ob.send();
   ob.onreadystatechange=function()
   {
       if(ob.readyState==4)
           document.getElementById("frmData").innerHTML=ob.responseText;

           
   }  
}
</script>



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
            <a onclick="displayallproducts()" class="btn btn-primary" style="width:250px;">Add Product</a><br><br>
            <a onclick="displayProductForm()" class="btn btn-primary" style="width:250px;">Display All Products</a><br><br>

            <a onclick="updatestock()" class="btn btn-primary" style="width:250px;">Update Price and Stock</a><br><br>

            <a onclick="displayOrders()" class="btn btn-primary" style="width:250px;">Check Order</a><br><br>

            <a href=logout.php class="btn btn-primary" style="width:250px;">Logout</a><br><br>
        </div>
        <div class="col-8" id=frmData >
            main area
        </div>
    </div>
</div>










<?php
include"../includes/footer.html";


?>
