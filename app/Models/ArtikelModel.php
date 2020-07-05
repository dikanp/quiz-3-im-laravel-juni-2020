<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel 
{
    public static function getAll(){
        $items = DB::table('articles')->get();
        return $items;
    }

    public static function save($data){
        unset($data["_token"]);
        $article = DB::table('articles')->insert($data);
        return $article;
    }

    public static function find_by_id($id){
        $item = DB::table('articles')->where('id', $id)->first();
        return $item;
    }

    public static function update($id, $request){
        $item = DB::table('articles')->where('id', $id)->update([
            'judul' => $request["judul"],
            'isi' => $request['isi'],
            'slug' => $request['slug'],
            'tag' => $request['tag']
        ]);
        return $item;
    }
}
