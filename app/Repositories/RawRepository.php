<?php
namespace App\Repositories;
use App\Models\Raw;
use App\User;
use App\Repositories\Interfaces\RawRepositoryInterface;
// use App\Http\Resources\ProductResource;

class RawRepository implements RawRepositoryInterface
{
    public function all()
    {
        $raws = Raw::all();
        return $raws;
        // return ProductResource::collection(Product::with('raws')->get());
    }
    public function show($id)
    {
        return Raw::with('products')->findOrFail($id);
    }   
}
