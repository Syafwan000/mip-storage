<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.items', [
            'title' => 'Items',
            'items' => Items::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.items.create', [
            'title' => 'Items',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'category_id' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Items::create($validatedData);

        return redirect('/dashboard/items')->with('successAddItem', 'Berhasil menambahkan data barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.items.edit', [
            'title' => 'Items',
            'item' => Items::find($id),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|max:255',
            'category_id' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Items::where('id', $id)->update($validatedData);

        return redirect('/dashboard/items')->with('successUpdateItem', 'Data barang berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Items::destroy($id);

        return redirect('/dashboard/items')->with('successDeleteItem', 'Berhasil menghapus data barang');
    }
}
