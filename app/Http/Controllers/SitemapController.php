<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Отдаем статический sitemap.xml файл, сгенерированный командой sitemap:generate
     * Статический файл быстрее и не требует запросов к БД.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $path = public_path('sitemap.xml');

        if (!file_exists($path)) {
            abort(404, 'Sitemap not found. Run: php artisan sitemap:generate');
        }

        return response()->file($path, [
            'Content-Type' => 'application/xml',
        ]);
    }
}

