<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleUserStoreRequest;
use App\Models\Admin;
use App\Services\NotificationService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $admins = Admin::all();
        return view('admin.access-management.role-user.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $roles = Role::all();
        return view('admin.access-management.role-user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleUserStoreRequest $request) : RedirectResponse
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();

        // Assign role to user
        $admin->assignRole($request->role);

        NotificationService::CREATED();

        return to_route('admin.role-users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $role_user) : View
    {
        $roles = Role::all();
        $admin = $role_user;
        return view('admin.access-management.role-user.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
