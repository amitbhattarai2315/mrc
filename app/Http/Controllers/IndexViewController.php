<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class IndexViewController extends Controller
{
    public function index(){
        $ql=DB::select('select * from quicklinks order by rank');
        $ss=DB::select('select * from slideshow order by rank');
       // dd($quick_links);
        return view('test',['ql'=>$ql,'ss'=>$ss]);
    }
    
}
