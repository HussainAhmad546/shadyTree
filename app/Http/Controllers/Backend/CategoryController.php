<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PHPUnit\Exception;

class CategoryController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function add(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            if (Category::where('name', $request->name)->exists()) {
                return response()->json(['success' => false, 'message' => 'Category name already exists.'], 200);
            }

            $category = new Category();
            $category->name = $request->name;
            $category->status = $request->status;

            // Add new fields
            $category->time = $request->time;
            $category->choice = $request->choice;
            $category->addons = $request->addons;
            // $category->time = $request->time ?: null; 
            // $category->choice = $request->choice ?: null; 
            // $category->addons = $request->addons ?: null; 
            // $category->time = $request->time !== '' ? $request->time : null;
            // $category->choice = $request->choice !== '' ? $request->choice : null;
            // $category->addons = $request->addons !== '' ? $request->addons : null;


            $category->save();

            return response()->json(['success' => true, 'message' => 'Category has been added successfully'], 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function list(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::where('is_del', 0)->get();
        return view('admin.category.index', ['categories' => $categories]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function edit(Request $request): JsonResponse
    {
        try {
            $category = Category::where('id', $request->id)->first();
            return response()->json(['success' => true, 'category'=>$category], 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request): JsonResponse
    {
        try {
            if (Category::where('name', $request->name)->where('id', '!=', $request->id)->exists()) {
                return response()->json(['success' => false, 'message' => 'Category name already exists.'], 200);
            }

            $category = Category::where('id', $request->id)->first();

            $category->name = $request->name;
            $category->status = $request->status;

            // Update new fields
            $category->time = $request->time;
            $category->choice = $request->choice;
            $category->addons = $request->addons;
            // $category->time = $request->time ?: null; 
            // $category->choice = $request->choice ?: null; 
            // $category->addons = $request->addons ?: null; 
            // $category->time = $request->time !== '' ? $request->time : null;
            // $category->choice = $request->choice !== '' ? $request->choice : null;
            // $category->addons = $request->addons !== '' ? $request->addons : null;
            
            $category->save();

            return response()->json(['success' => true, 'message' => 'Category has been updated successfully'], 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        try {
            Category::where('id', $id)->update(['is_del' => 1]);
            return response()->json(['success' => true, 'message' => 'Category has been deleted successfully'], 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
