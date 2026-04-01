<?php

namespace App\Orchid\Screens\Social;

use App\Models\Social;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SocialListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'socials' => Social::orderBy('order', 'asc')->get()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Социальные сети';
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
                ->route('back-socials.create'),
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
            Layout::table('socials', [
                TD::make('title', 'Название'),
                TD::make('hint', 'Подсказка'),
                TD::make('link', 'Ссылка'),
                TD::make('image', 'Изображение')->render(function (Social $social) {
                    if ($social->image) {
                        return '<img src="' . $social->image . '" style="max-width: 100px; max-height: 50px;">';
                    }
                    return 'Нет изображения';
                }),
                TD::make('order', 'Порядок'),
//                TD::make('created_at', 'Дата создания'),
//                TD::make('updated_at', 'Дата обновления'),
                TD::make('Actions')
                    ->alignRight()->render(function (Social $social) {
                        return DropDown::make()
                            ->icon('bs.three-dots-vertical')
                            ->list([
                                Link::make(__('Редактировать'))
                                    ->route('back-socials.edit', $social->id)
                                    ->icon('bs.pencil'),

                                Button::make(__('Удалить'))
                                    ->icon('bs.trash3')
                                    ->confirm(__('Удалить?'))
                                    ->method('remove', [
                                        'id' => $social->id,
                                    ]),
                            ]);
                    }),
            ]),
        ];
    }

    public function remove(Request $request): void
    {
        Social::findOrFail($request->get('id'))->delete();

        Toast::info(__('Социальная сеть удалена!'));
    }
}
