<?php

namespace App\Orchid\Screens\Certificate;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CertificateListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'certificates' => Certificate::all()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Сертификаты';
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
                ->route('back-certificates.create'),
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
            Layout::table('certificates', [
                TD::make('title', 'Название'),
                TD::make('image', 'Изображение')->render(function (Certificate $certificate) {
                    if ($certificate->image) {
                        return '<img src="' . $certificate->image . '" style="max-width: 100px; max-height: 50px;">';
                    }
                    return 'Нет изображения';
                }),
                TD::make('Actions')
                    ->alignRight()->render(function (Certificate $certificate) {
                        return DropDown::make()
                            ->icon('bs.three-dots-vertical')
                            ->list([
                                Link::make(__('Редактировать'))
                                    ->route('back-certificates.edit', $certificate->id)
                                    ->icon('bs.pencil'),

                                Button::make(__('Удалить'))
                                    ->icon('bs.trash3')
                                    ->confirm(__('Удалить?'))
                                    ->method('remove', [
                                        'id' => $certificate->id,
                                    ]),
                            ]);
                    }),
            ]),
        ];
    }

    public function remove(Request $request): void
    {
        Certificate::findOrFail($request->get('id'))->delete();

        Toast::info(__('Сертификат удален!'));
    }
}