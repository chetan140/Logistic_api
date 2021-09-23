<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title"><?= $vendor->name ?>'s Vehical List</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $vendor->name ?>'s Vehical List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-4 form-group">
                                <label form="fromDate"> Select From Date </label>
                                <input type="text" name="fromDate" id="fromDate" class="form-control datepicker" placeholder="Select From Date">
                            </div>
                            <div class="col-4 form-group">
                                <label form="toDate"> Select From Date </label>
                                <input type="text" name="toDate" id="toDate" class="form-control datepicker" placeholder="Select From Date">
                            </div>
                            
                            <div class="col-4 form-group" style="margin-top: 3%;">
                                <button type="button" class="btn btn-primary" id="btn-filter">Filter</button>
                                <button type="button" class="btn btn-default" id="btn-reset">Reset</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="file_exportr" class="datatable-buttt table table-striped table-bordered display" style="overflow-y:scroll;">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Owner Name</th>
                                        <th>Vehical Number</th>
                                        <th>Vehical Capacity</th>
                                        <th>Insurance Number</th>
                                        <th>RC Number</th>
                                        <th>Owner Id Proof</th>
                                        <th>Vehical type</th>
                                        <th>Material Grade</th>
                                        <th>Created At</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <button data-toggle="modal" data-target=".Manage_city_area" class="btn btn-primary  btn-lg"><i class="ti-pencil-alt"></i> </button>
                                            <button type="button" class="btn btn-danger  btn-lg"><i class="ti-trash"></i> </button>
                                        </td>
                                    </tr>
                                    
                                    
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php include("include/copy.php");  ?>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- customizer Panel -->
<!-- ============================================================== -->
<?php include("include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php $id = $this->input->get('id'); ?>
<script type="text/javascript" language="javascript" >
$(function(){
var dataTable = $('#file_exportr').DataTable({
dom: 'Bfrtip',
buttons: [
'copy', 'csv', 'excel', 'pdf', 'print'
],
"processing":true,
"serverSide":true,
"order":[],
"ajax":{
url:"<?php echo base_url() . 'DataTable/getVendorVehicalList?id='.$id.''; ?>",
type:"POST",
data:function(data){
data.fromDateUser = $('#fromDate').val();
data.toDateUser = $('#toDate').val();
},
},
"columnDefs":[
{
"targets":[0, 2],
"orderable":false,
},
],
});
$('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
$(document).on('click','.order-status',function(){
var id = $(this).attr('id');
var status = $(this).attr('status');
swal({
title: "Are you sure?",
text: "Do You Want to Change Transporter Status!.",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
$.ajax({
type:'get',
url:'<?= base_url().'Admin/ChangeUserStatus' ?>',
data:{id:id,status:status},
success:function(data){
$('.datatable-buttt').DataTable().ajax.reload();
},
error: function (xhr, error, thrown) {
// window.location.reload();
},
})
}
});
});
$(document).on('click', '#btn-filter', function(){
$('.datatable-buttt').DataTable().ajax.reload();
});
$(document).on('click', '#btn-reset', function(){
$('#fromDate').val('');
$('#toDate').val('');
$('.datatable-buttt').DataTable().ajax.reload();
});
});
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script>
$(document).ready(function(){
$('.datepicker').datepicker({
format: 'dd/mm/yyyy',
todayHighlight: true,
autoclose: true,
})
})
$(document).ready(function() {
$('#example').DataTable( {
"scrollX": true
} );
} );
</script>