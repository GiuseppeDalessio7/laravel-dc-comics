<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        return view('admin.comics.index', compact('comics'));

        $comics = Comic::all();
        return view('/list_comics', compact('comics'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->type = $data['type'];
        $newComic->artists = $data['artists'];
        $newComic->writers = $data['writers'];


        if ($request->has('thumb')) {
            $img_path = Storage::put('comics_thumbs', $request->thumb);
            $newComic->thumb = $img_path;
        }

        $newComic->save();

        return to_route('comics.index',)->with('message', 'Well Done, New Entry Added Succeffully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
