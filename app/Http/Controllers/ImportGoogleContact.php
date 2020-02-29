<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportGoogleContact extends Controller
{
    
    public function import()
    {
        $contacts = rapidweb\googlecontacts\factories\ContactFactory::getAll();

        var_dump($contacts);

    }


}
