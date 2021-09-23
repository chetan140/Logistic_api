<?php include("include/header.php"); ?>
<?php include("include/sidebar.php");?>

    <div id="main-content">
        <div class="container-fluid">
         
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header"><br><br>
                            <h2>Add Courses </h2> 
<br>
                                    
                        </div>
                        <div class="body">
<form method="POST" enctype="multipart/form-data" 
action="<?= base_url().'admin/update_courses_project_data?id='.$_GET['id'] ?>">

   <div class="form-group">
       <label for="exampleInputEmail1">Current Image</label>
        <?php  echo "<td><center><img style='width: 100px;margin-right: 2000px; height: 70px;' src= ".base_url().'newimage/'.$data[0]->image."></center></td>"; ?><br>
      <label for="exampleInputEmail1">Select Course Image</label>
        <input type="file"  name="image">
        
      
        <input type="hidden"  name="old_1" value="<?= $data[0]->image ?>">
    </div>
    
<br>
     <div class="form-group">
      <label for="exampleInputEmail1">Enter Tittle</label>
      <input type="text" class="form-control" value="<?= $data[0]->tittle ?>" placeholder="Enter Your Course Tittle"  name="tittle" required>
    </div>

    
      <div class="form-group">
      <label for="exampleInputEmail1">Enter Course Duration</label>
      <input type="text" placeholder="Enter Your Course Dureation" value="<?= $data[0]->duration ?>" class="form-control" name="duration" required>
    </div><br>

    
<div class="form-group">
      <label for="exampleInputEmail1">Courses Details</label>
     <textarea id="editor" name="content" ><?= $data[0]->content ?></textarea>
    </div>
<!-- <div class="form-group">
      <?php if ($data[0]->checkbox=='yes') {
        $check = 'checked';
      }elseif($data[0]->checkbox=='no'){
      $check ="";
     } ?>
     <input type="checkbox" id="vehicle1" name="checkbox" value="yes" <?php echo $check; ?>>
     <label for="vehicle1">Add This Course As A Popular Course</label><br>
    </div><br>
     -->
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