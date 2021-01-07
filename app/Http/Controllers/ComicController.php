<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    // detail page for a comic item

    public function show($id) {
        //return 'detail' . $id;

        $comics = config('comics');
        //dd($comics);


        //get specific comicby id

        $comic = [];
        foreach ($comics as $item) {
            if ($id == $item['id']) {
                $comic = $item;
            }
        }

        return view('comics.show', compact('comic'));
    }
}
