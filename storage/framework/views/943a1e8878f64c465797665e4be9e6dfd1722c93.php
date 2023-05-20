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
                <h4 class="card-title"><?php echo e(translate('Members')); ?></h4>
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
                            <th><?php echo e(__('Member Name')); ?></th>
                            <th><?php echo e(__('Member Id')); ?></th>
                            <th><?php echo e(__('Account No')); ?></th>
                            <th><?php echo e(__('Home Address')); ?></th>
                            <th><?php echo e(__('Mobile Tel')); ?></th>
                            <th><?php echo e(__('Email Address')); ?></th>
                            <th><?php echo e(__('Action')); ?></th>
                        </tr>
                    </thead>
                </table>
            </div>   
        </div>
        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in"></div>
    </section>
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