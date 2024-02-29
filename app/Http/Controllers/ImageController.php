<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(Request $request){
        return view('image');
        
    }

    public function ph(Request $request){
        $request->validate([
           
            'photo' => 'image',
        ]);
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos');
        } else {
            $photoPath = 'photos/default.jpg';
        }

        // Создание нового пользователя
        $user = new User();
        $user->UserPhoto = $photoPath;
      

       
    }

    public function ppp(Request $request){
        return view('papka.ppp');
    }
    
    }



