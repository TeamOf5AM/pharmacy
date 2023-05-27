<?php $__env->startSection('title', translate('Members')); ?>
<?php $__env->startSection('custom-css'); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dashboard/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dashboard/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dashboard/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dashboard/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="app-user-list">
        <div class="card">
            <div class="card-body border-bottom">
                <h4 class="card-title"><?php echo e(translate('Members')); ?> <span class="float-end"><a href="<?php echo e(route('member.add')); ?>" class="btn btn-primary btn-sm">+ Add Member</a></span></h4>
                <div class="row">
                    <div class="col-md-4 user_role"></div>
                    <div class="col-md-4 user_plan"></div>
                    <div class="col-md-4 user_status"></div>
                </div>
            </div>
            <div class=" mx-2 card-datatable table-responsive pt-0">
                <table class="user-list-table table">
                    <thead class="table-light">
                        <tr>
                            <th><?php echo e(__('pages.sn')); ?></th>
                            <th><?php echo e(__('Profile No')); ?></th>
                            <th><?php echo e(__('Mem Name')); ?></th>
                            <th><?php echo e(__('Mem Id')); ?></th>
                            <th><?php echo e(__('Acc No')); ?></th>
                            <th><?php echo e(__('Address')); ?></th>
                            <th><?php echo e(__('Mobile')); ?></th>
                            <th><?php echo e(__('Email')); ?></th>
                            <th><?php echo e(__('Action')); ?></th>
                        </tr>
                    </thead>
                </table>
            </div>   
        </div>
        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in"></div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="allDMembers" tabindex="-1" aria-labelledby="allDMembersLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="allDMembersLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row" id="#dMembers">
            <div class="col-md-4">
                <span href="" class="badge bg-primary">Member Name</span>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-js'); ?>


 <!-- BEGIN: Page Vendor JS-->
 

   
    <script src="<?php echo e(asset('dashboard/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('dashboard/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/app-assets/vendors/js/tables/datatable/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/app-assets/vendors/js/tables/datatable/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/app-assets/vendors/js/tables/datatable/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/app-assets/vendors/js/tables/datatable/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')); ?>"></script>
   
    <!-- END: Page Vendor JS-->
     <script>

    function dMembers(id)
    {
        $.get("<?php echo e(route('member.getDM')); ?>",
        {
            depmem_id: id
        },
        function(data, status){
            console.log("Data: " + data + "\nStatus: " + status);
        });
    }

         $(function () {
    
    var table = $('.user-list-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "<?php echo e(route('member.list')); ?>",
        columns: [
          { data: 'id', name: 'id' , orderable: false, searchable: false},
            {data: 'profile_no', name: 'profile_no'},
             {data: 'member_surname', name: 'member_surname'},
             {data: 'member_idno', name: 'member_idno'},
             {data: 'accountno', name: 'accountno'},
             {data: 'home_address', name: 'home_address'},
             {data: 'mobile_tel', name: 'mobile_tel'},
             {data: 'email_address', name: 'phone'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
    
  });
     </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Pharmacy/resources/views/member/list.blade.php ENDPATH**/ ?>