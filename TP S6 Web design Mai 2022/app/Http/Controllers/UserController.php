<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\article;
use App\information;
use App\faq;
class UserController extends Controller
{
    public function index(Request $request)
    {
        $currentPage = $request->session()->get('numero');
        if($currentPage==null)
        {
            $currentPage = 1;
        }
 $bloc = 5; 
 $page = request()->query('page',1);      
$listeInfo = information::all();
$perPage = request()->query('perPage',$bloc);
$liste = article::orderBy("idarticle", "asc")->paginate($perPage, ['*'], 'page', $page);
$lastPage = $liste->lastPage(); 
$listeNumeroPage = range(1, $lastPage);

        return view('user/Acceuill_user',[
            'listeInfo' => $listeInfo,
            'listePub' => $liste,
            'currentPage' => $currentPage,
            'listeNumeroPage' => $listeNumeroPage,
            'lastPage' => $lastPage,
        ]);
    }


    public function pagination(Request $request)
    {
        $url = request('numero');
        $tab = array();
        $tab = explode(".", $url);
        $idarticle = $tab[count($tab)-3];
        $request->session()->put('numero',$idarticle);
        return redirect("front");
    }



      public function fiche()
     {
        $url = request('id');

        $tab = array();
      
        $tab = explode("-", $url);
      
        $id = $tab[count($tab)-2];
        $fiche = article::find($id);
        $premier = substr($fiche->resumer, 0, 1);
      
        $resume_reste = substr($fiche->resumer, 1, strlen($fiche->resumer)-1);     
    
               return view('user/Fiche_art',[
           'fiche' => $fiche,
         'premier' => $premier,
             'resume_reste' => $resume_reste,
         ]);


    }

    public function faq(Request $request)
    {
        $currentPage = $request->session()->get('faq');
        if($currentPage==null)
        {
            $currentPage = 1;
        }
 $bloc = 5; 
 $page = request()->query('page',1);      
$perPage = request()->query('perPage',$bloc);
$liste = faq::orderBy("idfaq", "asc")->paginate($perPage, ['*'], 'page', $page);
$lastPage = $liste->lastPage(); 
$listeNumeroPage = range(1, $lastPage);   

        return view('user/faq',[
            'liste' => $liste,
            'lastPage' => $lastPage,
            'listeNumeroPage' => $listeNumeroPage,
            'currentPage' => $currentPage,
        ]); 
    }

    public function insererFaq(Request $request)
    {
        $data = $request->all();
        faq::create($data);
    
        return redirect("faq");
    }


    public function paginationFAQ(Request $request)
    {
        $url = request('numero');
        $tab = array();
        $tab = explode(".", $url);
        $question = $tab[count($tab)-3];
        $request->session()->put('faq',$question);
        return redirect("faq");
    }


}

