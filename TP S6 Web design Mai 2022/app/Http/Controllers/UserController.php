<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\article;
use App\information;
use App\faq;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $currentPage = $request->session()->get('numero');
        if ($currentPage == null) {
            $currentPage = 1;
        }
    
        // Cache la liste des informations pendant 60 secondes
        $listeInfo = Cache::remember('liste_info', 60, function () {
            return information::all();
        });
    
        $bloc = 5;
        $page = request()->query('page', 1);
        $perPage = request()->query('perPage', $bloc);
    
        // Cache la liste des articles pendant 60 secondes
        $liste = Cache::remember('liste_articles_' . $page . '_' . $perPage, 60, function () use ($perPage) {
            return article::orderBy("idarticle", "asc")->paginate($perPage);
        });
    
        $lastPage = $liste->lastPage();
        $listeNumeroPage = range(1, $lastPage);
    
        return view('user/Acceuill_user', [
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
        $currentPage = Cache::remember('currentPage_' . $idarticle, 60, function () use ($idarticle) {
            return $idarticle;
        });    
        $request->session()->put('numero', $currentPage);
        return redirect("front");
    }
    


      public function fiche()
     {
        $url = request('id');
        $tab = array();
        $tab = explode("-", $url);
        $id = $tab[count($tab)-2];
        $fiche = Cache::remember('fiche_' . $id, 60, function () use ($id) {
            return article::find($id);
        });
        $response = response()->view('user/Fiche_art', [
            'fiche' => $fiche,
        ]);
        $response->header('Cache-Control', 'max-age=3600, public');
        return $response;
    }

   
    public function faq(Request $request)
{
    $currentPage = $request->session()->get('faq');
    if ($currentPage == null) {
        $currentPage = 1;
    }
    $bloc = 5;
    $page = request()->query('page', 1);
    $perPage = request()->query('perPage', $bloc);

    $liste = Cache::remember('liste_faq_page_' . $page . '_per_page_' . $perPage, 60, function () use ($perPage) {
        return faq::orderBy("idfaq", "asc")->paginate($perPage);
    });
    $lastPage = $liste->lastPage();
    $listeNumeroPage = range(1, $lastPage);

    return view('user/faq', [
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
        $currentPage = Cache::remember('currentPageFaq_' . $question, 60, function () use ($question) {
            return $question;
        });    
        $request->session()->put('faq',$currentPage);
        return redirect("faq");
    }

}

