@extends('admin.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('KYC Settings') }}</h3>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <x-admin.input-toggle name="nid_verification" label="NID Verification" />
                                </div>

                                <div class="col-md-4">
                                    <x-admin.input-toggle name="passport_verification" label="Passport Verification" />
                                </div>

                                <div class="col-md-4">
                                    <x-admin.input-toggle name="auto_approve" label="Auto Approve" />
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <x-admin.input-textarea name="instructions" label="Instructions" />
                                </div>
                                <div class="col-md-12">
                                    <x-admin.input-select name="kyc_status" label="KYC Status" >
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </x-admin.input-select>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-end">
                        <button class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
