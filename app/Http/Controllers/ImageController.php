<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function addImage(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);
    
        $image = new Image();
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
            $image->path = $imagePath;
        }
    
        $image->save();
    
        return response()->json(['success' => true, 'message' => 'Image added successfully']);

    }

    public function showGallery()
{
    $images = Image::all(); // Fetch all images from the database
    return view('admin.gallery.index', ['images' => $images]);
}
}
