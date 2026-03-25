<?php

namespace App\Orchid\Screens\Service;

use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ServiceListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'services' => Service::latest()->get()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Услуги';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Добавить'))
                ->icon('bs.plus-circle')
                ->route('back-services.create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('services', [
                TD::make('title'),
                TD::make('Actions')
                    ->alignRight()->render(function (Service $service) {
                        return DropDown::make()
                            ->icon('bs.three-dots-vertical')
                            ->list([
                                Link::make(__('Редактировать'))
                                    ->route('back-services.edit', $service->id)
                                    ->icon('bs.pencil'),

                                Button::make(__('Удалить'))
                                    ->icon('bs.trash3')
                                    ->confirm(__('Удалить?'))
                                    ->method('remove', [
                                        'id' => $service->id,
                                    ]),
                            ]);
                    }),
            ]),
        ];
    }

    public function remove(Request $request): void
    {
        Service::findOrFail($request->get('id'))->delete();

        Toast::info(__('Услуга удалена!'));
    }
}
