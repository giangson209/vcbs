<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLevel', ['except' => ['edit','update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('backend.users.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->user_name = $request->user_name;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = $request->status;
        $user->level = $request->level;
        $user->image = $request->image;
        $user->save();
        flash('Thêm mới thành công.')->success();
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('backend.users.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
		
        if (!empty($request->input('repassword'))) {
            $this->validate($request,
            [
                'password'      => 'min:8|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]+$/',
                'repassword'    => 'same:password'
            ],
            [
                'repassword.same'         => 'Mật khẩu nhập lại không giống !',
                'password.string'       => 'Mật khẩu phải là một chuỗi.',
                'password.regex'        => 'Bạn cần nhập mật khẩu chứa các ký tự chữ (hoa và thường), số và ký tự đặc biệt.',
                'password.min'          => 'Bạn cần nhập mật khẩu nhiều hơn 8 ký tự.',
            ]);
            $pass = $request->input('password');
            $user->password = Hash::make($pass);
        }
        if($user->user_name != 'admin'){
            $user->status = $request->status;
        }
        
        
        if (!empty($request->level)) {
            $user->level = $request->level;
        }
        $user->image = $request->image;
        $user->save();
        flash('Cập nhật thành công.')->success();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->destroy($id);
        flash('Xóa thành công.')->success();
        return back();
    }
}
