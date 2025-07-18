<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\resetpassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class AuthController extends Controller
{

    public function login(Request $request){

        if ($request->method() == "POST") {
            if ($request->method() == "POST") {
                $credentials = $request->validate([
                    'email' => ['required'],
                    'password' => ['required'],
                ]);

                // echo "<pre>";
                // dd($request->all());
                // die;

                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
         
                    if (Auth::user()->role == "superadmin") {
                       return redirect('/admin/dashboard')->with('success','Login Success!');
                    }elseif(Auth::user()->role == "superadmin") {
                        return redirect('/admin/dashboard')->with('success','Login Success!');
                     }elseif(Auth::user()->role == "driver"){
                         return redirect('/Driver/dashboard')->with('success','Login Success!');
                     }
                     elseif (Auth::user()->role == "admin" || Auth::user()->role == "manager") {
                         return redirect('/admin/dashboard')->with('success','Manager Login Success!');
                     }else{
                        return redirect()->back()->with('error','Invalid Email & Password');
                    };
                }
                else {
                    return back()->withErrors([
                        'email' => 'The provided credentials do not match our records.',
                    ])->onlyInput('email');
                    return redirect()->back()->with('error','Invalid Email & Password');
                }
                
            }
        }else{
        return view('auth.login');
    }
    }

    public function sign_up(Request $request){
        if ($request->method() == "POST") {
            $validated = $request->validate([
                'role' => 'required',
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $userdata = [
                'role' => $request->role,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];

            User::create($userdata);
            return redirect('/sign-in')->with('success','Registration complete ! Login Your Account');

        }
        return view('users/signup');
    }

    public function signin(Request $request){
        if ($request->method() == "POST") {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                if (Auth::user()->role == "superadmin") {
                   return redirect('/admin/dashboard')->with('success','Login Success!');
                }elseif(Auth::user()->role == "agent"){
                    return redirect('/admin/dashboard')->with('success','Agent Login Success!');
                }elseif (Auth::user()->role == "builder") {
                    return redirect('/admin/dashboard')->with('success','Builder Login Success!');
                }
               else{



                    return redirect()->back()->with('error','Invalid Email & Password');
                }
            }
            else {
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ])->onlyInput('email');
                // return redirect()->back()->with('error','Invalid Email & Password');
            }

        }
        return view('users/signin');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('adminlogin');
    }

    public function fotgotpassword(Request $request){
          if ($request->method() == "POST") {
            $validated = $request->validate([
                'email' => 'required|email',
            ]);
            $user = User::GetSingleEmail($request->email);
            if (!empty($user)){
                $user->remember_token = Str::random(40);
                $user->save();
                Mail::to($user->email)->send(new resetpassword($user));

                return redirect()->back()->with('success','Reset Link Sent Successfully.Please Check Your Email');

            }else {
                return redirect()->back()->with('error','You have entered wrong email address');
            }
        }
         return view('auth.forgott_password');
    }


    public function ResetPassword(Request $request,$token){
        if ($request->method() == "POST") {
            $validated = $request->validate([
                'password' => 'required|min:8',
                'confirm_password' => 'required|same:password',
            ]);
            if ($request->password ==  $request->confirm_password) {
                $user = User::GetSingleToken($token);
                $user->remember_token = Str::random(40);
                $user->password = Hash::make($request->password);
                $user->codeid = $request->password;
                $user->save();
                return redirect('/admin-login')->with('success','Password Changed Successfully. Please login now.');
                // return response()->json(['success' => 'Password Reset Successfully']);
            }else {
                return redirect()->back()->with('error','Password not matched. Please try again..');
            }
        }
        $user = User::GetSingleToken($token);
        if (!empty($user)){
            $data['tittle'] = "Change Password";
            $data['user'] = $user;
            $data['token'] = $token;
            return view('auth.changepassword', $data);
        }else {
            abort(404);
        }
    }




    public function profile()  {

        return view('users.profile');

    }


    public function create_access(Request $request)
    {
        if ($request->method() == "POST") {
            $access = new User;
    
            // Generate Login ID (email) for admin and manager roles
            if (in_array($request->role, ['driver', 'manager'])) {
                // Get the last user with the 'admin' or 'manager' role
                $lastUser = User::whereIn('role', ['driver', 'manager'])->orderByDesc('id')->first();
                
                // Generate the next ID by extracting the last 4 digits of the last user's email
                $newId = $lastUser ? str_pad((intval($lastUser->email) + 1), 4, '0', STR_PAD_LEFT) : '0001'; // Default to '0001' if no previous users exist
                
                // Store the ID (without the domain)
                $access->email = $newId; // Only store the ID, without the domain
            }
    
            // Other fields
            $access->name = $request->name;
            $access->phone = $request->phone;
            $access->password = Hash::make($request->password);
            $access->codeid = $request->password;
            $access->role = $request->role;
            $access->status = $request->status;
            
            // Save the record
            $access->save();
    
            return redirect('/admin/access-list')->with('success', 'Created new member!');
        }
    
        return view('admin.access.add');
    }
    
    

    public function access_list(Request $request)
    {
        $query = User::whereIn('role', ['manager', 'driver']); // Start query builder
    
        // Apply search filter
        if ($request->has('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%')
                  ->orWhere('phone', 'like', '%' . $request->search . '%'); // Assuming mobile exists in users table
            });
        }
    
        $access = $query->latest()->paginate(10)->appends(['search' => $request->search]);
    
        return view('admin.access.index', compact('access'));
    }
    
    

    public function access_edit(Request $request,$id){
        $access = User::find($id);
        if ($request->method() == "POST") {
            
            $access->name = $request->name;
            $access->phone = $request->phone;
            $access->password = Hash::make($request->password);
            $access->role = $request->role;
            $access->status = $request->status;
            $access->save();
            return redirect('/admin/access-list')->with('success', 'updated data!');
        }
        return view('admin.access.edit', compact('access'));
    
    }


    public function access_delete($id){
        $access = User::find($id);
        $access->delete();
        return redirect('/admin/access-list')->with('success','Remove This member');
    }

}