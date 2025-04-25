<?php
namespace App\Repositories;

use App\Models\Router;

class BannerRepository implements BannerRepositoryInterface
{
    public function all()
    {
        return Router::all();
    }

    public function create(array $data)
    {
        return Router::create($data);
    }

    public function update(array $data, $id)
    {
        $user = Router::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = Router::findOrFail($id);
        return $user->delete();
    }

    public function show($id)
    {
        return Router::findOrFail($id);
    }

}
