@extends('admin.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <form class="card" action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <h3 class="card-title">Edit Profile</h3>
                        <div class="row row-cards">

                            <div class="col-md-12">
                                <x-admin.image-preview :src="asset(auth()->user()->avatar)" height="128" width="128" />
                            </div>

                            <div class="col-md-12">
                                <x-admin.input-text type="file" name="avatar" label="Avatar" />
                            </div>

                            <div class="col-md-6">
                                <x-admin.input-text name="name" label="Name" :value="auth()->user()->name" />
                            </div>

                            <div class="col-md-6">
                                <x-admin.input-text name="email" label="Email" :value="auth()->user()->email" />
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
