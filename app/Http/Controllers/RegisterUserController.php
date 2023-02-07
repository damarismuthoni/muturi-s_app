<?php

namespace App\Http\Controllers;

use app\Models\RegisterUser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;


class RegisterUserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getRegisterUsers(){

        $RegisteredUsers = RegisterUser::all(); 


        return $RegisteredUsers;
    }
        public function register(Request $request){
            
            $validatedData = Validator::make($request->all(), [
                'username' => ['required'],
                'email' => ['required', 'unique:police_users','min:8'],
                'password' => ['required']
            ]);

            if ($validatedData->fails()) {
                $errors =  $validatedData->errors();
                $message = "Ërror During Registration";

                // If the Laravel Validation fails:
                //      - Go back to the log in page, but pass the $errors and $message variable above
                return view('register', compact('errors', 'message'));
                
            }
            
            $newRegisteredUsers = RegisterUser::create([
                'username' => $request->police_name,  
                'email' => $request->reg_no,
                'password' => bcrypt($request->password)
            ]);

            // If the new user was created successfully (the object is not null)
            if ($newRegisteredUsers == NULL) {
                return response()->json(['error' => 'Failed to create new user'], 401);
            }



            // Generate an authenticaton token which will log in the user....at the same time generating an authentication token
            $loggedIn = auth()->attempt([
                'username' => $request->username,
                'password' => $request->password
            ]);

            // If the token failed to generate, we should throw an error
            if (!$loggedIn) {
                return response()->json(['error' => 'Failed to return auth token'], 401);
            }

            // Return the logged in user's token 
            // return $this->createNewToken($token);
            
            session(['user' => $newRegisteredUsers]);

        
            return redirect('/homepage');

        
            return $newRegisteredUsers;
        
    
        }


        
        public function login(Request $request){
        $validatedData = Validator::make($request->all(), [
            'username' => ['required', 'exists:username'],
            'password' => ['required']
        ]);

        if ($validatedData->fails()) {
            $errors =  $validatedData->errors();
            $message = "Ërror During Login";

            // If the Laravel Validation fails:
            //      - Go back to the log in page, but pass the $errors and $message variable above
            return view('login', compact('errors', 'message'));
            
        }


        
        // Generate an authenticaton token which will log in the user....at the same time generating an authentication token
        $loggedIn = auth()->attempt($validatedData->validated());

        // If the token failed to generate, we should throw an error
        if (!$loggedIn) {
            $message = "Ërror During Login";
            $errors = new MessageBag([
                'password' => 'Invalid Password Entered'
            ]);


             //      - Go back to the log in page, but pass the $errors and $message variable above
            return view('login', compact('errors', 'message'));
        }

        $user = auth()->user();
        
        // TODO: We will store the logged in user in a Session variable,
        //          So that we can access the logged in user across the application

        Session(['user' => $user]);
        // return session('user');

        return redirect('/homepage');


    }




     


    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return [
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ];
    }

}







