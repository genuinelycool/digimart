@extends('admin.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('All Roles') }}</h3>

                        <div class="card-actions">
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 5l0 14"></path>
                                    <path d="M5 12l14 0"></path>
                                </svg>
                                Add new
                            </a>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Role') }}</th>
                                            <th>{{ __('Permissions') }}</th>
                                            <th class="w-8"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($roles as $role)
                                            <tr>
                                                <td>{{ $role->name }}</td>
                                                <td class="text-secondary">
                                                    {{ $role->permissions_count }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.roles.edit', $role->id) }}" class="text-primary"><i class="ti ti-edit"></i></a>
                                                    <a class="delete-item text-danger" href="{{ route('admin.roles.destroy', $role->id) }}"><i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                        @empty
                                            <td colspan="3" class="text-center">
                                                {{ __('No roles found') }}
                                            </td>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
