<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialShareButtonsController extends Controller
{
    //
    public function ShareWidget()
    {
        $shareComponent = \Share::page(
            'https://compropay.com.br/',
            'Gostaria de compartilhar com você, uma experiência incrivel',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        return view('posts', compact('shareComponent'));
    }
}
