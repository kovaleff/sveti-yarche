<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ServiceEditScreen extends Screen
{

    public $service;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Service $service): iterable
    {
        return [
            'service' => $service,
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
            Button::make(__('Удалить'))
                ->icon('bs.trash3')
                ->confirm(__('Удалить?'))
                ->method('remove')
                ->canSee($this->service->exists),

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
                    Input::make('service.title')
                        ->type('text')->vertical()->required()
                        ->title('Заголовок:'),
                    Input::make('service.slug')
                        ->type('text')->vertical()->required()
                        ->title('Слаг:'),
                    Quill::make('service.content')->title('Содержимое:'),
                    Input::make('service.price')
                        ->type('text')->vertical()->required()
                        ->title('Цена:'),
                    Switcher::make('service.is_per_hour')->title('За час?:')->sendTrueOrFalse(),
                    Switcher::make('service.is_grouped')->title('В группе?:')->sendTrueOrFalse(),
                    Quill::make('service.price_desc')->title('Уточнение цены:'),
                    Cropper::make('service.image')->targetRelativeUrl()
                        ->title('Картинка')
                        ->width(1000)
                        ->height(500),
                ]
            ),
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->service->fill($request->get('service'))->save();

//        $this->service->attachments()->syncWithoutDetaching(
//            $request->input('news.attachments', [])
//        );

        Alert::info('Услуга создана');
        return redirect()->route('back-services');
    }
}
