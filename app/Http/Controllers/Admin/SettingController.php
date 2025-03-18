<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GeneralSettingUpdateRequest;
use App\Models\Setting;
use App\Services\NotificationService;
use App\Services\SettingService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function index(): View
    {
        // dd(config('settings'));
        return view('admin.setting.pages.general-setting');
    }

    function updateGeneralSetting(GeneralSettingUpdateRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $setting = app()->make(SettingService::class);
        $setting->clearCachedSettings();

        NotificationService::UPDATED();

        return redirect()->back();
    }
}
