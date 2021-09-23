<?php include("include/header.php"); ?>
<?php include("include/sidebar.php");?>

    <div id="main-content">
        <div class="container-fluid">
         
         
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                       
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
                      <th>About Contant</th>
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
  
     
      echo "<td>" . $row->about_contant. "</td>";
  
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



<?php include ('include/footer.php'); ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
window.location.href='admin/update_about?id='+id;
}
})

});</script>

     