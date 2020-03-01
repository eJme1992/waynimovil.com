<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
class SocialController extends Controller
{

 //Login   
public function redirect($provider)
{
    // LLENA LOS DATOS DEL API Y APUNTA A GOOGLE 
    return Socialite::driver($provider)->redirect();
}
 
//Registro 
public function callback($provider)
{
          
   
    $user = Socialite::driver($provider)->user();
    
    $google_client_token = [
        'access_token' => $user->token,
        'refresh_token' => $user->refreshToken,
        'expires_in' => $user->expiresIn
    ];
   
    $client = new Google_Client();
   
    /*
    $client->setApplicationName("Prueba de trabajo");
    $client->setDeveloperKey(env('GOOGLE_SERVER_KEY'));
    $client->setAccessToken(json_encode($google_client_token));

    $service = new Google_Service_People($client);

    $optParams = array('requestMask.includeField' => 'person.phone_numbers,person.names,person.email_addresses');
    $results = $service->people_connections->listPeopleConnections('people/me',$optParams);

    dd($results);*/
 
}

function createUser($getInfo,$provider){
 
 $user = User::where('provider_id', $getInfo->id)->first();
 
 if (!$user) {
     $user = User::create([
        'name'     => $getInfo->name,
        'email'    => $getInfo->email,
        'provider' => $provider,
        'provider_id' => $getInfo->id
    ]);
  }
  return $user;
}
}