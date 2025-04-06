<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product\RQAdd;
use App\Http\Requests\Product\RQEdit;
use App\Repositories\ProductRepositoryInterface;
use App\Helpers\ConstCommon;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository) {
        $this->productRepository = $productRepository;
    }
    public function list(){
        $title = 'product list';
        $data = $this->productRepository->all();
        return view('admin.product.list', compact(['data', 'title']));
    }
    public function add(){
        $title = 'product Add';
        return view('admin.product.add', compact(['title']));
    }
    public function addPost(RQAdd $request){

        $nameImage = 'product-'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
        ConstCommon::addImageToStorage($request->img, $nameImage );
        $data = [
            'name'=>$request->name, 
            'img'=>$nameImage, 
            'content'=>$request->content, 
            'time_create'=>$request->time_create,
            'link_ytb'=>$request->link_ytb,
            'link_ytb_topic'=>$request->link_ytb_topic,
            'link_zing'=>$request->link_zing,
            'link_spotify'=>$request->link_spotify,
            'link_apple'=>$request->link_apple,
            'link_NCT'=>$request->link_NCT,
            'link_tiktok'=>$request->link_tiktok,
            'link_facebook'=>$request->link_facebook
        ];

        if ($this->productRepository->create($data)) {
            return redirect()->route('product.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.product.add');
    }
    public function edit($id){
        $title = 'product edit';

        $data = $this->productRepository->show($id);
        return view('admin.product.edit', compact(['id','title', 'data']));
    }
    public function editPost(RQEdit $request, $id){

        if (!empty($request->img)) {
            $it = $this->productRepository->show($id);
            Storage::disk('public')->delete('images/' . $it->img);
            // ConstCommon::delImageToStorage($it->img);
            $nameImage = 'product-'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
            ConstCommon::addImageToStorage($request->img, $nameImage );
            $data = [
                'name'=>$request->name, 
                'img'=>$nameImage, 
                'content'=>$request->content, 
                'time_create'=>$request->time_create,
                'link_ytb'=>$request->link_ytb,
                'link_ytb_topic'=>$request->link_ytb_topic,
                'link_zing'=>$request->link_zing,
                'link_spotify'=>$request->link_spotify,
                'link_apple'=>$request->link_apple,
                'link_NCT'=>$request->link_NCT,
                'link_tiktok'=>$request->link_tiktok,
                'link_facebook'=>$request->link_facebook
            ];
        } else {
            $data = [
                'name'=>$request->name, 
                'content'=>$request->content, 
                'time_create'=>$request->time_create,
                'link_ytb'=>$request->link_ytb,
                'link_ytb_topic'=>$request->link_ytb_topic,
                'link_zing'=>$request->link_zing,
                'link_spotify'=>$request->link_spotify,
                'link_apple'=>$request->link_apple,
                'link_NCT'=>$request->link_NCT,
                'link_tiktok'=>$request->link_tiktok,
                'link_facebook'=>$request->link_facebook
            ];
        }
        if ($this->productRepository->update($data, $id)) {
            return redirect()->route('product.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.product.edit');
    }
    public function delete($id){
        if ($this->productRepository->delete($id)) {
            return redirect()->route('product.list')->with('success',ConstCommon::SUCCESS);
        }
    }
    public function show($id){
        $title = 'product show' .$id;
        $data = $this->productRepository->show($id);
        return view('admin.product.show', compact(['id','title', 'data']));
    }
}

