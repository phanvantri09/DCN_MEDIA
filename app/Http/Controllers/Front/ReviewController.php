<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        try {
            \Log::info('Review submission attempt', [
                'user_id' => Auth::id(),
                'product_id' => $request->route('id'),
                'request_data' => $request->all()
            ]);

            $request->validate([
                'rating' => 'required|integer|min:1|max:5',
                'comment' => 'required|string|max:1000'
            ]);

            // Get product_id from the URL parameter
            $productId = $request->route('id');
            
            if (!$productId) {
                throw new \Exception('Product ID not found in URL');
            }

            $review = new ProductReview();
            $review->user_id = Auth::id();
            $review->product_id = $productId;
            $review->rating = $request->rating;
            $review->comment = $request->comment;
            $review->is_approved = true;
            $review->save();

            \Log::info('Review created successfully', ['review_id' => $review->id]);

            return response()->json([
                'message' => 'Đánh giá đã được gửi thành công',
                'review' => $review,
                'status' => 'success'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation error in review submission', [
                'errors' => $e->errors()
            ]);
            return response()->json([
                'message' => 'Vui lòng kiểm tra lại thông tin đánh giá',
                'errors' => $e->errors(),
                'status' => 'error'
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Review submission error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json([
                'message' => 'Có lỗi xảy ra khi gửi đánh giá: ' . $e->getMessage(),
                'status' => 'error'
            ], 500);
        }
    }

    public function getProductReviews($productId)
    {
        $reviews = ProductReview::with('user')
            ->where('product_id', $productId)
            ->orderBy('created_at', 'desc')
            ->get();

        $averageRating = $reviews->avg('rating');

        return response()->json([
            'reviews' => $reviews,
            'averageRating' => round($averageRating, 1),
            'totalReviews' => $reviews->count()
        ]);
    }
} 