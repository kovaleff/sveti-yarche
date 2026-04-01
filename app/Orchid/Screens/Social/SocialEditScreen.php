<?php

namespace App\Orchid\Screens\Social;

use App\Models\Social;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class SocialEditScreen extends Screen
{
    public $social;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Social $social): iterable
    {
        return [
            'social' => $social,
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
            Button::make(__('Удалить'))
                ->icon('bs.trash3')
                ->confirm(__('Удалить?'))
                ->method('remove')
                ->canSee($this->social->exists),

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
        return [
            Layout::rows([
                Input::make('social.title')
                    ->type('text')
                    ->vertical()
                    ->required()
                    ->title('Название:'),

                Input::make('social.hint')
                    ->type('text')
                    ->vertical()
                    ->title('Подсказка:'),

                Input::make('social.link')
                    ->type('url')
                    ->vertical()
                    ->required()
                    ->title('Ссылка:'),

                Picture::make('social.image')
                    ->targetRelativeUrl()
                    ->title('Изображение')
//                    ->width(500)
                    ->height(300),

                Input::make('social.order')
                    ->type('number')
                    ->vertical()
                    ->min(0)
                    ->title('Порядок:')
                    ->placeholder('0'),
            ]),
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->social->fill($request->get('social'))->save();

        Alert::info('Социальная сеть сохранена');
        return redirect()->route('back-socials');
    }

    public function remove(Request $request)
    {
        $this->social->delete();

        Alert::info('Социальная сеть удалена');
        return redirect()->route('back-socials');
    }
}
