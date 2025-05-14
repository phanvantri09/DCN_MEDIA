<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function List(Request $request)
    {
        $sort = $request->input('sort', 'default');

        $query = Product::with('category')
            ->when($request->id_category, function ($query) use ($request) {
                return $query->where('id_category', $request->id_category);
            })
            ->select('*')
            ->selectRaw('CASE WHEN discount > 0 THEN price * (1 - discount/100) ELSE price END as discounted_price');

        // Xử lý sắp xếp
        switch ($sort) {
            case 'price_low':
                $query->orderBy('discounted_price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('discounted_price', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $products = $query->get()
            ->map(fn($product) => $product->formatProductForDisplay());

        if ($request->ajax()) {
            return response()->json([
                'products' => $products
            ]);
        }

        return view('front.product.index', [
            'title' => 'Shop Products',
            'products' => $products
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
        if ($filter !== 'all' && strpos($filter, 'category_') === 0) {
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

        // Lấy tổng số sản phẩm sau khi áp dụng filter
        $total = $query->count();

        $products = $query->offset($offset)->limit($limit)->get();
        $products = $products->map(fn($product) => $product->formatProductForDisplay());

        return response()->json([
            'products' => $products,
            'total' => $total,
            'offset' => $offset,
            'limit' => $limit
        ]);
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


