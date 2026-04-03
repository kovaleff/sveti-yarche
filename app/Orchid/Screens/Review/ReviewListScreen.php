<?php

namespace App\Orchid\Screens\Review;

use App\Models\Review;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Toast;

class ReviewListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'reviews' => Review::latest()->get()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Отзывы';
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
                ->route('back-reviews.create'),
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
            Layout::table('reviews', [
                TD::make('name'),
                TD::make('stars')
                    ->render(function (Review $review) {
                        return str_repeat('★', $review->stars) . str_repeat('☆', 5 - $review->stars);
                    }),
                TD::make('review')
                    ->width('400px')
                    ->render(function (Review $review) {
                        return mb_strwidth($review->review, 'UTF-8') > 100
                            ? mb_substr($review->review, 0, 100, 'UTF-8') . '...'
                            : $review->review;
                    }),
                TD::make('photo')
                    ->render(function (Review $review) {
                        if ($review->photo) {
                            return '<img src="' . $review->photo . '" alt="photo" style="max-width: 50px; max-height: 50px;">';
                        }
                        return '—';
                    }),
                TD::make('Actions')
                    ->alignRight()->render(function (Review $review) {
                        return DropDown::make()
                            ->icon('bs.three-dots-vertical')
                            ->list([
                                Link::make(__('Редактировать'))
                                    ->route('back-reviews.edit', $review->id)
                                    ->icon('bs.pencil'),

                                Button::make(__('Удалить'))
                                    ->icon('bs.trash3')
                                    ->confirm(__('Удалить?'))
                                    ->method('remove', [
                                        'id' => $review->id,
                                    ]),
                            ]);
                    }),
            ]),
        ];
    }

    public function remove(Request $request): void
    {
        Review::findOrFail($request->get('id'))->delete();

        Toast::info(__('Отзыв удален!'));
    }
}
