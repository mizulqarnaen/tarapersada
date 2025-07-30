<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\layouts\WithoutMenu;
use App\Http\Controllers\layouts\WithoutNavbar;
use App\Http\Controllers\layouts\Fluid;
use App\Http\Controllers\layouts\Container;
use App\Http\Controllers\layouts\Blank;
use App\Http\Controllers\pages\AccountSettingsAccount;
use App\Http\Controllers\pages\AccountSettingsNotifications;
use App\Http\Controllers\pages\AccountSettingsConnections;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\pages\MiscUnderMaintenance;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use App\Http\Controllers\cards\CardBasic;
use App\Http\Controllers\user_interface\Accordion;
use App\Http\Controllers\user_interface\Alerts;
use App\Http\Controllers\user_interface\Badges;
use App\Http\Controllers\user_interface\Buttons;
use App\Http\Controllers\user_interface\Carousel;
use App\Http\Controllers\user_interface\Collapse;
use App\Http\Controllers\user_interface\Dropdowns;
use App\Http\Controllers\user_interface\Footer;
use App\Http\Controllers\user_interface\ListGroups;
use App\Http\Controllers\user_interface\Modals;
use App\Http\Controllers\user_interface\Navbar;
use App\Http\Controllers\user_interface\Offcanvas;
use App\Http\Controllers\user_interface\PaginationBreadcrumbs;
use App\Http\Controllers\user_interface\Progress;
use App\Http\Controllers\user_interface\Spinners;
use App\Http\Controllers\user_interface\TabsPills;
use App\Http\Controllers\user_interface\Toasts;
use App\Http\Controllers\user_interface\TooltipsPopovers;
use App\Http\Controllers\user_interface\Typography;
use App\Http\Controllers\extended_ui\PerfectScrollbar;
use App\Http\Controllers\extended_ui\TextDivider;
use App\Http\Controllers\icons\MdiIcons;
use App\Http\Controllers\form_elements\BasicInput;
use App\Http\Controllers\form_elements\InputGroups;
use App\Http\Controllers\form_layouts\VerticalForm;
use App\Http\Controllers\form_layouts\HorizontalForm;
use App\Http\Controllers\tables\Basic as TablesBasic;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\PageController;

// Main Page Route
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/schedules', [PageController::class, 'schedules'])->name('schedules');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/articles', [PageController::class, 'articles'])->name('articles');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::prefix('admin')
    ->name('admin.')
    // ->middleware(['web', 'auth']) // Add 'auth' if you want login protection
    ->group(function () {

        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });

        // Dashboard
        Route::view('/dashboard', 'admin.pages.dashboard')->name('dashboard');

        // Courses CRUD
        Route::resource('courses', CourseController::class);

        // Categories CRUD
        Route::resource('categories', CategoryController::class);

        // Articles CRUD
        Route::resource('articles', ArticleController::class);

        // Testimonials CRUD
        Route::resource('testimonials', TestimonialController::class);

        // Clients CRUD
        Route::resource('clients', ClientController::class);

        // Galleries CRUD
        Route::resource('galleries', GalleryController::class);

        // Services CRUD
        Route::resource('services', ServiceController::class);

        // Contacts CRUD
        Route::resource('contacts', ContactController::class);

        // Company CRUD
        Route::resource('company', CompanyController::class);

        // Users CRUD
        Route::resource('users', UserController::class);
    });