<?php
namespace App\Repositories;
use App\Models\Product;
use App\User;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Http\Resources\ProductResource;

class ProductRepository implements ProductRepositoryInterface
{
    public function index()
    {
        return ProductResource::collection(Product::with('raws')->get());
    }
    public function show($id)
    {
        return new ProductResource(Product::with('raws')->findOrFail($id));
    }
    
}