<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KYCSettingController extends Controller
{
    function index() : View
    {
         return view('admin.kyc.kyc-setting.index');
    }
}
