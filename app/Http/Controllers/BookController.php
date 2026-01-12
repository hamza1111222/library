<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\ResponseHelper;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        return ResponseHelper::success(' جميع الكتب', $book);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //  return $request->all();
        $book = Book::create($request->all());

        if ($request->hasFile('cover')){
            $file = $request->file('cover');
            $filename = "$request->ISBN." . $file->extension();
            Storage::putFileAs('book-images', $file ,$filename );
            $book->cover = $filename;
            $book->save();
        }
        return ResponseHelper::success("تمت إضافة الكتاب", $book);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        // Keep old cover to remove if replaced
        $oldCover = $book->cover;

        $book->update($request->all());

        if ($request->hasFile('cover')) {
            // delete old cover file if exists
            if ($oldCover && Storage::exists('book-images/' . $oldCover)) {
                Storage::delete('book-images/' . $oldCover);
            }

            $file = $request->file('cover');
            $filename = "{$book->ISBN}." . $file->extension();
            Storage::putFileAs('book-images', $file, $filename);
            $book->cover = $filename;
            $book->save();
        }

        return ResponseHelper::success("تمت تعديل الكتاب", $book);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // delete cover file if exists
        if ($book->cover && Storage::exists('book-images/' . $book->cover)) {
            Storage::delete('book-images/' . $book->cover);
        }

        $book->delete();
        return ResponseHelper::success("تمت حذف الكتاب", $book);
    }
}
