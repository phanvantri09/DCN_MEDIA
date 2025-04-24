<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\BlogRepositoryInterface;
use App\Helpers\ConstCommon;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    protected $productRepository;
    protected $categoryRepository;
    protected $blogRepository;
    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository, BlogRepositoryInterface $blogRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->blogRepository = $blogRepository;
    }
    public function home() : View
    {
        return view('front.layout.home');
    }

    public function blogs(Request $request) : View
    {
        if (!empty($request->id)) {
            $data = $this->blogRepository->show($request->id);
            return view('front.blog.detail', compact(['data']));
        }
        $data = $this->blogRepository->all();
        return view('front.blog.index', compact(['data']));
    }

    public function services(Request $request) : View
    {
        if ($request->type) {

        }
        return view('front.services');
    }

    public function shop(Request $request) : View
    {
        $data = $this->productRepository->all();
        return vie
        ('front.shop.index', compact(['data']));
    }

    public function about(Request $request) : View
    {
        return view('front.about.index', compact([]));
    }

    public function contact(Request $request) : View
    {
        return view('front.contact.index', compact([]));
    }
}
