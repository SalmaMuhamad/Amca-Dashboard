<?php

namespace App\Http\Controllers;

use App\Almahir_Academy;
use App\Almahir_content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Mime\Encoder\ContentEncoderInterface;

class almahirController extends Controller
{

    public function postUpdateIntro(Request $req)
    {
        $introContent = Almahir_content::where('key','intro')->first();

         $introContent -> update([
            'content' => $req->intro,
        ]); 

        $introContent->save();

        return redirect()->back()->with('message','AlMahir intro updated successfully');

    }

    public function postUpdateAbout(Request $req)
    {
        $allContent = Almahir_content::all();

        $breifContent = $allContent->where('key' , 'breif')->first();
        $missionContent = $allContent->where('key' , 'mission')->first();
        $visionContent = $allContent->where('key' , 'vision')->first();

        $breifContent->content = $req->breif;
        $missionContent->content = $req->mission;
        $visionContent->content = $req->vision;

        $breifContent->save();
        $missionContent->save();
        $visionContent->save();

        return redirect()->back()->with('message','AlMahir AboutUS updated successfully');
    }

    /* public function postUpdate(Request $req  ){
         
        $allContent = Almahir_content::all();

        //dd($allContent->where('key' , 'intro')->first());

        if(isset($req->intro)){

            $intro = $allContent->where('key' , 'intro')->first();

            $intro->content = $req->intro;

            $intro->save();
        }
         
        //dd($intro);

        //update introduction section 

    
         $introContent = Almahir_content::where('key','intro')->first();

         //dd($introContent);

         $introContent -> update([
            'content' => $req->intro,
        ]); 

        $introContent->save();

         //update mission section
        

        
        //update who are we section
         $whoContent = Almahir_content::where('key' , 'who')->first();

        $whoContent -> update([
            'content' => $req->breif,
        ]); 

        $whoContent->save();

        //update mission section
        $missionContent = Almahir_content::where('key','mission')->first();

        $missionContent->update([
            'content' => $req->mission,
        ]);

        $missionContent->save();

        //update vision content
        /* $visionContent = Almahir_content::where('key','vision')->first();
        
        $visionContent->update([
            'content'=> $req->vision,
        ]);

        $visionContent->save(); 



        return redirect()->back();    

    } */

    public function getUpdate(){
        //get intro data
        $introContent = Almahir_content::where('key','intro')->first();
        return view('admin.homeMahir',compact('introContent'));

        //get breif data
        /* $whoContent = Almahir_content::where('key','who')->first();
        return view('admin.aboutMahir',compact('whoContent')); */

    }
    
}
