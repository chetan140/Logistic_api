<?php include("include/header.php"); ?>
<?php include("include/sidebar.php");?>

    <div id="main-content">
        <div class="container-fluid">
         
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header"><br><br>
                            <h2>Add Faq</h2> 
<br>
                                    
                        </div>
                        <div class="body">
<form method="POST" enctype="multipart/form-data" 
action="<?= base_url().'admin/update_faq_project_data?id='.$_GET['id'] ?>">

    
<br>
  <div class="form-group">
      <label for="exampleInputEmail1">Enter Topic</label>
    <input type="text" name="question" value="<?= $data[0]->question ?>" placeholder="Enter Your Discription" class="form-control" >
    </div>

     <div class="form-group">
      <label for="exampleInputEmail1">Enter Discription</label>
   
    <textarea id="editor" name="answer" ><?= $data[0]->answer ?></textarea>
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

                 <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor1' ) )
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