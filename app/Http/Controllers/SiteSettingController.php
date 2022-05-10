<?php

namespace App\Http\Controllers;

use App\site_setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteSettingController extends Controller
{
    public function site_settings() {
        $settings = site_setting::find(1);
        return view('SiteSettings.site_setting', compact('settings'));
    }

    public function settings_update(Request $request) {

        $validated = $request->validate([
           $this->validate($request, ['file' => 'logo|mimes:jpeg,png,jpg,gif,svg|max:2048',]),
           'site_name' => ['required', 'string', 'max:255'],
           'whatsapp' => ['required', 'string', 'max:255'],
           'facebook' => ['required', 'string', 'max:255'],
           'instagram' => ['required', 'string', 'max:255'],
           'twitter' => ['required', 'string', 'max:255'],
           'tiktok' => ['required', 'string', 'max:255'],
           'messenger' => ['required', 'string', 'max:255'],
           'youtube' => ['required', 'string', 'max:255'],
           'copyright' => ['required', 'string', 'max:255'],
        ]);


        $logo_url = '';

        if($request->hasFile('logo')) {
            $file = $request->file('logo');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $path =public_path('/logo');
            $file->move($path, $new_name);
            $logo_url = asset('logo/'.$new_name);
        }

        // dd($logo_url);

        $data = [
            'logo' => $logo_url,
            'site_name' => $request-> get('site_name'),
            'whatsapp' => $request-> get('whatsapp'),
            'instagram' => $request-> get('instagram'),
            'facebook' => $request-> get('facebook'),
            'twitter' => $request-> get('twitter'),
            'tiktok' => $request-> get('tiktok'),
            'messenger' => $request-> get('messenger'),
            'youtube' => $request-> get('youtube'),
            'copyright' => $request-> get('copyright'),
        ];

        DB::table('site_settings')->truncate();
        site_setting::insert($data);
        // dd('Done!');
        return redirect()->back();
    }
}
