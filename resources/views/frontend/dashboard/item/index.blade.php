@extends('frontend.dashboard.layouts.master')

@section('content')
    <div class="wsus__dash_order_table">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5>My Items</h5>
                <p>Manage your items.</p>
            </div>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    {{ __('Add Item') }}
                </button>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="details">
                            Details
                        </th>
                        <th class="price">
                            Price
                        </th>
                        <th class="p_date">
                            Publish Date
                        </th>
                        <th class="status">
                            Status
                        </th>
                        <th class="action">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td class="details">
                                <div>
                                    <div>
                                        @if ($item->preview_type == 'image')
                                            <img src="{{ asset($item->preview_image) }}" alt="">
                                        @elseif($item->preview_type == 'video')
                                            <img src="" alt="">
                                        @elseif($item->preview_type == 'audio')
                                            <img src="" alt="">
                                        @endif
                                    </div>
                                    <div>
                                        <h6>{{ $item->name }}</h6>
                                        <div class="d-flex">
                                            <span class="text-primary">{{ $item->category->name }}</span>
                                            <span class="ms-2 me-2">/</span>
                                            <span class="text-primary">{{ $item->subCategory->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="details">
                                <a class="title" href="#">Complete Blender Creator Learn 3D Modelling.</a>
                            </td>
                            <td class="p_date">
                                <p>2021-12-28</p>
                            </td>
                            <td class="e_date">
                                <p>2021-12-28</p>
                            </td>
                            <td class="price">
                                <p>$300</p>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form action="{{ route('user.items.create') }}" method="GET">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <x-frontend.input-select name="category" :label="__('Category')" :required="true">
                            @foreach ($categories as $category)
                                <option value="{{ $category->slug }}">{{ $category->name }}</option>
                            @endforeach
                        </x-frontend.input-select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
