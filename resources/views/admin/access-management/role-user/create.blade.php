@extends('admin.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Create User') }}</h3>

                        <div class="card-actions">
                            <a href="{{ route('admin.roles.index') }}" class="btn btn-primary">
                                <i class="ti ti-plus"></i>
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <x-admin.input-text name="name" :label="__('Name')" />
                                </div>
                                <div class="col-md-6">
                                    <x-admin.input-text name="email" :label="__('Email')" />
                                </div>
                                <div class="col-md-6">
                                    <x-admin.input-text type="password" name="password" :label="__('Password')" />
                                </div>
                                <div class="col-md-6">
                                    <x-admin.input-text type="password" name="password_conformation" :label="__('Confirm Password')" />
                                </div>
                                <div class="col-md-12">
                                    <x-admin.input-select name="roles" :label="__('Roles')">

                                    </x-admin.input-select>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-end">
                        <x-admin.submit-button :label="__('Create')" onclick="$('form').submit();" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
