<?php

namespace App\Http\Controllers;

use App\Models\;
use Illuminate\Http\Request;
use App\Http\Requests\Category\RQAdd;
use App\Http\Requests\Category\RQEdit;
use App\Repositories\CategoryRepositoryInterface;
use App\Helpers\ConstCommon;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }
    public function list(){
        $title = 'Category list';
        $data = $this->categoryRepository->all();
        return view('admin.category.list', compact(['data', 'title']));
    }
    public function add(){
        $title = 'Category Add';
        return view('admin.category.add', compact(['title']));
    }
    public function addPost(RQAdd $request){
        $data = ['name'=>$request->title ?? '', 'content'=>$request->sub_title ?? ''];
        if ($this->categoryRepository->create($data)) {
            return redirect()->route('category.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.category.add');
    }
    public function edit($id){
        $title = 'Category edit';

        $data = $this->categoryRepository->show($id);
        return view('admin.category.edit', compact(['id','title', 'data']));
    }
    public function editPost(RQEdit $request, $id){


        $data = ['name'=>$request->title ?? '', 'content'=>$request->sub_title ?? ''];
        if ($this->categoryRepository->update($data, $id)) {
            return redirect()->route('category.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.category.edit');
    }
    public function delete($id){
        if ($this->categoryRepository->delete($id)) {
            return redirect()->route('category.list')->with('success',ConstCommon::SUCCESS);
        }
    }
    public function show($id){
        $title = 'Category show' .$id;
        $data = $this->categoryRepository->show($id);
        return view('admin.category.show', compact(['id','title', 'data']));
    }
}
