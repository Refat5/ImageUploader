<?php
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
  
class RegisterController extends Controller
{
  
    public function index()
    {
        return view('auth.register');
    }   
   
    public function register_create(RegisterRequest $request)
    {  
        $data = $request->all();
         $this->create($data);
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
   


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    

}