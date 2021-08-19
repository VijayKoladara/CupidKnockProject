<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Partener;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    
    public function index()
    {
        return view('welcome');
    }
    public function store(Request $req)
    {
        $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'dateofbirth' => 'required',
            'gender' => 'required',
            'annual_income' => 'required',
            'occupation' => 'required',
            'family_type' => 'required',
            'manglik' => 'required',
            
            
        ]);



        $customer = new Customer();
        // $getMonthReq = $request->month;
        // $months = implode(',', $getMonthReq);

        $customer->firstname = $req->first_name;
        $customer->lastname = $req->last_name;
        $customer->email = $req->email;
        $customer->password = Hash::make($req->password);
        $customer->date_of_birth = $req->dateofbirth;
        $customer->gender = $req->gender;
        $customer->annual_income = $req->annual_income;
        $customer->occupation = $req->occupation;
        $customer->family_type = $req->family_type;
        $customer->manglik = $req->manglik;

        $customer->save();

        $partener = new Partener();

        
        $getOccupation = $req->partener_occupation;
        $partener_occupation = implode(',', $getOccupation);
        $getFamilyType = $req->partener_family_type;
        $partener_family_type = implode(',', $getFamilyType);

        $partener->annual_income = $req->range;
        $partener->occupation = $partener_occupation;
        $partener->family_type = $partener_family_type;
        $partener->manglik = $req->p_manglik;

        $customer->partener()->save($partener);

        return redirect('login')->with('status','You Are Registred! Please Login Now!');
       
    }

    public function login()
    {
        return view('login');
    }

    public function check(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        $userInfo = Customer::where('email',"=",$request->email)->first();

        if(!$userInfo)
        {
            return back()->with('fail','We Do not Recognized Your Email');
        }
        else
        {
            if(Hash::check($request->password,$userInfo->password))
            {
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            }
            else
            {
                return back()->with('fail','Incorrect Password');
            }
        }
    }

    public function dashboard()
    {
        $data = ['LoggedUserInfo'=> Customer::where('id',"=",session('LoggedUser'))->first(),'LoggedPartenerInfo'=> Partener::where('customer_id',"=",session('LoggedUser'))->first()];
        

        return view('admin.dashboard',$data);
    }

    public function logout()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
}
