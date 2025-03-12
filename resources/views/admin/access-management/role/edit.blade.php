@extends('admin.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Update Role') }}</h3>

                        <div class="card-actions">
                            <a href="{{ route('admin.roles.index') }}" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 5l0 14"></path>
                                    <path d="M5 12l14 0"></path>
                                </svg>
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="col-md-12">
                                <x-admin.input-text name="role" :label="__('Role Name')" value="{{ $role->name }}" />
                            </div>
                            <hr>
                            <div class="row">
                                @foreach ($permissions as $groupName => $permissionItems)
                                    <div class="col-md-4">
                                        <h3>{{ $groupName }}</h3>
                                        @foreach ($permissionItems as $permission)
                                            <label class="form-check">
                                                <input @checked($role->hasPermissionTo($permission->name)) class="form-check-input" type="checkbox" value="{{ $permission->name }}" name="permissions[]">
                                                <span class="form-check-label">{{ $permission->name }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" onclick="$('form').submit();" class="btn btn-primary">{{ __('Update') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
