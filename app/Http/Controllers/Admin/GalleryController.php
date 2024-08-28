<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('backend.gallery.index',compact('galleries'));
    }


    public function create()
    {
        return view('backend.gallery.create');
    }


    public function store(StoreGalleryRequest $request)
    {
        Gallery::create($request->validated());
        toast('photo added successfully ', 'success');
        return redirect(route('admin.gallery.index'));
    }


    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit',compact('gallery'));
    }


    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        if ($request->hasFile('image') && $image= $gallery->getRawOriginal('image')) {

            $this->deleteFile($image);
        }
        $gallery->update($request->validated());
        toast('gallery updated successfully', 'success');
        return redirect(route('admin.gallery.index'));
    }

   
    public function destroy(Gallery $gallery)
    {
        $this->deleteFile($gallery->image);
        $gallery->delete();
        toast('deleted successfully', 'success');
        return back();
    }

    public function updateStatus(Gallery $gallery)
    {
        $gallery->update([
            'status' => !$gallery->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
