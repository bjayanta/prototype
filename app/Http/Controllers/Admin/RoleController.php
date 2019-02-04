<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Role;
use App\Models\Admin\Permission;

class RoleController extends Controller
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
        $roles = Role::all();
        return view('admin.role.show', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $permissions = Permission::all();

        return view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:50|unique:roles'
        ]);

        $role = new Role;
        $role->name = $request->name;
        $role->slug = str_replace(' ', '-', strtolower($request->name));
        $role->description = $request->description;
        $role->save();

        $role->permissions()->sync($request->permission);

        return redirect(route('role.index'));
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
        $role = Role::find($id);
        $permissions = Permission::all();

        return view('admin.role.edit', compact('role', 'permissions'));
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
            'name' => 'required|max:50'
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->slug = str_replace(' ', '-', strtolower($request->name));
        $role->description = $request->description;
        $role->save();

        $role->permissions()->sync($request->permission);

        return redirect(route('role.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Role::where('id', $id)->delete();

        return redirect()->back();
    }
}
