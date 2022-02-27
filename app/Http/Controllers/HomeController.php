<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Carbon\Carbon;
use App\Models\Imobil;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\HouseController;
use Illuminate\Http\Request;
use App\Services\ModelLogger;


class HomeController extends Controller
{
    public function index()
    {
         Article::select([
            'id',
            'title',
            'published_at',
         ])->where('published_at', '>=', Carbon::today()->startOfYear())
         ->where('published_at', '<=', Carbon::today()->endOfYear())
         ->get();

        Article::select([
            'id',
            'title',
            'published_at',
        ])->orderBy('published_at', 'DESC')->limit(5)->get();

        

        Article::select([
            'id',
            'title',
            'published_at',
        ])->where('category_id', '=', 5)->get();

        Article::select([
            'articles.id',
            'articles.title',
            'articles.published_at',
        ])
        ->join('blog_categories', 'blog_categories.id', '=', 'articles.category_id')
        ->where('name', '=', 'Life and Style')->get();

         $lifeAndStyleArticles = Article::select([
            'id',
             'title',
             'category_id',
             'published_at',
         ])->where('published_at', '>=', Carbon::today()->startOfMonth())
         ->where('published_at', '<=', Carbon::today()->endOfMonth())
         ->get ();

        Article::select([
            'id',
            'title',
            'category_id',
            'published_at',
        ])->where('published_at', '>=', Carbon::today()->startOfMonth())
        ->where('published_at', '<=', Carbon::today()->endOfMonth())
        ->get();

        

        Article::select([
            'title',
            'description',
            'author_id',
            'image',
            'published_at',
            'excerpt',
            'category_id',
            'seo_title',
            'seo_description',
        ])
            ->get();

        

             $apartments = Imobil::select()->where('type', '=', 'APPARTMENT')->paginate(3);

             $houses = Imobil::select()->where('type', '=', 'HOUSE')->paginate(3);
            
        
         return view('home.home', ['apartments' => $apartments, 'houses'  => $houses]);
    }
}
