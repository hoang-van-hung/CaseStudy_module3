<?php


namespace App\Http\Repositories;


use App\Models\Product;

class ProductRepository
{
    function getAll()
    {
        return Product::orderBy('id','DESC')->paginate(3);
    }

    function getById($id)
    {
        return Product::findOrFail($id);
    }

    function store($product)
    {
        $product->save();
    }

    function delete($product)
    {
        $product->delete();
    }

}
