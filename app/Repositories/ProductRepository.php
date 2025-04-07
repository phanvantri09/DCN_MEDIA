<?php
namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return Product::orderByDesc('created_at')->get();
    }

    public function create(array $data)
    {
        return Product::create($data);
    }

    public function update(array $data, $id)
    {
        $user = Product::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = Product::findOrFail($id);
        return $user->delete();
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }
    public function getAllByType($type){
        return Product::where('type', $type)->get();
    }
}
