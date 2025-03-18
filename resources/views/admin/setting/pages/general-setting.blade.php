@extends('admin.setting.master')

@section('setting_content')
    <div class="col-12 col-md-9 d-flex flex-column">
        <div class="card-body">
            <h2 class="mb-4">{{ __('General Settings') }}</h2>
            <form action="{{ route('admin.settings.general.update') }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <x-admin.input-text name="site_name" label="Site Name" />
                    </div>
                    <div class="col-md-6">
                        <x-admin.input-text name="site_email" label="Site Email" />
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">
                <x-admin.submit-button :label="__('Save')" onclick="$('form').submit();" />
            </div>
        </div>
    </div>
@endsection
