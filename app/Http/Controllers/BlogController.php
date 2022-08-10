<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($slug)
    {
        $posts = Product::where('category', $slug)->get();
        $category = Category::where('slug',$slug)->first();
        return view('blog.browse', compact(
                                    'posts',
                                    'category'
                                ));
    }

    public function read($slug,$prdSlug)
    {
        $product = Product::where('slug',$prdSlug)->first();
        $category = Category::where('slug',$slug)->first();
        return view('blog.read', compact(
                                    'product',
                                    'category'
                                ));
    }
}
