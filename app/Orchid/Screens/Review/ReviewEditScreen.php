<?php

namespace App\Orchid\Screens\Review;

use App\Models\Review;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ReviewEditScreen extends Screen
{
    public $review;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Review $review): iterable
    {
        return [
            'review' => $review,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->review->exists ? 'Редактировать отзыв' : 'Создать отзыв';
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
                ->canSee($this->review->exists),

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
                Input::make('review.name')
                    ->type('text')
                    ->vertical()
                    ->required()
                    ->title('Имя:'),

                Input::make('review.stars')
                    ->type('number')
                    ->vertical()
                    ->required()
                    ->min(1)
                    ->max(5)
                    ->value(5)
                    ->title('Количество звезд (1-5):'),

                Quill::make('review.review')
                    ->title('Отзыв:'),

                Cropper::make('review.photo')->targetRelativeUrl()
                    ->title('Фото')
                    ->width(500)
                    ->height(500),
            ]),
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $reviewData = $request->get('review');

//        // Cropper возвращает массив ID вложений
//        if (isset($reviewData['photo']) && is_array($reviewData['photo'])) {
//            $reviewData['photo'] = count($reviewData['photo']) > 0
//                ? $reviewData['photo'][0]
//                : null;
//        }

        $this->review->fill($reviewData)->save();
        Alert::info('Отзыв сохранен');
        return redirect()->route('back-reviews');
    }

    public function remove(): void
    {
        $this->review->delete();

        Alert::info('Отзыв удален');
    }
}
