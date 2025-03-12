<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleStoreRequest;
use App\Http\Requests\Admin\RoleUpdateRequest;
use App\Services\NotificationService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $roles = Role::withCount('permissions')->get();
        // dd($roles);
        return view('admin.access-management.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $permissions = Permission::all()->groupBy('group_name');

        return view('admin.access-management.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleStoreRequest $request) : RedirectResponse
    {
        $role = Role::create([
            'name' => $request->role,
            'guard_name' => 'admin'
        ]);

        $role->syncPermissions($request->permissions);

        NotificationService::CREATED();

        return to_route('admin.roles.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role) : View
    {
        $permissions = Permission::all()->groupBy('group_name');

        return view('admin.access-management.role.edit', compact('permissions', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleUpdateRequest $request, Role $role)
    {
        $role->name = $request->role;
        $role->save();

        $role->syncPermissions($request->permissions);

        NotificationService::UPDATED();

        return to_route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
    }
}
