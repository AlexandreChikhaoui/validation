<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
  public function insertOne(){
    $music = new Music;
    $music->name = $request->name;
    $music->firstname = $request->firstname;
    $music->title = $request->title;
    $music->year = $request->year;
    $music->quantity = $request->quantity;

      }
      public function deleteOne(Request $request,$id){
        $music = Music::find($id);
        $music->name()->detach();
        $music->firstname()->detach();
        $music->Title()->detach();
        $music->name()->detach();
        $music->year()->detach()
        $music->quantity()->detach()
        $music->delete();
        return redirect('/');
      }

      public function updateOne(Request $request, $id)
      {

        $music = Music::find($id);
        $NameAll = Name::all();
        Names = [];
        foreach ($NamesAll as $Name) {
          $Names[$value->id] = $value->name;
        }

        return view('update', ['names' => $names, 'firstnames' => $firstnames, 'titles' => $titles, 'years' => $years, 'quantities' => $quantities,]);
      }


}
