<?php

namespace App\Http\Controllers;

use App\Mail\CustomerMail;
use App\Mail\SalesMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class appController extends Controller
{
    //

    public function index()
    {
        $data = array(
            "header_title" => "The Essential Daru",
            "header_background" =>"libs/image/header-daru.jpg"
        );
        return View::make('app.main')->with('data',$data);
    }

    public function video($type)
    {
        $link = "";
        if($type == "nyaman"){
            $link = "https://my.matterport.com/show/?m=99ay2KKFceq";
        }elseif ($type == "asri"){
            $link = "https://my.matterport.com/show/?m=JvmSynV3c7N";
        }else{
            return redirect('/');
        }
        return View::make('app.video')->with('link',$link);
    }
    public function kontak()
    {
        $data = array(
            "header_title" => "Hubungi Kami",
            "header_background" =>"libs/image/header-kontak.jpg"
        );
        return View::make('app.contacts')->with('data',$data);
    }

    public function daruIndex()
    {
        $data = array(
            "header_title" => "The Essential Daru",
            "header_background" =>"libs/image/header-daru.jpg"
        );
        return View::make('app.daru')->with('data', $data);
    }

    public function daruAsri()
    {
        return View::make('app.daru-asri');
    }
    public function daruNyaman()
    {
        return View::make('app.daru-nyaman');
    }

    public function zHouse()
    {
        return View::make('app.daru-zhouse');
    }

    public function aboutUs()
    {
        $data = array(
            "header_title" => "",
            "header_background" =>"libs/image/header-tentang-kami.jpg"
        );
        return View::make('app.tentang-kami')->with('data',$data);
    }

}
