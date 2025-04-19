<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
   public function List(Request $request)
   {
      $perPage = $request->input('per_page', 9);
      $perPageOptions = [9, 12, 18, 24];

      $products = Product::with('category')
         ->orderBy('created_at', 'desc')
         ->take($perPage)
         ->get();

      return view('front.product.index', [
         'title' => 'Shop Products',
         'products' => $products,
         'perPageOptions' => $perPageOptions,
         'currentPerPage' => $perPage,
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

        $products = $query->offset($offset)->limit($limit)->get();
        return response()->json(['products' => $products]);
    }
}


