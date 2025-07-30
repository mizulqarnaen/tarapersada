<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Information;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $company = Information::get()->first();
        $categories = Category::all();
        $articles = Article::all()->take(3);
        $services = Service::all();
        $logo = Gallery::where('type', 'logo')->first();
        $whatsapps = Contact::where('type', 'whatsapp')->get();
        $phone = Contact::where('type', 'phone')->first();
        $socialLinks = Contact::whereIn('type', ['facebook', 'instagram', 'linkedin', 'website'])->get();
        $clients = Client::all();
        $marketings = Gallery::where('type', 'marketing')->get();

        return view(
            'frontend.pages.index',
            compact('company', 'categories', 'articles', 'services', 'logo', 'whatsapps', 'phone', 'socialLinks', 'clients', 'marketings')
        );
    }

    public function aboutUs()
    {
        $company = Information::get()->first();
        $categories = Category::all();
        $articles = Article::all()->take(3);
        $services = Service::all();
        $logo = Gallery::where('type', 'logo')->first();
        $legalities = Gallery::where('type', 'legality')->get();
        $whatsapps = Contact::where('type', 'whatsapp')->get();
        $phone = Contact::where('type', 'phone')->first();
        $socialLinks = Contact::whereIn('type', ['facebook', 'instagram', 'linkedin', 'website'])->get();

        return view('frontend.pages.about-us', compact('logo', 'whatsapps', 'phone', 'socialLinks', 'company', 'articles', 'categories', 'services', 'legalities'));
    }
}
