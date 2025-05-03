<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Repositories\BannerRepositoryInterface;
use App\Helpers\ConstCommon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BannerController extends Controller
{
    protected $bannerRepository;
    public function __construct(BannerRepositoryInterface $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }
    public function list()
    {
        $title = 'danh sách banner';
        $data = $this->bannerRepository->all();
        return view('admin.banner.list', compact(['data', 'title']));
    }
    public function add()
    {
        $title = 'Thêm mới banner';
        return view('admin.banner.add', compact(['title']));
    }
    public function addPost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $nameImage = 'Banner-' . ConstCommon::getCurrentTime() . '.' . $request->image->extension();
        ConstCommon::addImageToStorage($request->image, $nameImage);
        $data = ['title' => $request->title, 'image' => $nameImage];
        if ($this->bannerRepository->create($data)) {
            return redirect()->route('banner.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.banner.add');
    }
    public function edit($id)
    {
        $title = 'Sửa banner';
        $data = $this->bannerRepository->show($id);
        return view('admin.banner.edit', compact(['id', 'data', 'title']));
    }
    public function editPost(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if (!empty($request->image)) {
            $it = $this->bannerRepository->show($id);
            Storage::disk('public')->delete('images/' . $it->image);
            // ConstCommon::delImageToStorage($it->img);
            $nameImage = 'Banner-' . ConstCommon::getCurrentTime() . '.' . $request->image->extension();
            ConstCommon::addImageToStorage($request->image, $nameImage);
            $data = ['title' => $request->title, 'image' => $nameImage];
        } else {
            $data = ['title' => $request->title];
        }
        if ($this->bannerRepository->update($data, $id)) {
            return redirect()->route('banner.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.banner.edit');
    }
    public function delete($id)
    {
        if ($this->bannerRepository->delete($id)) {
            return redirect()->route('banner.list')->with('success', ConstCommon::SUCCESS);
        }
    }
}
