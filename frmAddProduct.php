<link rel=stylesheet href=../css/bootstrap.min.css>


        <div class="form-group">
                    <label for="exampleInputEmail1"><font color=red size=20px>Add New Product</font></label>
        </div>
        <!--div class="col-4" style="margin-top:20px; padding:60px;"-->
            <form action="addProduct.php" method=post enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="txtPname" name="txtPname" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price Rs.</label>
                    <input type="text" class="form-control" id="txtPrice" name="txtPrice" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" id="txtDesc" name="txtDesc" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="Number" class="form-control" id="txtQty" name="txtQty" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" class="form-control" id="txtCat" name="txtCat" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control" id="file" name="pImg">
                   
                  </div>
               
                  <input type="submit" class="btn btn-danger" style="width:350px;" value="Add Product">
        
                <div class="form-group" style="margin-top:20px;">
                    
                                 
              </div>
  
            </form>            


        <!--/div-->


