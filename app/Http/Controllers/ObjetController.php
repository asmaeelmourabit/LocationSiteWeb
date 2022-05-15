<?php

namespace App\Http\Controllers;
use App\Models\objet;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObjetController extends Controller
{
     //
     public function _construct(){
        $this->middleware(['auth','verified']);
      }

      public function index(){
          //$objets= objet::latest()->get();
          $count = DB::table('objets')
          ->join('annonces', 'objets.id', '=', 'annonces.id_objet')
          ->where([
              ['objets.user_id', '=', auth()->user()->id],
              ['annonces.etat', '=', '1'],
              ])
            ->select('annonces.*','objets.image','objets.nom','objets.description')
            ->count();

          $objets= objet::where('user_id', '=', auth()->user()->id)->latest()->get();

          $data = [
            'objets'=> $objets,
            'count'   => $count,
        ];

          return view('myProduct')->with($data);
          //return view('home')->with(['objets'=> $objets]);
      }
      public function create(){
          return view('ajouterObjet');
      }
      public function store(Request $REQUEST){


          if( $REQUEST->has('image'))
           {
              $file=$REQUEST->image;
              $imagename=$file->getClientOriginalName();
              $file->move(public_path('uploads'),$imagename);
          }
      objet::create([
          'nom'=> $REQUEST->nom,
          'etat'=> $REQUEST->etat,
          'description'=> $REQUEST->description,
          'image'=> $imagename,
          'user_id'=> auth()->user()->id

          ]);

          return redirect()->route('mesObjets')->with([ 'success' => 'Product Added']);
   }
    public function storeAnnonce(Request $REQ){

        $this->validate($REQ,[

            'date_debut' => 'required|after:yesterday',
        
            'date_fin' => 'required|date|after_or_equal:date_debut'
        ]);


        $annonce=new Annonce();

        $annonce->id_objet =$REQ->id_objet;
        $annonce->prix =$REQ->prix;
        $annonce->ville =$REQ->ville;
        $annonce->premium =$REQ->premium;
        $annonce->date_debut =$REQ->date_debut;
        $annonce->date_fin =$REQ->date_fin;
        $annonce->etat="1";
        $annonce->save();
        //$ann=Objet::all();
        $ann = DB::table('objets')
        ->join('annonces', 'objets.id', '=', 'annonces.id_objet')
        ->where([
            ['objets.user_id', '=', auth()->user()->id],
            ['annonces.etat', '=', '1'],
            ])
        ->select('annonces.*','objets.image','objets.nom','objets.description')
        ->latest()->get();
       
        return view('profile.MesAnnonces')->with(['ann'=>$ann]);
        

    }
    public function edit_function($id)
    {
     $objets = objet::find($id);
     return view('objetedit', compact('objets'));
    }
 
 
    public function update_function(Request $request, $id)
    {
     $objets = objet::find($id);
 
     $objets->nom = $request->input('nom');
     $objets->description = $request->input('description');
     $objets->etat = $request->input('etat');
 
     $objets->update();
     return redirect('myProduct')->with('success','Data Updated !');
    }
    public function delete_function($id)
   {
    $objets = objet::find($id);

    $objets->delete();
    return redirect('myProduct')->with('success','Data Deleted !');
   }
}

