@extends('layouts.app')
@section('title', translate('Edit Dependent Member') )
@section('content')
    <section id="basic-horizontal-layouts">
        <section id="multiple-column-form">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">{{ translate('Edit Dependent Member') }}</h4>
                </div>
                <div class="card-body">
                  <form class="form" method="POST" action="{{route('dependentMember.edit', $customer->id) }}">
                      @csrf
                      <div class="box-body">
                        <div class="row">
                          <div class="col-md-6 col-12">
                            <fieldset>
                              <legend>Personal Details</legend>
                              <div class="form-group">
                                <label for="Surname" class="col-sm-3 form-label"> 
                                  Surname 
                                  <i class="required">*</i>
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="surname"  style="text-transform:uppercase" required>
                                  <!-- <small>Capital Letter</small> -->
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="firstname" class="col-sm-3 form-label">
                                  Firstname
                                  <i class="required">*</i>
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="firstname" style="text-transform:uppercase" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="nickname" class="col-sm-3 form-label">
                                  Nickname
                                  <i class="required">*</i>
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" name="nickname">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="initials" class="col-sm-3 form-label">
                                  <?php echo 'Initials' ?> <i class="required">*</i> 
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="initials">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="title" class="col-sm-3 form-label">
                                  Title
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"   name="title">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="IdNo" class="col-sm-3 form-label">
                                  ID No
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="id_no" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="Birthday" class="col-sm-3 form-label">
                                  Birthday
                                </label>
                                <div class="col-sm-12">
                                  <input type="date" class="form-control"  name="birthday" autocomplete="off" placeholder="YYYY-MM-DD">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="DepNo" class="col-sm-3 form-label">
                                  Dep No
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="dep_no" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="Gender" class="col-sm-3 form-label">
                                  Gender
                                </label>
                                <div class="col-sm-12">
                                  <select class="form-select" name="gender" id="">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="Relation" class="col-sm-3 form-label">
                                  Relation
                                </label>
                                <div class="col-sm-12">
                                  <select class="form-select" name="relation" id="">
                                    <option value="">Select Relation</option>
                                    <option value="SELF">SELF</option>
                                    <option value="SPOUSE">SPOUSE</option>
                                    <option value="CHILD">CHILD</option>
                                    <option value="OTHER">OTHER</option>
                                  </select>
                                </div>
                              </div>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-12">
                            <fieldset>
                              <legend>General</legend>
                              <div class="form-group">
                                <label for="DepRecNo" class="col-sm-3 form-label">
                                  Dep Rec No
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="dept_recno" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="ProfileNo" class="col-sm-3 form-label">
                                  Member Profile No
                                </label>
                                <div class="col-sm-12">
                                  <select class="form-select" name="Profile_no">
                                    <option>Select Profile No</option>
                                    <?php 
                                    foreach ($options as $option) {
                                    ?>
                                    <option value="<?php echo $option['profile_no']; ?>"><?php echo $option['profile_no']; ?> </option>
                                    <?php 
                                    }
                                    ?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="ExternalUniqueId" class="col-sm-3 form-label">
                                  External Unique Id
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="external_unique_id" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="MedAidNo" class="col-sm-3 form-label">
                                  Med Aid No
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="medaid_no" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="start_date" class="col-sm-3 form-label">
                                  Benefit start date
                                </label>
                                <div class="col-sm-12">
                                  <input type="date" class="form-control"  name="benefit_start_date" autocomplete="off" placeholder="YYYY-MM-DD">
                                </div>
                              </div>
                            </fieldset>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 col-12">
                            <fieldset>
                              <legend>Residential</legend>
                              <div class="form-group">
                                <label for="home_address" class="col-sm-3 form-label">
                                  Home Address
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="home_address" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="home_postal_code" class="col-sm-3 form-label">
                                  Postal Code
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="home_postal_code" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="home_postal_address" class="col-sm-3 form-label">
                                  Postal Address
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="postal_address" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="postal_address_postal_code" class="col-sm-3 form-label">
                                  Postal Code
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control" name="postal_address_postal_code" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="other_address" class="col-sm-3 form-label">
                                  Other Address
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="other_address" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="other_postal_code" class="col-sm-3 form-label">
                                  Postal Code
                                </label>
                                <div class="col-sm-12">
                                  <input type="text" class="form-control"  name="other_postal_code" autocomplete="off">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="dependent_message" class="col-sm-3 form-label">
                                  Dependent Message
                                </label>
                                <div class="col-sm-12">
                                  <textarea id="Dependent_Message" class="form-control" name="dependent_message" rows="10" cols="8"></textarea>
                                </div>
                              </div>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-12">
                            <fieldset>
                              <legend>Contact Numbers</legend>
                              <div class="form-group">
                                <label for="home_tel" class="col-sm-3 form-label">
                                  Home Tel<i class="required">*</i>
                                </label>
                                <div class="col-sm-12">
                                  <input type="tel" class="form-control"  name="home_tel_no" autocomplete="off" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                  <small>Format: 123-45-678</small>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="work_tel" class="col-sm-3 form-label">
                                  Work Tel<i class="required">*</i>
                                </label>
                                <div class="col-sm-12">
                                  <input type="tel" class="form-control"  name="work_tel_no" autocomplete="off" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                  <small>Format: 123-45-678</small>

                                </div>
                              </div>
                              <div class="form-group">
                                <label for="mobile_tel" class="col-sm-3 form-label">
                                  Mobile Tel<i class="required">*</i>
                                </label>
                                <div class="col-sm-12">
                                  <input type="tel" class="form-control"  name="mobile_tel_no" autocomplete="off" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                  <small>Format: 123-45-678</small>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="pager_no" class="col-sm-3 form-label">
                                  Pager No<i class="required">*</i>
                                </label>
                                <div class="col-sm-12">
                                  <input type="tel" class="form-control"  name="pager_no" autocomplete="off" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                  <small>Format: 123-45-678</small>
                                </div>
                              </div>
                            
                              <div class="form-group">
                                <label for="email" class="col-sm-3 form-label">
                                  Email Address
                                </label>
                                <div class="col-sm-12">
                                  <input type="email" class="form-control"  name="email_address" autocomplete="off">
                                </div>
                              </div>
                            </fieldset>
                            <div class="row mt-2">
                              <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">{{ __('pages.submit') }}</button>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">{{ __('pages.reset') }}</button>
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
@endsection