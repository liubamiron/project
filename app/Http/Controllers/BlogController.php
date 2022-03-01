<?php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BlogCategory;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $request = request()->all();

        $sort = $request['sort'] ?? 'ASC';

        $categories = BlogCategory::all();

        $comments = Comment::all();

        //  dump($comments);
        // $comments = Comment::orderBy('created_at', 'DESC')->paginate(3);

        $category = $request['category'] ?? $categories->first()->id;

        $articles = Article::orderBy('created_at', $sort)->paginate(6);

        $articles->appends(['sort' => $sort]);

        return view('blog.blog',
            ['articles' => $articles,
                'categories' => $categories,
                'comments' => $comments,
                'filter' => ['sort' => $sort,
                    'category' => (int) $category]]);
    }

}
