@extends('admin.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('All Categories') }}</h3>

                        <div class="card-actions">
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                                <i class="ti ti-plus"></i>
                                {{ __('Add new') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Icon') }}</th>
                                            <th>{{ __('Category Name') }}</th>
                                            <th>{{ __('File Types') }}</th>
                                            <th>{{ __('Date') }}</th>
                                            <th class="w-8"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $category)
                                        <tr>
                                            <td><i class="{{ $category->icon }}"></i></td>
                                            <td>
                                                {{ $category->name }}
                                            </td>
                                            <td>
                                                @foreach ($category->file_types as $file_type)
                                                    <span class="badge bg-primary text-primary-fg">{{ $file_type }}</span>
                                                @endforeach
                                            </td>
                                            <td>{{ formatDate($category->created_at) }}</td>
                                            <td>
                                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                    class="text-primary"><i class="ti ti-edit"></i></a>
                                                <a class="delete-item text-danger"
                                                    href="{{ route('admin.categories.destroy', $category->id) }}"><i
                                                        class="ti ti-trash"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                            <td colspan="5" class="text-center text-secondary">
                                                {{ __('No categories found') }}
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
