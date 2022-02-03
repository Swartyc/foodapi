<?php
//55f4f7870c864602936c39f8a7e3fafc
//4ab5c3e49cb746eb8dd35673e691d303

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request, Illuminate\Support\Str;

class FoodController extends Controller
{
    public function index(){
      $response = Http::get('https://api.spoonacular.com/recipes/complexSearch?number=5&query=pasta&apiKey=4ab5c3e49cb746eb8dd35673e691d303');
      $food = $response->json();
      //dd($food);
      return view('food',[
        'food'=> $food,
    ]);
    }
    public function search(Request $request){
      $searching=$request->word;
      $searching_num=$request->number_choose;
      $response_search = Http::get('https://api.spoonacular.com/recipes/complexSearch?number='.$searching_num.'&query='.$searching.'&apiKey=4ab5c3e49cb746eb8dd35673e691d303');
      $foodsearch = $response_search->json();
      //dd($food);
      return view('food',[
        'food'=> $foodsearch,
    ]);
    }
    public function details($request){
      $response_details_summarise = Http::get('https://api.spoonacular.com/recipes/'.$request.'/summary?apiKey=4ab5c3e49cb746eb8dd35673e691d303');
      $response_details_ingredients = Http::get('https://api.spoonacular.com/recipes/'.$request.'/ingredientWidget.json?apiKey=4ab5c3e49cb746eb8dd35673e691d303');
      $response_details_equipments = Http::get('https://api.spoonacular.com/recipes/'.$request.'/equipmentWidget.json?apiKey=4ab5c3e49cb746eb8dd35673e691d303');
      $response_details_instructions = Http::get('https://api.spoonacular.com/recipes/'.$request.'/analyzedInstructions?apiKey=4ab5c3e49cb746eb8dd35673e691d303');
      $fooddetailssummarise = $response_details_summarise->json();
      $fooddetailsingredient = $response_details_ingredients->json();
      $fooddetailsequipment = $response_details_equipments->json();
      $fooddetailsinstruction = $response_details_instructions->json();
      //dd($fooddetailsinstruction);
      return view('fooddetails',[
        'summarise'=> $fooddetailssummarise,
        'food'=> $fooddetailsingredient,
        'equipment'=> $fooddetailsequipment,
        'instruction'=> $fooddetailsinstruction,
    ]);
    }
}