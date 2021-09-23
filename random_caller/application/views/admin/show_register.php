<?php include("include/header.php"); ?>
<?php include("include/sidebar.php");?>

    <div id="main-content">
        <div class="container-fluid">
         
         
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                       
                        <div class="body">

<center><h3 style="margin-top: 40px;">User Registration </h3></center>
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
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>College Name</th>
                      <th>College Branch</th>
                      <th>Number</th>
                      <th>Subject</th>
                      <th style="width: 20px;">Delete</th>
                     
                      
                    </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
$i = 1;
foreach ($data as $row) {
    echo "<tr>";
    echo "<br>";
    echo "<td>" . $i . "</td>";
 
  
      echo "<td>" . $row->fname . "</td>";
      echo "<td>" . $row->lname . "</td>";
      echo "<td>" . $row->cname. "</td>";
      echo "<td>" . $row->cbranch. "</td>";
      echo "<td>" . $row->number. "</td>";
      echo "<td>" . $row->subject. "</td>";
  
     echo "<td><a  class='btn-sm delete' style='color: red;' id=".$row->id."><button type='button' class='btn btn-danger' title='Delete'><span class='sr-only'>Delete</span> Delete</button></a></td>";

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
              window.location.href='admin/delete_our_register?id='+id;
              }
            })        
                      
      });</script>

     