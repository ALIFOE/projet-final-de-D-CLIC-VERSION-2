<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\InstallationController;
use App\Http\Controllers\Client\RealtimeDataController;
use App\Http\Controllers\Client\InverterController;
use App\Http\Controllers\DimensionnementController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MarketplaceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnduleurController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\LogActiviteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Routes pour les dimensionnements
    Route::resource('dimensionnements', DimensionnementController::class);

    // Routes pour onduleurs
    Route::get('/onduleurs', [OnduleurController::class, 'index'])->name('onduleurs.index');
    Route::get('/onduleurs/create', [OnduleurController::class, 'create'])->name('onduleurs.create');
    Route::post('/onduleurs', [OnduleurController::class, 'store'])->name('onduleurs.store');
    Route::get('/onduleurs/{id}', [OnduleurController::class, 'show'])->name('onduleurs.show');
    Route::get('/onduleurs/{id}/edit', [OnduleurController::class, 'edit'])->name('onduleurs.edit');
    Route::put('/onduleurs/{id}', [OnduleurController::class, 'update'])->name('onduleurs.update');
    Route::delete('/onduleurs/{id}', [OnduleurController::class, 'destroy'])->name('onduleurs.destroy');
    Route::post('/onduleurs/{id}/toggle-connection', [OnduleurController::class, 'toggleConnection'])->name('onduleurs.toggle-connection');
    Route::get('/onduleurs/{id}/performance', [OnduleurController::class, 'performance'])->name('onduleurs.performance');

    // Routes pour le client
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes pour les activités
    Route::get('/activites', [LogActiviteController::class, 'index'])->name('activites.index');
    Route::get('/activites/export-pdf', [LogActiviteController::class, 'exportPDF'])->name('activites.export-pdf');
});

// Routes pour le blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/search', [BlogController::class, 'search'])->name('blog.search');
Route::get('/blog/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/tag/{slug}', [BlogController::class, 'tag'])->name('blog.tag');
Route::get('/blog/author/{id}', [BlogController::class, 'author'])->name('blog.author');

// Routes pour les pages statiques
Route::get('/fonctionnalite', function () {
    return view('fonctionnalite');
})->name('fonctionnalite');

Route::get('/market-place', [MarketplaceController::class, 'index'])->name('market-place');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/formation', function () {
    return view('formation');
})->name('formation');

Route::get('/installation', function () {
    return view('installation');
})->name('installation');

// Routes pour le contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/service', function () {
    return view('service');
})->middleware(['auth'])->name('service');

// Routes pour l'administration des messages de contact
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/contacts', [ContactController::class, 'admin'])->name('admin.contacts');
    Route::patch('/admin/contacts/{id}/mark-read', [ContactController::class, 'markAsRead'])->name('admin.contacts.mark-read');
    Route::delete('/admin/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
});

Route::get('/dimensionnement', [DimensionnementController::class, 'showForm'])->name('dimensionnement');
Route::post('/dimensionnement', [DimensionnementController::class, 'submit'])->name('dimensionnement.submit');

// Routes pour le processus de paiement
Route::get('/checkout/{product}', [PaymentController::class, 'showCheckout'])->name('checkout');
Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('process.payment');
Route::get('/payment-success/{order}', [PaymentController::class, 'paymentSuccess'])->name('payment.success');

// Routes pour les commandes
Route::middleware(['auth'])->group(function () {
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/orders/{order}/success', [OrderController::class, 'success'])->name('orders.success');
});

// Routes d'administration
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('orders.show');
    Route::put('/orders/{order}/status', [App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])->name('orders.update-status');
    Route::get('/users/{user}', [App\Http\Controllers\Admin\UtilisateurController::class, 'show'])->name('users.show');
});

Route::get('/devis/create', [DevisController::class, 'create'])->name('devis.create');
Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');

require __DIR__.'/auth.php';
