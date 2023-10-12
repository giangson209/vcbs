<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Options;
use App\Mail\SendTestEmail;
use Mail;
use App\Trails\MailTrait;



class SettingController extends Controller
{
    use MailTrait;

    public function getGeneralConfig()
    {
        $content = Options::where('type', 'general')->first();
        $content = json_decode($content->content);
        return view('backend.options.general', compact('content'));
    }

    public function postGeneralConfig(Request $request)
    {
        $options = Options::where('type', 'general')->first();
        $options->content = !empty($request->input('content')) ? json_encode($request->input('content')) : null;
        $options->save();
        flash('Cập nhật thành công.')->success();
        return back();
    }
}
