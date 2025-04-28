<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\BlogRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\ServiceRepositoryInterface;
use App\Helpers\ConstCommon;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    protected $productRepository;
    protected $categoryRepository;
    protected $blogRepository;
    protected $userRepository;
    protected $serviceRepository;
    public function __construct(ProductRepositoryInterface $productRepository,
    CategoryRepositoryInterface $categoryRepository,
    BlogRepositoryInterface $blogRepository,
    UserRepositoryInterface $userRepository,
    ServiceRepositoryInterface $serviceRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->blogRepository = $blogRepository;
        $this->userRepository = $userRepository;
        $this->serviceRepository = $serviceRepository;
    }

    public function home() : View
    {
        $users = $this->userRepository->customer();
        $blogs = $this->blogRepository->newBloghome();
        return view('front.layout.home', compact(['users', 'blogs']));
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
        $data = [];
        // return view('front.service.index', compact(['data']));
        if ($request->type) {
            $data = $this->serviceRepository->getAllByType($request->type);
        }

        return view('front.service.index', compact(['data']));
    }

    public function shop(Request $request) : View
    {
        $data = $this->productRepository->all();
        return view('front.shop.index', compact(['data']));
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
