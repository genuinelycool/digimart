@extends('admin.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Create Category') }}</h3>

                        <div class="card-actions">
                            <x-admin.back-button :href="route('admin.categories.index')" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <x-admin.input-text name="name" :label="__('Category Name')" />
                            </div>

                            <div class="col-md-12">
                                <x-admin.input-text name="file_types[]" :label="__('File Types')" data-role="tagsinput" />
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
@endsection
