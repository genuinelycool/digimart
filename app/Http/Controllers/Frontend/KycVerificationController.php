<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\KycVerificationStoreRequest;
use App\Models\KycSetting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KycVerificationController extends Controller
{
    function index() : View
    {
        $kycSetting = KycSetting::first();
        return view('frontend.pages.kyc', compact('kycSetting'));
    }

    function store(KycVerificationStoreRequest $request) : RedirectResponse
    {
        dd($request->all());
    }
}
