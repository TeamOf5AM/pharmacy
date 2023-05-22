<?php $__env->startSection('title', translate('Add Member')); ?>
<?php $__env->startSection('content'); ?>
    <section id="basic-horizontal-layouts">
        <section id="multiple-column-form">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"><?php echo e(translate('Add Member')); ?></h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="POST">
                  <?php echo csrf_field(); ?>
                    <div class="box-body">
                      <div class="row mb-2">
                        <div class="col-md-6 col-12">
                          <fieldset>
                            <legend>Personal Details</legend>

                            <div class="form-group">
                              <label for="profile_no" class="col-sm-3 form-label">Profile No<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="<?php echo $num ?? '' ; ?>" name="profile_no" readonly>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="member_surname" class="col-sm-3 form-label">Member Surname<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="member_surname" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="member_initials" class="col-sm-3 form-label">Member Initials<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="member_initials" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="member_title" class="col-sm-3 form-label">Member Title<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="member_title" required>
                              </div>
                            </div>


                            <div class="form-group" >
                              <label for="language" class="col-sm-3 form-label">
                                language <i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <div class="">
                                  <select class="form-control" name="language" required>
                                    <option value="">Select Your Language</option>
                                    <option value="English">English</option>
                                  </select>

                                </div>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="MemberIdNo" class="col-sm-3 form-label">
                                Member ID No
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="member_idno" autocomplete="off">
                              </div>
                            </div>

                          </fieldset>
                        </div>

                        <div class="col-md-6 col-12">
                          <fieldset>
                            <legend>General</legend>

                            <div class="form-group" >
                              <label for="AccountNo" class="col-sm-3 form-label">
                                Account No
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="accountno" autocomplete="off">
                              </div>
                            </div>


                            <div class="form-group" >
                              <label for="HouseDr" class="col-sm-3 form-label">
                                House Doctor
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="house_doctor" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Employer" class="col-sm-3 form-label">
                                Employer
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="employer" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Delivery_Station" class="col-sm-3 form-label">
                                Delivery Station
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="delivery_station" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="CardId" class="col-sm-3 form-label">
                                MyBonus Card ID
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="card_id" autocomplete="off">
                              </div>
                            </div>

                          </fieldset>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <div class="col-md-6 col-12">
                          <fieldset>
                            <legend>Medical Aid Codes</legend>

                            <div class="form-group" >
                              <label for="primary_option" class="col-sm-3 form-label">
                                Primary Option
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="primary_option1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" name="primary_option2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="chronic_option" class="col-sm-3 form-label">
                                Chronic Option
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="chronic_option1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" name="chronic_option2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="OTC_option" class="col-sm-3 form-label">
                                OTC Option
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="OTC_option1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" name="OTC_option2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Private1" class="col-sm-3 form-label">
                                Private1/Other1
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="private_medical_aid_no1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" name="private_medical_aid_no2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Private2" class="col-sm-3 form-label">
                                Private2/Other2
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="private2_medical_aid_no1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" name="private2_medical_aid_no2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Private3" class="col-sm-3 form-label">
                                Private3/Other3
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="private3" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" name="private3_medical_aid_no" autocomplete="off">
                              </div>
                            </div>
                          </fieldset>
                        </div>


                        <div class="col-md-6 col-12">
                          <fieldset>
                            <legend>Addresses</legend>

                            <div class="form-group" >
                              <label for="home_address" class="col-sm-3 form-label">
                                Home Address
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="home_address" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="home_postal_code" class="col-sm-3 form-label">
                                Postal Code
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="home_postal_code" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="home_postal_address" class="col-sm-3 form-label">
                                Postal Address
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="home_postal_address" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="postal_address_postal_code" class="col-sm-3 form-label">
                                Postal Code
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="postal_address_postal_code" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="other_address" class="col-sm-3 form-label">
                                Other Address
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="other_address" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="other_postal_code" class="col-sm-3 form-label">
                                Postal Code
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" name="other_postal_code" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="member_message" class="col-sm-3 form-label">
                                Member Message
                              </label>
                              <div class="col-sm-12">
                                <textarea class="form-control" name="member_message" rows="4" cols="5"></textarea>
                              </div>
                            </div>

                          </fieldset>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-12">
                          <fieldset>
                            <legend>Contact Numbers</legend>

                            <div class="form-group" >
                              <label for="home_tel" class="col-sm-3 form-label">
                                Home Tel<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="tel" class="form-control" name="home_tel" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="work_tel" class="col-sm-3 form-label">
                                Work Tel<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="tel" class="form-control" name="work_tel" autocomplete="off" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="mobile_tel" class="col-sm-3 form-label">
                                Mobile Tel<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="tel" class="form-control" name="mobile_tel" autocomplete="off" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="pager_no" class="col-sm-3 form-label">
                                Pager No<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="tel" class="form-control" name="pager_no" autocomplete="off" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="email" class="col-sm-3 form-label">
                                Email Address
                              </label>
                              <div class="col-sm-12">
                                <input type="email" class="form-control" name="email_address" autocomplete="off">
                              </div>
                            </div>
                          </fieldset>
                          <div class="row mt-2">
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light"><?php echo e(__('pages.submit')); ?></button>
                              <button type="reset" class="btn btn-outline-secondary waves-effect"><?php echo e(__('pages.reset')); ?></button>
                            </div>
                          </div>
                        </div>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Pharmacy/resources/views/member/add.blade.php ENDPATH**/ ?>