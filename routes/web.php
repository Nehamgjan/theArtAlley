<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\ProductDiscountController;
use App\Http\Controllers\Admin\SubCategoryController;

use App\Http\Controllers\Artist\ArtistMainController;
use App\Http\Controllers\Artist\ArtistProductController;
use App\Http\Controllers\Artist\ArtistStoreController;

use App\Http\Controllers\Customer\CustomerMainController;

use App\Http\Controllers\MasterCategoryController;
use App\Http\Controllers\MasterSubCategoryController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// admin routes
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::controller(AdminMainController::class)->group(function(){
            Route::get('/dashboard', 'index')->name('admin');
            Route::get('/settings', 'setting')->name('admin.settings');
            Route::get('/manage/users', 'manage_user')->name('admin.manage.users');
            Route::get('/manage/stores', 'manage_stores')->name('admin.manage.stores');
            Route::get('/cart/history', 'cart_history')->name('admin.cart.history');
            Route::get('/order/history', 'order_history')->name('admin.order.history');
        });

        Route::controller(CategoryController::class)->group(function(){
            Route::get('/category/create', 'index')->name('category.create');
            Route::get('/category/manage', 'manage')->name('category.manage');
        });
        
        Route::controller(SubCategoryController::class)->group(function(){
            Route::get('/subcategory/create', 'index')->name('subcategory.create');
            Route::get('/subcategory/manage', 'manage')->name('subcategory.manage');
        });

        Route::controller(ProductController::class)->group(function(){
            Route::get('/product/manage', 'index')->name('product.manage');
            Route::get('/product/review/manage', 'review_manage')->name('product.review.manage');
        });

        Route::controller(ProductAttributeController::class)->group(function(){
            Route::get('/productattribute/create', 'index')->name('productattribute.create');
            Route::get('/productattribute/manage', 'manage')->name('productattribute.manage');
            Route::post('/defaultattribute/create', 'createattribute')->name('attribute.create');
            Route::get('/defaultattribute/{id}', 'showattribute')->name('show.attribute');
            Route::put('/defaultattribute/update/{id}', 'updateattribute')->name('update.attribute');
            Route::delete('/defaultattribute/delete/{id}', 'deleteattribute')->name('delete.attribute');
        });

        Route::controller(ProductDiscountController::class)->group(function(){
            Route::get('/discount/create', 'index')->name('discount.create');
            Route::get('/discount/manage', 'manage')->name('discount.manage');
        });

        Route::controller(PaymentController::class)->group(function(){
            Route::get('/payment/add', 'index')->name('payment.create');
            Route::get('/payment/manage', 'manage')->name('payment.manage');
        });

        Route::controller(MasterCategoryController::class)->group(function(){
            Route::post('/store/category', 'storecat')->name('store.cat');
            Route::get('/category/{id}', 'showcat')->name('show.cat');
            Route::put('/category/update/{id}', 'updatecat')->name('update.cat');
            Route::delete('/category/delete/{id}', 'deletecat')->name('delete.cat');
        });

        Route::controller(MasterSubCategoryController::class)->group(function(){
            Route::post('/store/subcategory', 'storesubcat')->name('store.subcat');
            Route::get('/subcategory/{id}', 'showsubcat')->name('show.subcat');
            Route::put('/subcategory/update/{id}', 'updatesubcat')->name('update.subcat');
            Route::delete('/subcategory/delete/{id}', 'deletesubcat')->name('delete.subcat');
        });
    });
});

// Artist routes
Route::middleware(['auth', 'verified', 'rolemanager:artist'])->group(function () {
    Route::prefix('artist')->group(function(){
        Route::controller(ArtistMainController::class)->group(function(){
            Route::get('/dashboard', 'index')->name('artist');
            Route::get('/order/history', 'orderhistory')->name('artist.order.history');            
        });

        Route::controller(ArtistProductController::class)->group(function(){
            Route::get('/product/create', 'index')->name('artist.product');
            Route::post('/product/store', 'storeproduct')->name('vendor.product.store');
            Route::get('/product/manage', 'manage')->name('artist.product.manage');
        });

        Route::controller(ArtistStoreController::class)->group(function(){
            Route::get('/store/create', 'index')->name('artist.store');
            Route::get('/store/manage', 'manage')->name('artist.store.manage');
            Route::post('/store/publish', 'store')->name('create.store');
            Route::get('/store/{id}', 'showstore')->name('show.store');
            Route::put('/store/update/{id}', 'updatestore')->name('update.store');
            Route::delete('/store/delete/{id}', 'deletestore')->name('delete.store');
        });
    });
});

// Customer routes
Route::middleware(['auth', 'verified', 'rolemanager:customer'])->group(function () {
    Route::prefix('user')->group(function(){
        Route::controller(CustomerMainController::class)->group(function(){
            Route::get('/dashboard', 'index')->name('dashboard');
            Route::get('/order/history', 'history')->name('customer.history');
            Route::get('/setting/payment', 'payment')->name('customer.payment');
            Route::get('/affiliate', 'affiliate')->name('customer.affiliate');
        });
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
