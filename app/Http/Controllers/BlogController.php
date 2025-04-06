<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\Blog\RQAdd;
use App\Http\Requests\Blog\RQEdit;
use App\Repositories\BlogRepositoryInterface;
use App\Helpers\ConstCommon;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    protected $blogRepository;
    public function __construct(BlogRepositoryInterface $blogRepository) {
        $this->blogRepository = $blogRepository;
    }
    public function list(){
        $title = 'Blog list';
        $data = $this->blogRepository->all();
        return view('admin.blog.list', compact(['data', 'title']));
    }
    public function add(){
        $title = 'Blog Add';
        return view('admin.blog.add', compact(['title']));
    }
    public function addPost(RQAdd $request){

        $nameImage = 'Blog-'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
        ConstCommon::addImageToStorage($request->img, $nameImage );
        $data = ['name'=>$request->name, 'img'=>$nameImage, 'content'=>$request->content, 'content_pre'=>$request->content_pre];
        if ($this->blogRepository->create($data)) {
            return redirect()->route('blog.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.blog.add');
    }
    public function edit($id){
        $title = 'Blog edit';

        $data = $this->blogRepository->show($id);
        return view('admin.blog.edit', compact(['id','title', 'data']));
    }
    public function editPost(RQEdit $request, $id){

        if (!empty($request->img)) {
            $it = $this->blogRepository->show($id);
            Storage::disk('public')->delete('images/' . $it->img);
            // ConstCommon::delImageToStorage($it->img);
            $nameImage = 'Blog-'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
            ConstCommon::addImageToStorage($request->img, $nameImage );
            $data = ['name'=>$request->name, 'img'=>$nameImage, 'content'=>$request->content, 'content_pre'=>$request->content_pre];
        } else {
            $data = ['name'=>$request->name, 'content'=>$request->content, 'content_pre'=>$request->content_pre];
        }
        if ($this->blogRepository->update($data, $id)) {
            return redirect()->route('blog.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.blog.edit');
    }
    public function delete($id){
        if ($this->blogRepository->delete($id)) {
            return redirect()->route('blog.list')->with('success',ConstCommon::SUCCESS);
        }
    }
    public function show($id){
        $title = 'Blog show' .$id;
        $data = $this->blogRepository->show($id);
        return view('admin.blog.show', compact(['id','title', 'data']));
    }
}
