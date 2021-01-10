<?php

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

use App\Http\Menus\GetSidebarMenu;
use App\Models\Menulist;

Route::get('/', function () {
    return view('api');
});

Route::get('test', function (\Illuminate\Http\Request $request) {
    if($request->has('menu')){
        $menuName = $request->input('menu');
    }else{
        $menuName = 'sidebar menu';
    }
    $roles = '';
    $menus = new GetSidebarMenu();
    return response()->json( $menus->get( $roles, $menuName ) );
});

//Route::get('/{any}', function () {
//    return view('coreui.homepage');
//})->where('any', '.*');
