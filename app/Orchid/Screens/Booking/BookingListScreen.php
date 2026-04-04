<?php

namespace App\Orchid\Screens\Booking;

use App\Models\Booking;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Button;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Toast;

class BookingListScreen extends Screen
{
    public function query(): iterable
    {
        return [
            'bookings' => Booking::with('service')->latest()->get()
        ];
    }

    public function name(): ?string
    {
        return 'Записи';
    }

    public function commandBar(): iterable
    {
        return [
            Link::make(__('Добавить'))
                ->icon('bs.plus-circle')
                ->route('back-bookings.create'),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('bookings', [
                TD::make('name'),
                TD::make('phone'),
                TD::make('service')->render(function (Booking $booking) {
                    return $booking->service ? $booking->service->title : '—';
                }),
                TD::make('booking_date'),
                TD::make('created_at'),
                TD::make('Actions')
                    ->alignRight()
                    ->render(function (Booking $booking) {
                        return DropDown::make()
                            ->icon('bs.three-dots-vertical')
                            ->list([
                                Link::make(__('Редактировать'))
                                    ->route('back-bookings.edit', $booking->id)
                                    ->icon('bs.pencil'),
                                Button::make(__('Удалить'))
                                    ->icon('bs.trash3')
                                    ->confirm(__('Удалить?'))
                                    ->method('remove', ['id' => $booking->id]),
                            ]);
                    }),
            ]),
        ];
    }

    public function remove(Request $request): void
    {
        Booking::findOrFail($request->get('id'))->delete();
        Toast::info(__('Запись удалена!'));
    }
}
