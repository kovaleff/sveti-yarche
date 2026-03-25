<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Toast;

class ArticleListScreen extends Screen
{

    //public $target = 'articles';
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'articles' => Article::latest()->get()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Статьи';
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
                ->route('back-articles.create'),
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
            Layout::table('articles', [
                TD::make('title'),
                TD::make('Actions')
                    ->alignRight()->render(function (Article $article) {
                            return DropDown::make()
                                ->icon('bs.three-dots-vertical')
                                ->list([
                                    Link::make(__('Редактирвоать'))
                                        ->route('back-articles.edit', $article->id)
                                        ->icon('bs.pencil'),

                                    Button::make(__('Удалить'))
                                        ->icon('bs.trash3')
                                        ->confirm(__('Удалить?'))
                                        ->method('remove', [
                                            'id' => $article->id,
                                        ]),
                                ]);
                        }),
            ]),
        ];
    }

    public function remove(Request $request): void
    {
        Article::findOrFail($request->get('id'))->delete();

        Toast::info(__('Статья удалена!'));
    }
}
