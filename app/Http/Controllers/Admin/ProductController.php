<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\RQAdd;
use App\Http\Requests\Product\RQEdit;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Helpers\ConstCommon;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;
    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }
    public function list(){
        $title = 'product list';
        $data = $this->productRepository->all();
        return view('admin.product.list', compact(['data', 'title']));
    }
    public function add(){
        $dataCategory = $this->categoryRepository->all();
        $title = 'product Add';
        return view('admin.product.add', compact(['title', 'dataCategory']));
    }
    public function addPost(RQAdd $request){

        $nameImage = 'product-'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
        ConstCommon::addImageToStorage($request->img, $nameImage );
        $data = [
            'name'=>$request->name,
            'id_category'=>$request->id_category,
            'sub_description'=>$request->sub_description,
            'amount'=>$request->amount,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$nameImage
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
        $dataCategory = $this->categoryRepository->all();
        $data = $this->productRepository->show($id);
        return view('admin.product.edit', compact(['id','title', 'data', 'dataCategory']));
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
                'id_category'=>$request->id_category,
                'sub_description'=>$request->sub_description,
                'amount'=>$request->amount,
                'description'=>$request->description,
                'price'=>$request->price,
                'image'=>$nameImage
            ];
        } else {
            $data = [
                'name'=>$request->name,
            'id_category'=>$request->id_category,
            'sub_description'=>$request->sub_description,
            'amount'=>$request->amount,
            'description'=>$request->description,
            'price'=>$request->price
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

