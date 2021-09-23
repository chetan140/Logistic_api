<?php include("include/header.php"); ?>
<?php include("include/sidebar.php");?>
<div id="main-content">
  <div class="container-fluid">
    
    
    <div class="row clearfix">
      <div class="col-lg-12">
        <div class="card">
          <div class="header"><br><br>
            <h2>Add news  </h2>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add news
            </button>
          </div>
          <div class="body">
            <div class="table-responsive">
              <?php if ($this->session->flashdata('message')) { ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= $this->session->flashdata('message') ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php } ?>
              <table class="table table-hover js-basic-example dataTable table-custom">
                <thead class="thead-dark">
                  <tr>
                    <th style="width: 20px;">S.No</th>
                    
                    <th>Image</th>
                    <th>Name</th>
                    <th>Content</th>
                    <th style="width: 20px;">Delete</th>
                    <th style="width: 20px;">Edit</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($data as $row) {
                  echo "<tr>";
                    echo "<br>";
                    echo "<td>" . $i . "</td>";
                    
                   echo "<td><center><img style='width: 100px;height: 70px;' src= ".base_url().'newimage/'.$row->image."></center></td>";
      echo "<td>" . $row->tittle . "</td>";
            echo "<td>" . $row->content. "</td>";
                    
                    echo "<td><a  class='btn-sm delete' style='color: red;' id=".$row->id."><button type='button' class='btn btn-danger' title='Delete'><span class='sr-only'>Delete</span> Delete</button></a></td>";

                     echo "<td><a  class='btn-sm edit' style='color: red;' id=".$row->id."><button type='button' class='btn btn-warning' title='Delete'><span class='sr-only'>Edit</span>Edit</button></a></td>";
                    $i++;
                  } echo "</tr>";
                  
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Add news</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
     <form method="POST" enctype="multipart/form-data" action="<?php
echo base_url('admin/insert_news_image');
?>">

   
     <div class="form-group">
      <label for="exampleInputEmail1">Select The Image</label>
      <input type="file" name="image" required>
    </div>

     <div class="form-group">
      <label for="exampleInputEmail1">Enter Tittle</label>
      <input type="text" class="form-control" placeholder="Enter Your name" name="tittle" >
    </div>



     <div class="form-group">
      <label for="exampleInputEmail1">Enter Content</label>
     <textarea id="editor" name="content" ></textarea>
    </div><br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
  </div>
  
</div>
</div>
</div>
<!-- model -->
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
              window.location.href='admin/delete_news_image?id='+id;
              }
            })        
                      
      });</script>

      <script >
$(document).on('click', '.edit', function(){
var id = $(this).attr("id");
swal({
title: "Are you sure?",
text: "Are you sure you want to Edit Source",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willEdit) => {
if (willEdit) {
window.location.href='admin/update_news?id='+id;
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