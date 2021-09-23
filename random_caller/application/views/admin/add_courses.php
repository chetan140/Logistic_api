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
 <form method="POST" enctype="multipart/form-data" action="<?php echo base_url('admin/insert_courses_project');
?>">
    <div class="form-group">
      <label for="exampleInputEmail1">Select The Course Image</label><br>
      <input type="file" name="image" required>
    </div>
    
<br>
     <div class="form-group">
      <label for="exampleInputEmail1">Enter Tittle</label>
      <input type="text" class="form-control" placeholder="Enter Your Course Tittle" name="tittle" required>
    </div>

    
      <div class="form-group">
      <label for="exampleInputEmail1">Enter Course Duration</label>
      <input type="text" placeholder="Enter Your Course Dureation" class="form-control" name="duration" required>
    </div><br>

    
<div class="form-group">
      <label for="exampleInputEmail1">Courses Details</label>
     <textarea id="editor" name="content" ></textarea>
    </div>
 
   <input type="submit" class="btn btn-primary" name="submit" value="Submit">
  </form>
               
            </div>

           

        </div>
    </div>
    
</div>



<?php include ('include/footer.php'); ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script >
$(document).on('click', '.delete', function(){ 
        var id = $(this).attr("id");  
            swal({
              title: "Are you sure?",
              text: "Are you sure you want to delete Source",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
              window.location.href='admin/delete_slider_image?id='+id;
              }
            })        
                      
      });</script>


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