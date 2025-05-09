<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = ProductReview::with(['user', 'product'])
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('admin.reviews.index', compact('reviews'));
    }

    public function approve($id)
    {
        $review = ProductReview::findOrFail($id);
        $review->update(['is_approved' => true]);

        return redirect()->back()->with('success', 'Review approved successfully');
    }

    public function reject($id)
    {
        $review = ProductReview::findOrFail($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review rejected and deleted');
    }
} 