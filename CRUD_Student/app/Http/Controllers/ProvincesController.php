<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Provinces;

class ProvincesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces=Provinces::all();
        return view('provinces.index',compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('provinces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Provinces::create($request->all());
        return redirect()->route('provinces.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $province = Provinces::with(['districts', 'districts.students'])->find($id);
        if (!$province) {
            abort(404, 'Province not found');
        }
        return view('provinces.show', compact('province'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $province = Provinces::find($id);
        return view("provinces.edit", compact('province'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $province = Provinces::find($id);
        $province->update($request->all());
        return redirect()->route('provinces.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $provinces= Provinces::find($id);
        $provinces->delete();
        return redirect()->route('provinces.index')->with('success', 'Deleted Provinces');
    }
}
