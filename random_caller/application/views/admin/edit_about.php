
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
action="<?= base_url().'admin/update_about_data?id='.$_GET['id'] ?>">

   <div class="form-group">
       <label for="exampleInputEmail1">Current Image</label>
        <?php  echo "<td><center><img style='width: 100px;margin-right: 2000px; height: 70px;' src= ".base_url().'newimage/'.$data[0]->image."></center></td>"; ?><br>
      <label for="exampleInputEmail1">Select Course Image</label>
        <input type="file"  name="image">
        
      
        <input type="hidden"  name="old_1" value="<?= $data[0]->image ?>">
    </div>
    
<br>
     <div class="form-group">
      <label for="exampleInputEmail1">Enter About Contant</label>
     <textarea id="editor1" name="about_contant" ><?= $data[0]->about_contant ?></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Enter Director Contant</label>
     <textarea id="editor2" name="director_contant" ><?= $data[0]->director_contant ?></textarea>
    </div>

    
<div class="form-group">
      <label for="exampleInputEmail1">Enter Why Navigate</label>
     <textarea id="editor3" name="why_navigate" ><?= $data[0]->why_navigate ?></textarea>
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
                                .create( document.querySelector( '#editor1' ) )
                                .then( editor => {
                                        console.log( editor1 );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

                <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor2' ) )
                                .then( editor => {
                                        console.log( editor2 );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

                <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor3' ) )
                                .then( editor => {
                                        console.log( editor3 );
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