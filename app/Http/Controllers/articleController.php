<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ArtikelModel;

class articleController extends Controller
{
    public function index(){
        $articles = ArtikelModel::getAll();
        // dd($pertanyaan);
        // return view('pertanyaan', compact('pertanyaans'));
        return view('article', ['articles' => $articles]);
    }

    public function create(){
        return view('form');
    }

    public function save(Request $request){
        // dd($request->all());
        $slug = Str::slug($request->get('judul'));
        $articles = ArtikelModel::save(array_merge($request->all(), ['slug' => $slug], ['tag' => '-'], ['user_id' => '1']));

        return redirect('/artikel');
    }

    public function updateForm($id){
        $article = ArtikelModel::find_by_id($id);
        return view('edit', compact('article'));

    }

    public function update(Request $request, $id){
        $slug = Str::slug($request->get('judul'));
        $article = ArtikelModel::update($id, $request->all(), $slug, $tag);
        return redirect('/artikel');
    }
}
