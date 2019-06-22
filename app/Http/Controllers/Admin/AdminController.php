<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function AuthLogin(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required',
                'password' => 'required|min:6|max:32'
            ],
            [
                'email.required' => 'Bạn chưa nhập Địa chỉ Email!',
                'password.required' => 'Bạn chưa nhập Mật khẩu!',
                'password.min' => 'Mật Khẩu gồm tối thiểu 6 ký tự!',
                'password.max' => 'Mật Khẩu gồm tối đa 32 ký tự!'
            ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            return redirect()->route('admin-home');
        else
            return redirect('admin/login')->with('message','Đăng Nhập không thành công!');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }

}
