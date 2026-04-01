<?php

namespace App\Orchid\Screens\Meditation;

use App\Models\Meditation;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class MeditationEditScreen extends Screen
{
    public $meditation;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Meditation $meditation): iterable
    {
        return [
            'meditation' => $meditation,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Медитации';
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
                ->canSee($this->meditation->exists),

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
                Input::make('meditation.title')
                    ->type('text')
                    ->vertical()
                    ->required()
                    ->title('Название:'),
                Quill::make('meditation.content')->title('Содержимое:'),
                Upload::make('meditation.attachments')
                    ->title('Файлы')
            ]),
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $this->meditation->fill($request->get('meditation'))->save();

        $this->meditation->attachments()->syncWithoutDetaching(
            $request->input('meditation.attachments', [])
        );
        Alert::info('Медитациия сохранена');
        return redirect()->route('back-meditations');
    }

    public function remove(Request $request)
    {
        $this->meditation->delete();

        Alert::info('Медитациия удалена');
        return redirect()->route('back-meditations');
    }
}
