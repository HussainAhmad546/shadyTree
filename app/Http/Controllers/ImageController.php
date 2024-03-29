<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;

class ImageController extends Controller
{
    // public function addImage(Request $request)
    // {
    //     if ($request->hasFile('image')) {
    //         $imageFile = $request->file('image');
    //         $imageName = $imageFile->getClientOriginalName();
    //         $imagePath = 'images/gallery/' . $imageName;
    //         Storage::disk('public')->put($imagePath, file_get_contents($imageFile));

    //         $image = new Image();
    //         $image->path = $imagePath;
    //         $image->save();
            
    //         return response()->json(['success' => true, 'message' => 'Image added successfully']);
    //     }

    //     return response()->json(['success' => false, 'message' => 'No image uploaded']);

    // }
    public function addImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $extension = $imageFile->getClientOriginalExtension();
            $timestamp = time(); // Generate current timestamp
            $imageName = $timestamp . '.' . $extension; // Append timestamp to filename
            $imagePath = 'images/gallery/' . $imageName;
            Storage::disk('public')->put($imagePath, file_get_contents($imageFile));

            $image = new Image();
            $image->path = $imagePath;
            $image->save();
            
            return response()->json(['success' => true, 'message' => 'Image added successfully']);
        }

        return response()->json(['success' => false, 'message' => 'No image uploaded']);

    }

    // public function addImage(Request $request)
    // {
    //     if ($request->hasFile('image')) {
    //         $imageFile = $request->file('image');
    //         $extension = $imageFile->getClientOriginalExtension();
    //         $timestamp = time(); // Generate current timestamp
    //         $imageName = $timestamp . '.' . $extension; // Append timestamp to filename
    //         $imagePath = $imageName; // Only filename without path

    //         Storage::disk('public')->put('images/gallery/' . $imageName, file_get_contents($imageFile));

    //         $image = new Image();
    //         $image->path = $imagePath; // Save only filename in database
    //         $image->save();
            
    //         return response()->json(['success' => true, 'message' => 'Image added successfully']);
    //     }

    //     return response()->json(['success' => false, 'message' => 'No image uploaded']);
    // }

    public function showGallery()
    {
        $images = Image::where('is_del', 0)->get();
        return view('admin.gallery.index', ['images' => $images]);

    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function delete($id): JsonResponse
    {
        try {
            Image::where('id', $id)->update(['is_del' => 1]);
            return response()->json(['success' => true, 'message' => 'Image has been deleted successfully'], 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

}
