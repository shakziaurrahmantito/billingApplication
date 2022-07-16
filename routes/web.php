<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\productController;
use App\Http\Controllers\inventorieController;
use App\Http\Controllers\inventoryproductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//***For customer contorller
Route::get("/",[customerController::class,"custmoerAdd"]);
Route::post("/custmoerInsert",[customerController::class,"custmoerInsert"])->name("custmoerInsert");
Route::get("/customerlist",[customerController::class,"customerlist"]);
Route::get("/cusDel/{id}",[customerController::class,"cusDel"]);
Route::get("/cusEdit/{id}",[customerController::class,"cusEdit"]);
Route::post("/customerUpdate",[customerController::class,"customerUpdate"])->name("customerUpdate");



//***For product contorller
Route::get("/productAdd",[productController::class,"productAdd"]);
Route::post("/productInsert",[productController::class,"productInsert"])->name("productInsert");
Route::get("/productlist",[productController::class,"productlist"]);
Route::get("/proDel/{id}",[productController::class,"proDel"]);
Route::get("/proEdit/{id}",[productController::class,"proEdit"]);
Route::post("/productUpdate",[productController::class,"productUpdate"])->name("productUpdate");

Route::get("/getProduct",[productController::class,"getProduct"]);



//***For InventorieController contorller
Route::get("/addInventories",[inventorieController::class,"addInventories"]);
Route::get("/findBill",[inventorieController::class,"findBill"]);
Route::post("/inventorieInsert",[inventorieController::class,"inventorieInsert"])->name("inventorieInsert");
Route::post("/billNoSearch",[inventorieController::class,"billNoSearch"])->name("billNoSearch");
Route::post("/inventorieUpdate",[inventorieController::class,"inventorieUpdate"])->name("inventorieUpdate");



