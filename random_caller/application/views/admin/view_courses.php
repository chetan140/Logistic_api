<?php include("include/header.php"); ?>
<?php include("include/sidebar.php");?>

    <div id="main-content">
        <div class="container-fluid">
         
         
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                       
                        <div class="body">
<?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?= $this->session->flashdata('message') ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>    
    <?php } ?>

                            <div class="table-responsive">
                                
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-dark">
                                        <tr>
                      <th style="width: 20px;">S.No</th>
                      <th>Images</th>
                      <th>Course Name</th>
                      <th>Duration</th>
                      <th style="width: 20px;">Add To Popular</th>
                      <th style="width: 20px;">Delete Image</th>
                      <th style="width: 20px;">Edit Image</th>
                      
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
            echo "<td>" . $row->duration. "</td>";
 if ($row->checkbox=='yes') {
        $check = 'checked';
      }elseif($row->checkbox=='no'){
      $check ="$row->id";
     }else{
      $check ='';
     } 
  echo "<td><a  style='color: red;' ></a><input type='checkbox' id=".$row->id." class='btn-sm check'  class='btn-sm check' name='checkbox' $check value='$row->id'></td>";


     echo "<td><a  class='btn-sm delete' style='color: red;' id=".$row->id."><button type='button' class='btn btn-danger' title='Delete'>   Delete</button></a></td>";

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
        <h5 class="modal-title" id="exampleModalLabel">Add Slider Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="<?php
echo base_url('admin/insert_slider_image');
?>">

    <div class="form-group">
      <label for="exampleInputEmail1">Select The Slider Image</label>
      <input type="file" name="image" required>
    </div>
    

     <div class="form-group">
      <label for="exampleInputEmail1">Enter Head</label>
      <input type="text" class="form-control" placeholder="Enter Your Head" name="head" required>
    </div>

    
      <div class="form-group">
      <label for="exampleInputEmail1">Enter Content</label>
      <input type="text" placeholder="Enter Your Content" class="form-control" name="content" required>
    </div><br>
    <input type="submit" class="btn btn-primary"  value="Submit">
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
              window.location.href='admin/delete_courses_project_data?id='+id;
              }
            })        
                      
      });</script>

      <script >
$(document).on('click', '.edit', function(){
var id = $(this).attr("id");
swal({

text: "Are you sure you want to Edit Source",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willEdit) => {
if (willEdit) {
window.location.href='admin/update_courses_project?id='+id;
}
})

});</script>

<script >
$(document).on('change', '.check', function(){
  var id = $(this).attr("id");
  var status = 'no';
  if($(this).is(':checked') == true){
   status = 'yes';
  }else{
    status ='no';
  }
  swal({
    title: "Are you sure?",
    text: "Are you sure you want to Add This Course To The Popular",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willEdit) => {
  if (willEdit) {
    window.location.href='admin/changeStatus?id='+id+'&status='+status;
  }
})

});</script>