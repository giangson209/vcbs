<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use App\Models\Menu;
use App\Models\Options;
use DB;
use Illuminate\Http\Request;
use Mail;
use Session;
use OpenGraph;
use SEO;
use SEOMeta;

class IndexController extends Controller
{
    public $config_info;

    public function __construct()
    {
        $site_info = Options::where('type', 'general')->first();
        $site_info = json_decode($site_info->content);
        $this->config_info = $site_info;
        OpenGraph::setUrl(\URL::current());
        OpenGraph::addProperty('locale', 'vi');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('author', 'inin-tuvanweb.com');
        SEO::setTitle($site_info->site_title);
        SEOMeta::addKeyword($site_info->site_keyword);
        SEOMeta::setDescription($site_info->site_description);
        OpenGraph::setDescription($site_info->site_description);
        OpenGraph::addImage($site_info->logo_share, ['height' => 400, 'width' => 400]);
    }

    public function changeLocale($locale)
    {
        session(['lang' => $locale]);
        return redirect()->back();
    }

    public function getHome()
    {
        Artisan::call('cache:clear');
        return view('frontend.pages.index');
    }
}
