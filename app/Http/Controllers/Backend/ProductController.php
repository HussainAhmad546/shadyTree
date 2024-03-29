<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PHPUnit\Exception;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function add(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            if (Product::where('name', $request->name)->exists()) {
                return response()->json(['success' => false, 'message' => 'Product name already exists.']);
            }

            $product = new Product();

            $product->category_id = $request->category_id;
            $product->name = $request->name;
            $product->second_name = $request->second_name; // Add second_name
            $product->description = $request->description;
            $product->product_note = $request->product_note; // Add product_note
            $product->price = $request->price;
            $product->quantity = $request->quantity; // Add quantity
            if($request->hasFile('image_1'))
            {
                $product->image_1 = $this->storeImage('', $request->image_1);
            }
            
            $product->save();
            return response()->json(['success' => true, 'message' => 'Product has been saved successfully']);
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
        $products = Product::where('is_del', 0)->with(['category'])->get();
        $categories = Category::where('is_del', 0)->get();
        return view('admin.product.index', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function edit(Request $request): JsonResponse
    {
        try {
            error_log('Product ID: ' . $request->id);
            $product = Product::where('id', $request->id)->first();
            return response()->json(['success' => true, 'product' => $product], 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            if (Product::where('name', $request->name)->where('id', '!=', $request->id)->exists()) {
                return response()->json(['success' => false, 'message' => 'Product name already exists.']);
            }

            $product = Product::where('id', $request->id)->first();

            $product->category_id = $request->category_id;
            $product->name = $request->name;
            $product->second_name = $request->second_name; 
            $product->description = $request->description;
            $product->product_note = $request->product_note; 
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->status = $request->status;
            if($request->hasFile('image_1'))
            {
                $product->image_1 = $this->storeImage($product->image_1, $request->image_1);
            }

            $product->save();
            return response()->json(['success' => true, 'message' => 'Product has been updated successfully']);
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
            Product::where('id', $id)->update(['is_del' => 1]);
            return response()->json(['success' => true, 'message' => 'Product has been deleted successfully'], 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * @param $existingImage
     * @param $newImage
     * @return string
     */
    private function storeImage($existingImage = null, $newImage): string
    {
        if ($existingImage) {
            File::delete('upload/product/'.$existingImage);
        }

        $extension = $newImage->getClientOriginalExtension();
        $filename = rand() . '.' . $extension;
        $newImage->move('upload/product/', $filename);
        return $filename;

    }
}

