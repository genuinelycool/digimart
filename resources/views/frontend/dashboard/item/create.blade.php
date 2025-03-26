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

    <form action="">
        <div class="wsus__dash_order_table mt-3">
            <div>
                <h6>Name And Description</h6>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-12">
                    <x-frontend.input-text name="name" :label="__('Name')" :required="true" />
                </div>
                <div class="col-md-12">
                    <x-frontend.text-area name="description" id="editor" :label="__('Description')" :required="true" />
                </div>
            </div>
        </div>

        <div class="wsus__dash_order_table mt-3">
            <div>
                <h6>Category And Attributes</h6>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-12">
                    <x-frontend.input-select name="category" :label="__('Category')" :required="true" disabled >
                        @foreach ($categories as $categoryItem)
                        <option @selected($selectedCategory->slug == $categoryItem->slug) value="{{ $categoryItem->slug }}">{{ $categoryItem->name }}</option>
                        @endforeach
                    </x-frontend.input-select>
                </div>
                <div class="col-md-12">
                    <x-frontend.input-select name="sub_category" class="select_2" :label="__('Sub Category')" :required="true" >
                        @foreach ($selectedCategory->subCategories as $subCategory)
                        <option value="{{ $subCategory->slug }}">{{ $subCategory->name }}</option>
                        @endforeach
                    </x-frontend.input-select>
                </div>
                <div class="col-md-12">
                    <x-frontend.input-text name="version" :label="__('Version')" :required="true" />
                </div>
                <div class="col-md-12">
                    <x-frontend.input-text name="demo_link" :label="__('Demo Link (Optional)')" />
                </div>

                <div class="col-md-12">
                    <label for="" class="form-label mb-2 font-18 font-heading fw-600">
                        {{ __('Tags') }} <span>*</span>
                    </label>
                    <br>
                    <input type="text" value="" data-role="tagsinput" />
                </div>
            </div>
        </div>
    </form>
@endsection
