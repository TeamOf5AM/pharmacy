<?php $__env->startSection('title', __('pages.type_edit')); ?>
<?php $__env->startSection('content'); ?>
    <section id="basic-horizontal-layouts">
        <section id="multiple-column-form">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title"><?php echo e(__('pages.type_edit')); ?></h4>
                    </div>
                    <div class="card-body">
                      <form class="form" method="POST" action="<?php echo e(route('leaf.edit', $customer->id)); ?>">
                          <?php echo csrf_field(); ?>
                        <div class="row">
                          <div class="col-md-6 col-12">
                            <div class="mb-1">
                              <label class="form-label" for="first-name-column"><?php echo e(__('pages.leaf_type')); ?></label>
                              <input type="text" id="first-name-column" class="form-control" placeholder="<?php echo e(__('pages.leaf_type')); ?>" value="<?php echo e($customer->name); ?>" name="name" required>
                            </div>
                          </div>
                          
                          <div class="col-md-6 col-12">
                            <div class="mb-1">
                              <label class="form-label" for="first-name-column"><?php echo e(__('pages.qty_box')); ?></label>
                              <input type="text" id="first-name-column" class="form-control" placeholder="<?php echo e(__('pages.qty_box')); ?>" value="<?php echo e($customer->amount); ?>" name="qty" required>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-1">
                              <label class="form-label" for="first-name-column"><?php echo e(__('pages.rtl_inc')); ?></label>
                              <input type="text" id="first-name-column" class="form-control" placeholder="<?php echo e(__('pages.rtl_inc')); ?>" value="<?php echo e($customer->rtl_inc); ?>" name="rtl_inc" required>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-1">
                              <label class="form-label" for="first-name-column"><?php echo e(__('pages.avg_cost')); ?></label>
                              <input type="text" id="first-name-column" class="form-control" placeholder="<?php echo e(__('pages.avg_cost')); ?>" value="<?php echo e($customer->avg_cost); ?>" name="avg_cost" required>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-1">
                              <label class="form-label" for="first-name-column"><?php echo e(__('pages.cost')); ?></label>
                              <input type="text" id="first-name-column" class="form-control" placeholder="<?php echo e(__('pages.cost')); ?>" value="<?php echo e($customer->cost); ?>" name="cost" required>
                            </div>
                          </div>
                          
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light"><?php echo e(__('pages.submit')); ?></button>
                            <button type="reset" class="btn btn-outline-secondary waves-effect"><?php echo e(__('pages.reset')); ?></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/pharmacy/resources/views/leaf/edit.blade.php ENDPATH**/ ?>