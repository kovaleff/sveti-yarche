<?php

namespace App\Orchid\Screens\Certificate;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CertificateEditScreen extends Screen
{
    public $certificate;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Certificate $certificate): iterable
    {
        return [
            'certificate' => $certificate,
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
            Button::make(__('Удалить'))
                ->icon('bs.trash3')
                ->confirm(__('Удалить?'))
                ->method('remove')
                ->canSee($this->certificate->exists),

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
                Input::make('certificate.title')
                    ->type('text')
                    ->vertical()
                    ->required()
                    ->title('Название:'),

                Picture::make('certificate.image')
                    ->targetRelativeUrl()
                    ->title('Изображение')
                    ->height(300),
            ]),
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->certificate->fill($request->get('certificate'))->save();

        Alert::info('Сертификат сохранен');
        return redirect()->route('back-certificates');
    }

    public function remove(Request $request)
    {
        $this->certificate->delete();

        Alert::info('Сертификат удален');
        return redirect()->route('back-certificates');
    }
}