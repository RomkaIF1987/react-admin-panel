<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Menus\GetSidebarMenu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $user = auth()->user();
            if($user){
                $roles =  $user->menuroles;
            }else{
                $roles = '';
            }
        } catch (Exception $e) {
            $roles = '';
        }
        if($request->has('menu')){
            $menuName = $request->input('menu');
        }else{
            $menuName = 'sidebar menu';
        }
        $menus = new GetSidebarMenu();
        return response()->json( $menus->get( $roles, $menuName ) );
    }

}

