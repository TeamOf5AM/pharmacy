<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\DependentMember;
use App\Models\Member;
use Brian2694\Toastr\Facades\Toastr;
use Yajra\DataTables\DataTables;

class DependentMemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            
            $custom = DependentMember::where('mobile_tel', $request->mobile_tel)->where('shop_id', Auth::user()->shop_id)->first();
            
            if($custom != null){
                Toastr::error('DependentMember Existes With Given Phone Number', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
            }
            $customer = new DependentMember();
            $customer->profile_no = $request->profile_no;
            $customer->member_surname = $request->member_surname;
            $customer->member_initials = $request->member_initials;
            $customer->member_title = $request->member_title;
            $customer->language = $request->language;
            $customer->member_idno = $request->member_idno;
            $customer->accountno = $request->accountno;
            $customer->house_doctor = $request->house_doctor;
            $customer->employer = $request->employer;
            $customer->delivery_station = $request->delivery_station;
            $customer->card_id = $request->card_id;
            $customer->primary_option1 = $request->primary_option1;
            $customer->primary_option2 = $request->primary_option2;
            $customer->chronic_option1 = $request->chronic_option1;
            $customer->chronic_option2 = $request->chronic_option2;
            $customer->OTC_option1 = $request->OTC_option1;
            $customer->OTC_option2 = $request->OTC_option2;
            $customer->private_medical_aid_no1 = $request->private_medical_aid_no1;
            $customer->private_medical_aid_no2 = $request->private_medical_aid_no2;
            $customer->private2_medical_aid_no1 = $request->private2_medical_aid_no1;
            $customer->private2_medical_aid_no2 = $request->private2_medical_aid_no2;
            $customer->private3 = $request->private3;
            $customer->private3_medical_aid_no = $request->private3_medical_aid_no;
            $customer->home_address = $request->home_address;
            $customer->home_postal_code = $request->home_postal_code;
            $customer->home_postal_address = $request->home_postal_address;
            $customer->postal_address_postal_code = $request->postal_address_postal_code;
            $customer->other_address = $request->other_address;
            $customer->other_postal_code = $request->other_postal_code;
            $customer->member_message = $request->member_message;
            $customer->home_tel = $request->home_tel;
            $customer->work_tel = $request->work_tel;
            $customer->mobile_tel = $request->mobile_tel;
            $customer->pager_no = $request->pager_no;
            $customer->email_address = $request->email_address;
            $customer->shop_id = Auth::user()->shop_id;
            
            if($customer->save()){
                   Toastr::success('DependentMember successfully created', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
                return redirect()->route('dependentmember.list');
            } else {
                Toastr::error('Something Went Wrong', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
                return redirect()->route('dependentmember.list');
            }
        } else {

            $result['options']=Member::get();
            
            return view('dependentmember.add',$result);
        }
    }
    
    
    
    
    public function edit(Request $request, $id)
    {
        $customer = DependentMember::where('shop_id', Auth::user()->shop_id)->where('id', $id)->firstOrFail();
        if ($request->isMethod('post')) {
            
           
          
            $customer->profile_no = $request->profile_no;
            $customer->member_surname = $request->member_surname;
            $customer->member_initials = $request->member_initials;
            $customer->member_title = $request->member_title;
            $customer->language = $request->language;
            $customer->member_idno = $request->member_idno;
            $customer->accountno = $request->accountno;
            $customer->house_doctor = $request->house_doctor;
            $customer->employer = $request->employer;
            $customer->delivery_station = $request->delivery_station;
            $customer->card_id = $request->card_id;
            $customer->primary_option1 = $request->primary_option1;
            $customer->primary_option2 = $request->primary_option2;
            $customer->chronic_option1 = $request->chronic_option1;
            $customer->chronic_option2 = $request->chronic_option2;
            $customer->OTC_option1 = $request->OTC_option1;
            $customer->OTC_option2 = $request->OTC_option2;
            $customer->private_medical_aid_no1 = $request->private_medical_aid_no1;
            $customer->private_medical_aid_no2 = $request->private_medical_aid_no2;
            $customer->private2_medical_aid_no1 = $request->private2_medical_aid_no1;
            $customer->private2_medical_aid_no2 = $request->private2_medical_aid_no2;
            $customer->private3 = $request->private3;
            $customer->private3_medical_aid_no = $request->private3_medical_aid_no;
            $customer->home_address = $request->home_address;
            $customer->home_postal_code = $request->home_postal_code;
            $customer->home_postal_address = $request->home_postal_address;
            $customer->postal_address_postal_code = $request->postal_address_postal_code;
            $customer->other_address = $request->other_address;
            $customer->other_postal_code = $request->other_postal_code;
            $customer->member_message = $request->member_message;
            $customer->home_tel = $request->home_tel;
            $customer->work_tel = $request->work_tel;
            $customer->mobile_tel = $request->mobile_tel;
            $customer->pager_no = $request->pager_no;
            $customer->email_address = $request->email_address;
            if($customer->save()){
                   Toastr::success('DependentMember successfully updated', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
                return redirect()->route('dependentmember.list');
            } else {
                Toastr::error('Something Went Wrong', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
                return redirect()->route('dependentmember.list');
            }
        } else {
            
            return view('dependentmember.edit', compact('customer'));
        }
    }
    
    
     public function delete(Request $request, $id)
    {
        $customer = dependentmember::where('shop_id', Auth::user()->shop_id)->where('id', $id)->firstOrFail();

        if($customer->delete()){
               Toastr::success('DependentMember successfully Deleted', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
            return redirect()->route('dependentmember.list');
        } else {
            Toastr::error('Something Went Wrong', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
            return redirect()->route('DependentMember.list');
        }

    }
    
    
     
    public function index(Request $request)
    {
        
         if ($request->ajax()) {
            $data = DependentMember::select('*')->where('shop_id', Auth::user()->shop_id)->latest();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a href="'.route('dependentmember.edit', $row->id).'" class="badge bg-primary"><i class="fas fa-edit"></i></a><a onclick="return confirm(\'Are you sure?\')" href="'.route('dependentmember.delete', $row->id).'" class="badge bg-danger"><i class="fas fa-trash"></i></a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $customer = DependentMember::where('shop_id', Auth::user()->shop_id)->get();
        
        return view('dependentmember.list', compact('customer'));
    }
}
