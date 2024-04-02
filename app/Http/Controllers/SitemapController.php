<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Response;
use Illuminate\Routing\Controller;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = app("sitemap");

        // Statik sayfaları ekleme
        $sitemap->add(URL::to('/'), null, '1.0', 'daily');

        // Dinamik olarak sayfaları ekleme
        $pages = DB::table('pages')->orderBy('created_at', 'desc')->get();
        foreach ($pages as $page) {
            $sitemap->add(URL::to('/page/' . $page->id), $page->updated_at, '0.9', 'daily');
        }

        // XML sitemap'i oluşturma
        $sitemap = $sitemap->render('xml');

        // HTTP başlıklarını ayarlama
        return Response::make($sitemap)->header('Content-Type', 'application/xml');
    }
}

