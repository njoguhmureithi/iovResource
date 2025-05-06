<?php

namespace App\Http\Controllers;

use App\Models\SermonCategory;
use Illuminate\Http\Request;

class SermonCategoryController extends Controller
{
    
    /**
     * $this->active variable is defined in App\Http\Controllers\Controller.php
     * as a protected variable. It is used to determine which menu item should 
     * be show as active in the layouts.admin-nav.blade.php view
     */
    protected $active = 'sermon-categories';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.admin-category', [
                	'categories' => SermonCategory::get(),
                    'active' => $this->active
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-add-category', [
                    'active' => $this->active
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
        $request->validate([
            'name' => 'required|unique:sermon_categories',
        ]);

        SermonCategory::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('admin.sermons-category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sermonCategory = SermonCategory::findOrFail($id);
        
        return view('admin.admin-add-category', [
            'active' => $this->active,
            'sermonCategory' => $sermonCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required|unique:sermon_categories',
        ]);
        
        $sermonCategory = SermonCategory::findOrFail($id);
        $sermonCategory->name = $request->input('name');
        $sermonCategory->save();

        return redirect()->route('admin.sermons-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sermonCategory = SermonCategory::findOrFail($id);
        
        try {
            // Delete all notes in each sermon in the category
            $cat_sermons = $sermonCategory->sermons;
            foreach ($cat_sermons as $sermon) {
                $sermon->sermonNotes()->delete();

                // Delete the sermon in loop
                $sermon->delete();
            }        

            // Delete the category
            $sermonCategory->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
        
        return redirect()->route('admin.sermons-category.index');
    }
}
