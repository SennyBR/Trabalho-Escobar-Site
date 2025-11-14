<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }
    public function login(Request $req)
    {
        $credentials = $req->validate(['email'=>'required|email','password'=>'required']);
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended(route('admin.veiculos.index'));
        }
        return back()->withErrors(['login'=>'Credenciais inválidas']);
    }
    public function showRegister()
    {
        return view('auth.register');
    }
    public function register(Request $req)
    {
        $data = $req->validate(['name'=>'required|string|max:255',
        'email'=>'required|email|unique:users',
        'password'=>'required|confirmed|min:6']);

        $user = User::create(['name'=>$data['name'],'email'=>$data['email'],
        'password'=>Hash::make($data['password'])]);
        
        Auth::login($user);
        return redirect()->route('admin.veiculos.index');
    }
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('home');
    }
}
