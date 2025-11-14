<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('perfil.edit', compact('user'));
    }
    public function update(Request $req)
    {
        $user = Auth::user();
        $data = $req->validate([
            'name'=>'required|string|max:255',
            'email'=>['required',
            'email',Rule::unique('users')->ignore($user->id)],
            'password'=>'nullable|confirmed|min:6']);
            
        $user->name = $data['name'];
        $user->email = $data['email'];
        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        $user->save();
        return redirect()->route('profile.edit')->with('success','Perfil atualizado');
    }
}
