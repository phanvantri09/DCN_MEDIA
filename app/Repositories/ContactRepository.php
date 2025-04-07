<?php
namespace App\Repositories;

use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public function all()
    {
        return Contact::all();
    }

    public function create(array $data)
    {
        return Contact::create($data);
    }

    public function update(array $data, $id)
    {
        $user = Contact::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = Contact::findOrFail($id);
        return $user->delete();
    }

    public function show($id)
    {
        return Contact::findOrFail($id);
    }
    public function getAllByType($type){
        return Contact::where('type', $type)->get();
    }
}
