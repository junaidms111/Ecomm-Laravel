<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('/admin/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/admin/categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
Route::post('/admin/products/store', [ProductController::class, 'store'])->name('products.store');
Route::post('/admin/products/update/{id}', [ProductController::class, 'update'])->name('products.update');

Route::get('/admin/customer', [UserController::class, 'index'])->name('customers.index');
Route::get('/admin/customer/create', [UserController::class, 'create'])->name('customers.create');
Route::get('/admin/customer/edit', [UserController::class, 'edit'])->name('customers.edit');