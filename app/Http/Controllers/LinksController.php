<?php

namespace App\Http\Controllers;

use App\Models\links;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function visitlink(Request $req)
    {
        
        $dest = links::where('link',$req->link)->first();
        return redirect($dest->dest);
    }
    public function newlink(Request $req)
    {
        $link = Str::random(4);
        if(links::insert(['link'=>$link,'dest'=>$req->link])){
            return view('mylink',[
                'link' => $link
            ]);
        }
        else{
            dd('Failed');
        }
    }
}
