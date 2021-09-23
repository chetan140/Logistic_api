<?php include("include/header.php"); ?>
<?php include("include/sidebar.php");?>

    <div id="main-content">
        <div class="container-fluid">
         
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header"><br><br>
                            <h2>Add Testimonial </h2> 
<br>
                                    
                        </div>
                        <div class="body">
<form method="POST" enctype="multipart/form-data" 
action="<?= base_url().'admin/update_testimonial_data?id='.$_GET['id'] ?>">

   <div class="form-group">
       <label for="exampleInputEmail1">Current Image</label>
        <?php  echo "<td><center><img style='width: 100px;margin-right: 2000px; height: 70px;' src= ".base_url().'newimage/'.$data[0]->image."></center></td>"; ?><br>
      <label for="exampleInputEmail1">Select Course Image</label>
        <input type="file"  name="image">
        
      
        <input type="hidden"  name="old_1" value="<?= $data[0]->image ?>">
    </div>
    
<br>
   <div class="form-group">
      <label for="exampleInputEmail1">Enter name</label>
      <input type="text" class="form-control" placeholder="Enter Your name" value="<?= $data[0]->name ?>" name="name" >
    </div>

    
      <div class="form-group">
      <label for="exampleInputEmail1">Enter Post</label>
      <input type="text" value="<?= $data[0]->post ?>" placeholder="Enter Your post" class="form-control" name="post" required>
    </div>

     <div class="form-group">
      <label for="exampleInputEmail1">Enter Content</label>
      <input type="text" value="<?= $data[0]->content ?>" placeholder="Enter Your Content" class="form-control" name="content" required>
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
               
            </div>

           

        </div>
    </div>
    
</div>



<?php include ('include/footer.php'); ?>
      <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
 <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>


                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
$( "#datepicker" ).datepicker();
} );
</script>