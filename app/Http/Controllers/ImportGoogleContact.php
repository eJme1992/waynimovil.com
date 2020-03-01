<?php

namespace App\Http\Controllers;

require_once __DIR__ . '/vendor/autoload.php';


use RapidWeb\GooglePeopleAPI\GooglePeople;
use RapidWeb\GoogleOAuth2Handler\GoogleOAuth2Handler;

use Illuminate\Http\Request;


class ImportGoogleContact extends Controller
{
    
    public function import()
    {
    
        $clientId     = '65...n.apps.googleusercontent.com';
        $clientSecret = 'fc...X';
        $refreshToken = '1...2V';
        $scopes       = ['https://www.googleapis.com/auth/userinfo.profile', 'https://www.googleapis.com/auth/contacts', 'https://www.googleapis.com/auth/contacts.readonly'];

        $googleOAuth2Handler = new GoogleOAuth2Handler($clientId, $clientSecret, $scopes, $refreshToken);
        $people = new GooglePeople($googleOAuth2Handler);

        // Retrieval all contacts
        foreach($people->all() as $contact) {
        echo $contact->resourceName.' - ';
        if ($contact->names) {
            echo $contact->names[0]->displayName . "<br>";
        }
        echo PHP_EOL;
        }
        
    }


}
