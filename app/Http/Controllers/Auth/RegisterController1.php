<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Session;
use App\Dropper;
use App\Picker;
class RegisterController1 extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:dropper');
        $this->middleware('guest:picker');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function show(){
        return view('registration');
    }

    public function signup(Request $request){
        $r=$request->input('role');
        if ($r== 'Dropper') {
            $rules = [
                'name' => 'required',
                'email' => 'required|email|unique:droppers|unique:pickers',
                'password' => 'required|min:6',
                'confirmpass' => 'required|same:password',
                'contact' => 'required|min:12|max:12',
                'cnic' => 'required|min:15|max:15',
                'role' => 'required',
                'g-recaptcha-response' => 'required|captcha',
            ];
            $this->validate($request,$rules);

            $dropper = new Dropper ();
        $dropper->dname = $request->input('name');
        $dropper->email = $request->input ( 'email' );
        $dropper->dcnic = $request->input ( 'cnic' );
        $dropper->dcontact = $request->input ( 'contact' );
        $dropper->password = Hash::make ( $request->input( 'password' ) );
        //$dropper->password =( $request->get ( 'password' ) );
        $dropper->save ();
        Session::flash('flash_success','Welcome to Droppic Your account has been created and now you can login.');
        return redirect()->intended(route('show.signin'));
        } else {
            if ($r=='Picker') {
                $rules = [
                    'name' => 'required',
                    'email' => 'required|email|unique:droppers|unique:pickers',
                    'password' => 'required|min:6',
                    'confirmpass' => 'required|same:password',
                    'contact' => 'required|min:12|max:12',
                    'cnic' => 'required|min:15|max:15',
                    'role' => 'required',
                    'category' => 'required',
                    'g-recaptcha-response' => 'required|captcha',
                ];
                $this->validate($request,$rules);

                $picker = new Picker ();
            $picker->pname = $request->input('name');
            $picker->email = $request->input ( 'email' );
            $picker->pcnic = $request->input ( 'cnic' );
            $picker->pcontact = $request->input ( 'contact' );
            $picker->pcontact = $request->input ( 'contact' );
            $picker->picker_category_id = $request->input ( 'category' );
            $picker->password = Hash::make ( $request->input( 'password' ) );
            //$dropper->password =( $request->get ( 'password' ) );
            $picker->save ();
            Session::flash('flash_success','Welcome to Droppic Your account has been created and now you can login.');
            return redirect()->intended(route('show.signin'));
            } else {
                # code...
            }

        }



    }
}
