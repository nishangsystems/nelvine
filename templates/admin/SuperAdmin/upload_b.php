
		<style>
            .french{
              color: #938A8A;
            }
            </style>
                                  
                    
                                  
                                      
                                      
                                  <head>
      <script type='text/javascript'>
      function preview_image(event) 
      {
       var reader = new FileReader();
       reader.onload = function()
       {
        var output = document.getElementById('output_image');
        output.src = reader.result;
       }
       reader.readAsDataURL(event.target.files[0]);
      }
      </script>
      <style>
      body
      
      #wrapper
      {
       text-align:center;
       margin:0 auto;
       padding:0px;
       width:995px;
      }
      #output_image
      {
       max-width:200px;
      }
      h1{
          font-size:19px;
          border:1px solid#000;
      }
      </style>                      	
       <?php Uploadb(); ?>                          






<form method="POST" action="" enctype="multipart/form-data">                                   

                                                    
        <div class="form-group col-md-3">
        <label for="inputPassword4">Image<br />

        <input type="file" name = "image"  accept="image/*" onchange="preview_image(event)" style="width:200; height:200">
        <img id="output_image"/>

        </div>


        <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">

        <button class="btn btn-info" type="submit" name="save" >
        <i class="ace-icon fa fa-check bigger-110"></i>
        UPDATE 
        </button>
        </div>
        </div>





</form>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>

                    <th> Image</th>

                    <th >Action</th>


                    </tr>
                    </thead>

                    <tbody>
                    <?php

                    $a = $con->query("SELECT * from images_b  order by id DESC") or die(mysqli_error($con));

                    while($rows = $a->fetch_assoc()) {
                    ?>
                    <tr>

                    <td><img src="img/<?php  echo $rows['name']; ?>" required class="img-rounded" alt="Cinque Terre" width="100" height="100"> 												</td>
                    <td ><a href="?upload_b&id=<?php echo $rows['id']; ?>&image=<?php  echo $rows['name']; ?>&hhh" class="btn btn-xs btn-danger" onclick="reurn confirm('Are you sure you wish to Update your payment Data')">Delete</a></td>

                    </tr>
                    <?PHP } ?>

                    </tbody>
                    </table>
                    <?php DeleteUploadb(); ?>   