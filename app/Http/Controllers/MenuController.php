<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PHPUnit\Exception;
use App\Models\Category;
use App\Models\Product;
class MenuController extends Controller
{
    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::where(['status' => 0, 'is_del' => 0])->get();
        return view('index', ['categories' => $categories]);
    }

    public function menuCategories(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::where(['status' => 0, 'is_del' => 0])->get();
        return view('menu', ['categories' => $categories]);
    }

    // public function getProducts(Request $request)
    // {
    //     $products = Product::where('category_id', $request->id)->get();
    //     return view('products', compact('products'))->render();
    // }
        public function getProducts(Request $request)
    {
        $products = Product::where('category_id', $request->id)->where('is_del', 0)->get();
        return view('products', compact('products'))->render();
    }
}
