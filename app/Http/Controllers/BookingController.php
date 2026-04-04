<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Booking;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function index()
    {
        $bookingArticle = Article::query()->where('slug', 'booking')->first();
        return view('booking', ['bookingArticle' => $bookingArticle]);
    }

    function makeBooking(Request $request){
        try {
            $validated = $request->validate([
                'booking_name' => 'required|string|max:255',
                'booking_phone' => 'required|string|max:255',
                'booking_id_service' => 'required|exists:services,id',
                'booking_booking_date' => 'nullable|date',
            ]);

            Booking::create([
                'name' => $validated['booking_name'],
                'phone' => $validated['booking_phone'] ?? '',
                'id_service' => $validated['booking_id_service'],
                'booking_date' => $validated['booking_booking_date'] ?? null,
            ]);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => true, 'message' => 'Вы успешно записались!']);
            }

            return redirect()->back()->with('success', 'Вы успешно записались!');
        } catch (\Exception $e) {
            Log::error('Booking error: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['success' => false, 'message' => 'Произошла ошибка при записи.'], 500);
            }

            return redirect()->back()->with('error', 'Произошла ошибка при записи. Попробуйте ещё раз.');
        }
    }
}
