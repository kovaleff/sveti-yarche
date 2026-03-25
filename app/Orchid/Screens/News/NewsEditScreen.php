<?php

namespace App\Orchid\Screens\News;

use App\Models\News;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Quill;

class NewsEditScreen extends Screen
{
    public $news;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(News $news): iterable
    {
        return [
            'news' => $news,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->news->exists ? 'Edit News' : 'Create News';
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
                ->canSee($this->news->exists),

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
                    Input::make('news.title')
                        ->type('text')->vertical()->required()
                        ->title('Заголовок:'),
                    Quill::make('news.content')->title('Содержимое:'),
                    Cropper::make('news.image')->targetRelativeUrl()
                        ->title('Картинка')
                        ->width(1000)
                        ->height(500),
                Upload::make('news.attachments')
                    ->title('Другие файлы')
                ]
            ),
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->news->fill($request->get('news'))->save();

        $this->news->attachments()->syncWithoutDetaching(
            $request->input('news.attachments', [])
        );

        Alert::info('Новость создана');
        return redirect()->route('back-news');
    }
}
