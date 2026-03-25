<?php

namespace App\Orchid\Screens\News;

use App\Models\News;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Toast;

class NewsListScreen extends Screen
{

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'news' => News::latest()->get()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Новости';
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
                ->route('back-news.create'),
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
            Layout::table('news', [
                TD::make('title'),
                TD::make('Actions')
                    ->alignRight()->render(function (News $newsItem) {
                            return DropDown::make()
                                ->icon('bs.three-dots-vertical')
                                ->list([
                                    Link::make(__('Редактировать'))
                                        ->route('back-news.edit', $newsItem->id)
                                        ->icon('bs.pencil'),

                                    Button::make(__('Удалить'))
                                        ->icon('bs.trash3')
                                        ->confirm(__('Удалить?'))
                                        ->method('remove', [
                                            'id' => $newsItem->id,
                                        ]),
                                ]);
                        }),
            ]),
        ];
    }

    public function remove(Request $request): void
    {
        News::findOrFail($request->get('id'))->delete();

        Toast::info(__('Новость удалена!'));
    }
}
