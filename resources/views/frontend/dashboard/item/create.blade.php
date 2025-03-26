@extends('frontend.dashboard.layouts.master')

@section('content')
    <div class="wsus__dash_order_table">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5>New Item</h5>
                <p>Manage your items.</p>
            </div>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    {{ __('Back') }}
                </button>

            </div>
        </div>
    </div>

    <div class="wsus__dash_order_table mt-3">
        <div>
            <h6>Name And Description</h6>
        </div>

        <hr>
        <form action="">
            <div class="row">
                <div class="col-md-12">
                    <x-frontend.input-text name="name" :label="__('Name')" :required="true" />
                </div>
                <div class="col-md-12">
                    <x-frontend.text-area name="description" id="editor" :label="__('Description')" :required="true" />
                </div>
            </div>
        </form>
    </div>
@endsection
