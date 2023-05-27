<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\DependentMember;
use Brian2694\Toastr\Facades\Toastr;
use Yajra\DataTables\DataTables;

class MemberController extends Controller
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
            
            $custom = Member::where('mobile_tel', $request->mobile_tel)->where('shop_id', Auth::user()->shop_id)->first();
            
            if($custom != null){
                Toastr::error('Member Existes With Given Phone Number', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
            }
            $customer = new Member();
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
                   Toastr::success('Member successfully created', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
                return redirect()->route('member.list');
            } else {
                Toastr::error('Something Went Wrong', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
                return redirect()->route('member.list');
            }
        } else {
            $result = Member::select('profile_no')->latest()->first();
            if($result != null)
            {
                $number = (int)$result['profile_no'];
                $number++;
            }
            else{
                $number = 1;
            }
            return view('member.add')->with('num',$number);
        }
    }
    
    
    
    
    public function edit(Request $request, $id)
    {
        $customer = Member::where('shop_id', Auth::user()->shop_id)->where('id', $id)->firstOrFail();
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
                   Toastr::success('Doctor successfully updated', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
                return redirect()->route('member.list');
            } else {
                Toastr::error('Something Went Wrong', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
                return redirect()->route('member.list');
            }
        } else {
            
            return view('member.edit', compact('customer'));
        }
    }
    
    
     public function delete(Request $request, $id)
    {
        $customer = Member::where('shop_id', Auth::user()->shop_id)->where('id', $id)->firstOrFail();

        if($customer->delete()){
               Toastr::success('Member successfully Deleted', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
            return redirect()->route('member.list');
        } else {
            Toastr::error('Something Went Wrong', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-top-right']);
            return redirect()->route('member.list');
        }

    }
    
    
     
    public function getDependentMembers(Request $request)
    {
        $input = $request->all();
        $customer = DependentMember::where('Profile_No',$input['depmem_id'])->get();
        return $customer;

    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Member::select('*')->where('shop_id', Auth::user()->shop_id)->latest();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a type="button" class="badge bg-primary" id="'.$row->Profile_No.'" onclick="dMembers(this.id)"><i class="fas fa-user text-light"></i></a> <a href="'.route('member.edit', $row->id).'" class="badge bg-primary"><i class="fas fa-edit"></i></a><a onclick="return confirm(\'Are you sure?\')" href="'.route('member.delete', $row->id).'" class="badge bg-danger"><i class="fas fa-trash"></i></a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $customer = Member::where('shop_id', Auth::user()->shop_id)->get();
        
        return view('member.list', compact('customer'));
    }
}
