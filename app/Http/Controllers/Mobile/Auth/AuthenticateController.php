<?php

namespace App\Http\Controllers\Mobile\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use App\Events\Frontend\Auth\UserRegistered;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Repositories\Frontend\Auth\UserRepository;


/**
 * Class AuthController
 * @package App\Http\Controllers\Movil\Auth
 */
class AuthenticateController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }



    /**
     * @param UserRepositoryContract $user
     */
    public function index(){
        return 'indice';
    }

    public function register(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $iccid = $request->input('iccid');
        $imei = $request->input('imei');
        $operator_name = $request->input('operator_name');
        $phone_number = $request->input('phone_number');

         return response([
            'status' => 'success',
            'data' => $email
        ], 200);

        //$user = $this->userRepository->create($request->only('first_name', 'last_name', 'email', 'password'));
        
    
    }

    /**
     * Metodo de autenticacion por usuario pass e imei
     */
    public function authenticate(Request $request)
    {   
        // Obtiene las credenciales
        $email = $request->input('email');
        $password = $request->input('password');
        $iccid = $request->input('input.iccid');
        $imei = $request->input('input.imei');
        $operator_name = $request->input('input.operator_name');
        $phone_number = $request->input('input.phone_number');

        $credentials = ['email' => $email, 'password' => $password];
        //dd($credentials);

        
        if (!$token = JWTAuth::attempt($credentials)) {
            return response([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400);
        }

        return response([
            'status_code' => 1,
            'success' => true,
            'status_message' => 'success',
            'request_token' => $token
        ]);

       
        
    }

    public function logLogin($assignment, $user_briix, $user_cmovil, $imei, $operator_name, $iccid, $phone_number)
    {

        $array = [
            'token'=>$token,
            'user_id'=>$user_cmovil->id,
            'lat'=>$user_cmovil->lat, 
            'lng'=>$user_cmovil->lng 
            ];
            
        return response()->json(unserialize (str_replace (array ('NAN;', 'INF;'), '0;', serialize ($array))));
    }

    public function locationHistoryUser(Request $request)
    {   
        $array = [
            'token'=>$token,
            'user_id'=>$user_cmovil->id,
            'lat'=>$user_cmovil->lat, 
            'lng'=>$user_cmovil->lng 
            ];
            
        // all good so return the token
        return response()->json(unserialize (str_replace (array ('NAN;', 'INF;'), '0;', serialize ($array))));
    }

    public function sendInfoDevice(Request $request)
    {   
       

        $array = [
            'token'=>$token,
            'user_id'=>$user_cmovil->id,
            'lat'=>$user_cmovil->lat, 
            'lng'=>$user_cmovil->lng 
            ];
            
        // All good so return the token
        return response()->json($array);
    }
}
