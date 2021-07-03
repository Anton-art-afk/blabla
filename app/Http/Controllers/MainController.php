<?php

namespace App\Http\Controllers;
use App\Models\knigi;

use Illuminate\Http\Request;


class MainController extends Controller
{
 public function home(){
     return view( view: 'home');
 }
 public function katalog(){
    return view('katalog', ['aga'=> knigi:: all()]);
}
public function adminkaa(){
    return view( view: 'adminkaa');
}
public function postupleniaa(){
 return view('postupleniaa', ['date'=> knigi:: all()]);
}
public function check(Request $am) {
   $valid = $am -> validate([
       'Avtor' => 'required|max:100',
       'Nazvanie' => 'required|max:100',
       'Shanr' => 'required|max:100'
   ]);
   $rewiew = new knigi();
   $rewiew->Avtor = $am ->input(key: 'Avtor');
   $rewiew->Nazvanie = $am ->input(key: 'Nazvanie');
   $rewiew->Shanr = $am ->input(key: 'Shanr');
   $rewiew->Opisanie = $am ->input(key: 'Opisanie');
   $rewiew->save();
   return redirect()->route(route: 'erwe');
}
public function zapis(){
    return view( view: 'zapis');

}
public function zapisdva(){
    return view( view: 'zapisdva');

}
public function ida(){
    return view( view: 'knigi');

}
public function knigi1(){
    return view( view: 'knigi1');

}
}





