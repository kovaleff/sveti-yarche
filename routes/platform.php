<?php

declare(strict_types=1);

use App\Orchid\Screens\Article\ArticleEditScreen;
use App\Orchid\Screens\Article\ArticleListScreen;
use App\Orchid\Screens\Meditation\MeditationEditScreen;
use App\Orchid\Screens\Meditation\MeditationListScreen;
use App\Orchid\Screens\News\NewsListScreen;
use App\Orchid\Screens\News\NewsEditScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\Service\ServiceEditScreen;
use App\Orchid\Screens\Service\ServiceListScreen;
use App\Orchid\Screens\Certificate\CertificateEditScreen;
use App\Orchid\Screens\Certificate\CertificateListScreen;
use App\Orchid\Screens\Review\ReviewEditScreen;
use App\Orchid\Screens\Review\ReviewListScreen;
use App\Orchid\Screens\Booking\BookingListScreen;
use App\Orchid\Screens\Booking\BookingEditScreen;
use App\Orchid\Screens\Social\SocialEditScreen;
use App\Orchid\Screens\Social\SocialListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));


Route::screen('/articles', ArticleListScreen::class)->name('back-articles');
Route::screen('/articles/{article}/edit', ArticleEditScreen::class)->name('back-articles.edit');
Route::screen('/articles/create', ArticleEditScreen::class)->name('back-articles.create');

Route::screen('/news', NewsListScreen::class)->name('back-news');
Route::screen('/news/{news}/edit', NewsEditScreen::class)->name('back-news.edit');
Route::screen('/news/create', NewsEditScreen::class)->name('back-news.create');

Route::screen('/services', ServiceListScreen::class)->name('back-services');
Route::screen('/services/{service}/edit', ServiceEditScreen::class)->name('back-services.edit');
Route::screen('/services/create', ServiceEditScreen::class)->name('back-services.create');

Route::screen('/socials', SocialListScreen::class)->name('back-socials');
Route::screen('/socials/{social}/edit', SocialEditScreen::class)->name('back-socials.edit');
Route::screen('/socials/create', SocialEditScreen::class)->name('back-socials.create');

Route::screen('/meditations', MeditationListScreen::class)->name('back-meditations');
Route::screen('/meditations/{meditation}/edit', MeditationEditScreen::class)->name('back-meditations.edit');
Route::screen('/meditations/create', MeditationEditScreen::class)->name('back-meditations.create');

Route::screen('/certificates', CertificateListScreen::class)->name('back-certificates');
Route::screen('/certificates/{certificate}/edit', CertificateEditScreen::class)->name('back-certificates.edit');
Route::screen('/certificates/create', CertificateEditScreen::class)->name('back-certificates.create');

Route::screen('/reviews', ReviewListScreen::class)->name('back-reviews');
Route::screen('/reviews/{review}/edit', ReviewEditScreen::class)->name('back-reviews.edit');
Route::screen('/reviews/create', ReviewEditScreen::class)->name('back-reviews.create');

Route::screen('/bookings', BookingListScreen::class)->name('back-bookings');
Route::screen('/bookings/{booking}/edit', BookingEditScreen::class)->name('back-bookings.edit');
Route::screen('/bookings/create', BookingEditScreen::class)->name('back-bookings.create');

// Route::screen('idea', Idea::class, 'platform.screens.idea');
