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
        if(Str::contains($dest, ['http'])){
            $url =  $dest->dest; 
        }
            
        
        else{
            
            $url = 'http://'.$dest->dest;
            
        }
        return redirect($url);
    }
    public function newlink(Request $req)
    {
        $this->validate($req,[
            'link' => 'url|required'
        ]);
        
        if($req->linkname){
            $link = $req->linkname;
        }
        else{
            $link = Str::random(5);
        }
        
        
        if(!links::where('link',$link)->count() == 0){
            return redirect()->back()->with(['status'=>'Link naam is al in gebruik']);
        }

        if(links::create(['link'=>$link,'dest'=>$req->link,'ip'=>$req->ip()])){
            return redirect()->route('mylink', ['link' => $link]);
        }
        else{
            dd('Failed');
        }
    }
    public function mylink(Request $req)
    {
        $links = links::where('ip',$req->ip())->orderBy('created_at', 'DESC')->paginate(10);
        
        return view('mylink',[
            'links' => $links,
            'req' => $req,
        ]);
    }
}
