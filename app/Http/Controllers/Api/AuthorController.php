<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use App\ResponseHelper;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Exception;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): array
    {
        try {
            $perPage = (int) request()->query('per_page', 10);
            $authors = Author::paginate($perPage);
            return ResponseHelper::success('جميع المؤلفين', $authors);
        } catch (Exception $e) {
            return ResponseHelper::failed('فشل جلب المؤلفين', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request): array
    {
        try {
            $author = Author::create(['name' => $request->name]);
            return ResponseHelper::success("تمت إضافة المؤلف", $author);
        } catch (QueryException $e) {
            return ResponseHelper::failed('فشل إضافة المؤلف', ['error' => $e->getMessage()]);
        } catch (Exception $e) {
            return ResponseHelper::failed('حدث خطأ', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author): array
    {
        try {
            return ResponseHelper::success('بيانات المؤلف', $author);
        } catch (Exception $e) {
            return ResponseHelper::failed('فشل جلب بيانات المؤلف', ['error' => $e->getMessage()]);
        }
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author): array
    {
        try {
            $author->name = $request->name;
            $author->save();
            return ResponseHelper::success("تم تعديل المؤلف", $author);
        } catch (QueryException $e) {
            return ResponseHelper::failed('فشل تعديل المؤلف', ['error' => $e->getMessage()]);
        } catch (Exception $e) {
            return ResponseHelper::failed('حدث خطأ', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author): array
    {
        try {
            $author->delete();
            return ResponseHelper::success("تم حذف المؤلف", $author);
        } catch (Exception $e) {
            return ResponseHelper::failed('فشل حذف المؤلف', ['error' => $e->getMessage()]);
        }
    }
}
