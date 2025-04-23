@extends('admin.layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Item Details') }}</h3>

                        <div class="card-actions">
                            <x-admin.back-button :href="route('admin.item-reviews.pending.index')" />
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">{{ __('Item Details') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">{{ __('History') }}</button>
                            </li>

                            @if ($item->status == 'pending' || $item->status == 'resubmitted' || admin()->hasRole('super admin'))
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">{{ __('Status') }}</button>
                                </li>
                            @endif
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="accordion" id="accordion-example">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                                aria-expanded="false">
                                                {{ __('Preview') }}
                                            </button>
                                        </h2>
                                        <div id="collapse-1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-example">
                                            <div class="accordion-body pt-0">
                                                @if ($item->preview_type == 'image')
                                                    <img style="max-height: 600px; width: 100%; object-fit: cover;"
                                                        src="{{ asset($item->preview_image) }}" alt=""
                                                        class="img-fluid">
                                                @elseif($item->preview_type == 'video')
                                                    <iframe src="{{ asset($item->preview_video) }}"
                                                        frameborder="0"></iframe>
                                                @elseif($item->preview_type == 'audio')
                                                    <audio src="{{ asset($item->preview_audio) }}" controls></audio>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                                aria-expanded="false">
                                                {{ __('Screenshots') }}
                                            </button>
                                        </h2>
                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-example">
                                            <div class="accordion-body pt-0">
                                                <div id="carousel-controls" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @foreach ($item->screenshots as $screenshot)
                                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                <img class="d-block w-100" alt=""
                                                                    src="{{ asset($screenshot) }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carousel-controls"
                                                        role="button" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carousel-controls"
                                                        role="button" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                aria-expanded="false">
                                                {{ __('Description') }}
                                            </button>
                                        </h2>
                                        <div id="collapse-3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-example">
                                            <div class="accordion-body pt-0">
                                                {!! $item->description !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                aria-expanded="false">
                                                {{ __('Support') }}
                                            </button>
                                        </h2>
                                        <div id="collapse-4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-example">
                                            <div class="accordion-body pt-0">
                                                @if ($item->is_supported == 1)
                                                    <span class="badge bg-success text-white">{{ __('Supported') }}</span>
                                                @else
                                                    <span
                                                        class="badge bg-danger text-white">{{ __('Not Supported') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                                aria-expanded="false">
                                                {{ __('Price') }}
                                            </button>
                                        </h2>
                                        <div id="collapse-5" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-example">
                                            <div class="accordion-body pt-0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <x-admin.input-text name="price" :value="$item->price"
                                                            :label="__('Regular Price')" disabled />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <x-admin.input-text name="discount_price" :value="$item->discount_price"
                                                            :label="__('Discount Price')" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-6"
                                                aria-expanded="false">
                                                {{ __('Free Item') }}
                                            </button>
                                        </h2>
                                        <div id="collapse-6" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion-example">
                                            <div class="accordion-body pt-0">
                                                @if ($item->is_free == 1)
                                                    <span class="badge bg-success text-white">{{ __('Free Item') }}</span>
                                                @else
                                                    <span class="badge bg-danger text-white">{{ __('Not Free') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                @forelse ($item->histories as $history)
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <h4>{{ $history->title }}</h4>
                                            <p>{{ $history->body }} </p>
                                            <p>{{ __('Status') }} : {{ Str::replace('_', ' ', $history->status) }}</p>
                                            <hr>
                                            <span>{{ __('Date') }}: {{ formatDate($history->created_at) }}</span>
                                        </div>
                                    </div>
                                @empty
                                    <div class="wsus__dash_order_table mt-3">
                                        No data
                                    </div>
                                @endforelse
                            </div>

                            @if ($item->status == 'pending' || $item->status == 'resubmitted' || admin()->hasRole('super admin'))
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" tabindex="0">
                                    <form action="{{ route('admin.item-reviews.status', $item->id) }}" method="POST">
                                        @csrf
                                        <x-admin.input-select name="status" :label="__('Status')" id="status">
                                            <option value="soft_rejected" @selected($item->status == 'soft_rejected')>Soft Reject</option>
                                            <option value="hard_rejected" @selected($item->status == 'hard_rejected')>Hard Reject</option>
                                            <option value="approved" @selected($item->status == 'approved')>Approve</option>
                                        </x-admin.input-select>

                                        <div class="d-none" id="reason">
                                            <x-admin.input-textarea name="reason" :label="__('Reason')" :value="$item->reject_reason" />
                                        </div>

                                        <x-admin.submit-button :label="__('Update')" />
                                    </form>
                                </div>
                            @endif
                        </div>

                    </div>

                    <div class="card-footer text-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        'use strict';
        $(function() {
            $('#status').on('change', function() {
                let status = $(this).val();
                if (status == 'soft_rejected' || status == 'hard_rejected') {
                    $('#reason').removeClass('d-none');
                } else {
                    $('#reason').addClass('d-none');
                }
            })
        })
    </script>
@endpush
