<?php


namespace App\Http\Controllers\Mobile\Auth\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\Datatables\Facades\Datatables;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use Auth;
use Carbon\Carbon as Carbon;

use App\Models\Auth\User;
/**
 * Class UserController
 */
class UserController extends Controller
{
    
    public function __construct()
    {
      
    }

    public function products(Request $request)
    {   
    	$user = $request->input('input.user');
        $role_id = $request->input('input.role_id');
        $user = User::find($user);

    	if (! $user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }
        
        $results = collect($user);
        
       
        return response()->json(['results'=>$results]);
    }

    public function roles(Request $request)
    {   
        $user_cmovil = $request->input('input.user_cmovil');
        $user = User::find($user_cmovil);
        $results = $user->roles;

        return response()->json(['results' => $results]);
    }
}