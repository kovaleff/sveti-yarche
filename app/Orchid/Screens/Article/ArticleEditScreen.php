<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Quill;

class ArticleEditScreen extends Screen
{
    public $article;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Article $article): iterable
    {
        return [
            'article' => $article,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->article->exists ? 'Редактирование статьи' : 'Новая статья';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Удалить'))
                ->icon('bs.trash3')
                ->confirm(__('Удалить?'))
                ->method('remove')
                ->canSee($this->article->exists),

            Button::make(__('Сохранить'))
                ->icon('bs.check-circle')
                ->method('createOrUpdate'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return  [
            Layout::rows([
                    Input::make('article.title')
                        ->type('text')->vertical()->required()
                        ->title('Заголовок:'),
                    Quill::make('article.content')->title('Содержимое:'),
                    Input::make('article.slug')
                        ->type('text')->vertical()->required()
                        ->title('Слаг:'),
                    Cropper::make('article.main_image')->targetRelativeUrl()
                        ->title('Картинка')
                        ->width(1000)
                        ->height(500),
                Upload::make('article.attachments')
                    ->title('Другие файлы')
                ]
            ),
    ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->article->fill($request->get('article'))->save();

        $this->article->attachments()->syncWithoutDetaching(
            $request->input('article.attachments', [])
        );

        Alert::info('Статья создана');
        return redirect()->route('back-articles');
    }
}
