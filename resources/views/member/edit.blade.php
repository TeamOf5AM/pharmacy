@extends('layouts.app')
@section('title', translate('Edit Member') )
@section('content')
    <section id="basic-horizontal-layouts">
        <section id="multiple-column-form">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">{{ translate('Edit Member') }}</h4>
                </div>
                <div class="card-body">
                  <form class="form" method="POST" action="{{route('member.edit', $customer->id) }}">
                      @csrf
                    <div class="box-body">
                      <div class="row mb-2">
                        <div class="col-md-6 col-12">
                          <fieldset>
                            <legend>Personal Details</legend>

                            <div class="form-group">
                              <label for="profile_no" class="col-sm-3 form-label">Profile No<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control"  value="{{$customer->profile_no}}" name="profile_no" readonly>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="member_surname" class="col-sm-3 form-label">Member Surname<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->member_surname}}" name="member_surname" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="member_initials" class="col-sm-3 form-label">Member Initials<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->member_initials}}" name="member_initials" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="member_title" class="col-sm-3 form-label">Member Title<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->member_title}}" name="member_title" required>
                              </div>
                            </div>


                            <div class="form-group" >
                              <label for="language" class="col-sm-3 form-label">
                                language <i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <div class="">
                                  <select class="form-select text-dark" name="language" required>
                                    <option value="{{$customer->language}}" selected>{{$customer->language}}</option>
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
                                <input type="text" class="form-control" value="{{$customer->member_idno}}" name="member_idno" autocomplete="off">
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
                                <input type="text" class="form-control" value="{{$customer->accountno}}" name="accountno" autocomplete="off">
                              </div>
                            </div>


                            <div class="form-group" >
                              <label for="HouseDr" class="col-sm-3 form-label">
                                House Doctor
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->house_doctor}}" name="house_doctor" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Employer" class="col-sm-3 form-label">
                                Employer
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->employer}}" name="employer" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Delivery_Station" class="col-sm-3 form-label">
                                Delivery Station
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->delivery_station}}" name="delivery_station" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="CardId" class="col-sm-3 form-label">
                                MyBonus Card ID
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->card_id}}" name="card_id" autocomplete="off">
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
                                <input type="text" class="form-control" value="{{$customer->primary_option1}}" name="primary_option1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" value="{{$customer->primary_option2}}" name="primary_option2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="chronic_option" class="col-sm-3 form-label">
                                Chronic Option
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->chronic_option1}}" name="chronic_option1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" value="{{$customer->chronic_option2}}" name="chronic_option2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="OTC_option" class="col-sm-3 form-label">
                                OTC Option
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->OTC_option1}}" name="OTC_option1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" value="{{$customer->OTC_option2}}" name="OTC_option2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Private1" class="col-sm-3 form-label">
                                Private1/Other1
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->private_medical_aid_no1}}" name="private_medical_aid_no1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" value="{{$customer->private_medical_aid_no2}}" name="private_medical_aid_no2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Private2" class="col-sm-3 form-label">
                                Private2/Other2
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->private2_medical_aid_no1}}" name="private2_medical_aid_no1" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" value="{{$customer->private2_medical_aid_no2}}" name="private2_medical_aid_no2" autocomplete="off">
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="Private3" class="col-sm-3 form-label">
                                Private3/Other3
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->private3}}" name="private3" autocomplete="off">
                              </div>
                              <div class="col-sm-11">
                                <input type="text" class="form-control" value="{{$customer->private3_medical_aid_no}}" name="private3_medical_aid_no" autocomplete="off">
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
                                <input type="text" class="form-control" value="{{$customer->home_address}}" name="home_address" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="home_postal_code" class="col-sm-3 form-label">
                                Postal Code
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->home_postal_code}}" name="home_postal_code" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="home_postal_address" class="col-sm-3 form-label">
                                Postal Address
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->home_postal_address}}" name="home_postal_address" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="postal_address_postal_code" class="col-sm-3 form-label">
                                Postal Code
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->postal_address_postal_code}}" name="postal_address_postal_code" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="other_address" class="col-sm-3 form-label">
                                Other Address
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->other_address}}" name="other_address" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="other_postal_code" class="col-sm-3 form-label">
                                Postal Code
                              </label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{$customer->other_postal_code}}" name="other_postal_code" autocomplete="off">

                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="member_message" class="col-sm-3 form-label">
                                Member Message
                              </label>
                              <div class="col-sm-12">
                                <textarea class="form-control" value="{{$customer->member_message}}" name="member_message" rows="4" cols="5"></textarea>
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
                                <input type="tel" class="form-control" value="{{$customer->home_tel}}" name="home_tel" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="work_tel" class="col-sm-3 form-label">
                                Work Tel<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="tel" class="form-control" value="{{$customer->work_tel}}" name="work_tel" autocomplete="off" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="mobile_tel" class="col-sm-3 form-label">
                                Mobile Tel<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="tel" class="form-control" value="{{$customer->mobile_tel}}" name="mobile_tel" autocomplete="off" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="pager_no" class="col-sm-3 form-label">
                                Pager No<i class="required">*</i>
                              </label>
                              <div class="col-sm-12">
                                <input type="tel" class="form-control" value="{{$customer->pager_no}}" name="pager_no" autocomplete="off" required>
                              </div>
                            </div>

                            <div class="form-group" >
                              <label for="email" class="col-sm-3 form-label">
                                Email Address
                              </label>
                              <div class="col-sm-12">
                                <input type="email" class="form-control" value="{{$customer->email_address}}" name="email_address" autocomplete="off">
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