<?php $__env->startSection('title', translate('Dependent Members | List')); ?>
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
                <h4 class="card-title"><?php echo e(translate('Dependent Members')); ?> <span class="float-end"><a href="<?php echo e(route('dependentMember.add')); ?>" class="btn btn-primary btn-sm">+ Add Dependent</a></span></h4>
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
                            <th><?php echo e(__('Firstname')); ?></th>
                            <th><?php echo e(__('Surname')); ?></th>
                            <th><?php echo e(__('Gender')); ?></th>
                            <th><?php echo e(__('Relation')); ?></th>
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
        ajax: "<?php echo e(route('dependentMember.list')); ?>",
        columns: [
          { data: 'id', name: 'id' , orderable: false, searchable: false},
            {data: 'Firstname', name: 'Firstname'},
            {data: 'Surname', name: 'Surname'},
            {data: 'Gender', name: 'Gender'},
            {data: 'Relation', name: 'Relation'},
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Pharmacy/resources/views/dependentMember/list.blade.php ENDPATH**/ ?>