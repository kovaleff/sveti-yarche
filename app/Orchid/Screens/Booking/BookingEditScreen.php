<?php

namespace App\Orchid\Screens\Booking;

use App\Models\Booking;
use App\Models\Service;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Actions\Button;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;

class BookingEditScreen extends Screen
{
    public $booking;

    public function query(Booking $booking): iterable
    {
        return [
            'booking' => $booking,
            'services' => Service::all(),
        ];
    }

    public function name(): ?string
    {
        return $this->booking->exists ? 'Редактировать запись' : 'Создать запись';
    }

    public function commandBar(): iterable
    {
        return [
            Button::make(__('Удалить'))
                ->icon('bs.trash3')
                ->confirm(__('Удалить?'))
                ->method('remove')
                ->canSee($this->booking->exists),

            Button::make(__('Сохранить'))
                ->icon('bs.check-circle')
                ->method('createOrUpdate'),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('booking.name')->type('text')->vertical()->required()->title('Имя:'),
                Input::make('booking.phone')->type('text')->vertical()->title('Телефон:'),
                Select::make('booking.id_service')
                    ->fromModel(Service::class, 'title')
                    ->vertical()
                    ->required()
                    ->title('Услуга:'),
                Input::make('booking.booking_date')->type('datetime-local')->vertical()->title('Дата записи:'),
            ]),
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->booking->fill($request->get('booking'))->save();
        Alert::info('Запись сохранена');
        return redirect()->route('back-bookings');
    }

    public function remove()
    {
        $this->booking->delete();
        Alert::info('Запись удалена');
        return redirect()->route('back-bookings');
    }
}
