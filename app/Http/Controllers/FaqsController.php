<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faq;

class FaqsController extends Controller
{
    public function listado(){
        $faqs = Faq::paginate(5);
        $vac = compact("faqs");
        return view('/listadoFaqs',$vac);
    }
}