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
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|min:10|max:1000'
        ]);

        // Check if user has already reviewed this product
        $existingReview = ProductReview::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->first();

        if ($existingReview) {
            return response()->json([
                'message' => 'You have already reviewed this product',
                'status' => 'error'
            ], 422);
        }

        $review = ProductReview::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'is_approved' => false // Reviews need approval by admin
        ]);

        return response()->json([
            'message' => 'Review submitted successfully and pending approval',
            'review' => $review,
            'status' => 'success'
        ]);
    }

    public function getProductReviews($productId)
    {
        $reviews = ProductReview::with('user')
            ->where('product_id', $productId)
            ->where('is_approved', true)
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