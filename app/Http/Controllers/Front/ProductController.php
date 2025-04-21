<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function List(Request $request)
    {
        $perPage = $request->input('per_page', 12);
        $perPageOptions = [9, 12, 18, 24];

        $products = Product::with('category')
            ->orderBy('created_at', 'desc')
            ->take($perPage)
            ->get()
            ->map(fn($product) => $product->formatProductForDisplay());
                
        // Tính tổng số sản phẩm có thể tải
        $totalProducts = Product::count();
        return view('front.product.index', [
            'title' => 'Shop Products',
            'products' => $products,
            'perPageOptions' => $perPageOptions,
            'currentPerPage' => $perPage,
            'totalProducts' => $totalProducts,
        ]);
    }
    public function loadProducts(Request $request)
    {
        $offset = $request->query('offset', 0);
        $limit = $request->query('limit', 9);
        $sort = $request->query('sort', 'default');
        $filter = $request->query('filter', 'all');

        $query = Product::with('category');

        // Xử lý filter theo danh mục
        if ($filter !== 'all') {
            $categoryId = str_replace('category_', '', $filter);
            $query->where('id_category', $categoryId);
        }

        // Xử lý sắp xếp
        switch ($sort) {
            case 'price_low':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }
        // Lấy tổng số sản phẩm
        $total = $query->count();

        $products = $query->offset($offset)->limit($limit)->get();
        $products = $products->map(fn ($product)=> $product->formatProductForDisplay());
        return response()->json(['products' => $products, 'total' => $total]);
    }

    public function detail($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $data = $product->formatProductForDisplay();
        if (!$data) {
            return redirect()->route('product.list')->with('error', 'Product not found');
        }
        return view('front.product.detail', [
            'title' => 'Product Detail',
            'data' => $data,
        ]);
    }
}


