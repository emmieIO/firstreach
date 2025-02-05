<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ShipmentTrackingController;
use App\Http\Controllers\ShipmentHistoryController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\CustomerMessageController;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/services", function () {
    return view("services");
})->name("services");

Route::get("/about", function(){
    return view("about");
})->name("about");

Route::get("/contact-us",function(){
    return view("contact");
})->name("contact");

Route::get('/track-shipment', function () {
    return view('shipment-tracking.index');
})->name("shipment.tracking");


Route::post('/track-shipment',[ShipmentTrackingController::class, 'track'] )
->name("get.shipment.tracking");

Route::get('/dashboard', [AdminUsersController::class, 'dashboard'])
->middleware(['auth'])
->name('dashboard');

Route::post("/contact-us", [CustomerMessageController::class, 'store'])
->name("contact.store");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    // users
    Route::get("users", [AdminUsersController::class, 'index'])->name( "admin.users");
    Route::delete("users/{uuid}/destroy", [AdminUsersController::class, 'destroy'] )->name("admin.users.delete");
    // Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{uuid}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{uuid}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Locations
    Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
    Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
    Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
    Route::get('/locations/{uuid}/edit', [LocationController::class, 'edit'])->name('locations.edit');
    Route::put('/locations/{uuid}', [LocationController::class, 'update'])->name('locations.update');
    Route::delete('/locations/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');

    // Shipments
    Route::get('/shipments', [ShipmentController::class, 'index'])->name('shipments.index');
    Route::get('/shipments/create', [ShipmentController::class, 'create'])->name('shipments.create');
    Route::post('/shipments', [ShipmentController::class, 'store'])->name('shipments.store');
    Route::get('/shipments/{uuid}/edit', [ShipmentController::class, 'edit'])->name('shipments.edit');
    Route::put('/shipments/{uuid}', [ShipmentController::class, 'update'])->name('shipments.update');
    Route::delete('/shipments/{shipment}', [ShipmentController::class, 'destroy'])->name('shipments.destroy');

    // Shipments History
    Route::get('/shipments/history', [ShipmentController::class, 'history'])->name('shipments.logs');
    Route::get('/shipments/{uuid}/history', [ShipmentHistoryController::class, 'logs'])->name('shipment.history');
    Route::get('/shipments/{uuid}/history/create', [ShipmentHistoryController::class, 'create'])
    ->name('create.shipment.history');
    Route::post('/shipments/{uuid}/history/create',[ShipmentHistoryController::class, 'store'])
    ->name("store.shipment.history");
    Route::get('/shipments/{uuid}/history/{historyId}/edit', [ShipmentHistoryController::class, 'edit'])->name('shipment.history.edit');
    Route::put('/shipments/{uuid}/history/{historyId}/edit', [ShipmentHistoryController::class, 'update'])
    ->name('shipment.history.update');
    Route::delete('/shipments/{uuid}/history/{historyId}/destroy', [ShipmentHistoryController::class, 'destroy'])
    ->name('shipment.history.delete');

    // contact-messaage
    Route::get('/contact-messages', [CustomerMessageController::class, 'index'])->name('messages.index');
    Route::get('/contact-messages/{uuid}', [CustomerMessageController::class, 'show'])->name('message.show');
    Route::delete('/contact-messages/{uuid}', [CustomerMessageController::class, 'destroy'])->name('message.destroy');
});

require __DIR__.'/auth.php';
