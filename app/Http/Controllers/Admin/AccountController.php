<?php

namespace App\Http\Controllers\Admin;

use Gate;
use Auth;
use App\Models\Admin\Role;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{

    public function __construct() {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if(Gate::allows('account-view', auth()->user())) {
            $users = Admin::all();
            return view('admin.account.show', compact('users'));
        }

        return "This action not for you.";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        if(Gate::allows('account-create', auth()->user())) {
            $roles = Role::all();
            return view('admin.account.create', compact('roles'));
        }

        return "This action not for you.";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15|unique:admins',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $request['password'] = bcrypt($request->password);

        $admin = Admin::create($request->all());

        $admin->roles()->sync($request->role);

        return redirect(route('account.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        if(Gate::allows('account-update', auth()->user())) {
            $user = Admin::find($id);
            $roles = Role::all();

            return view('admin.account.edit', compact('user', 'roles'));
        }

        return "This action not for you.";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            // 'password' => 'required|string|min:6|confirmed',
        ]);

        $admin = Admin::where('id', $id)->update($request->except('_token', '_method', 'role'));

        Admin::find($id)->roles()->sync($request->role);

        return redirect(route('account.index'))->with('message', 'Admin updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        if(Gate::allows('account-delete', auth()->user())) {
            Admin::where('id', $id)->delete();
            return redirect()->back()->with('message', 'Admin is deleted successfully!');
        }

        return "This action not for you.";
    }
}
