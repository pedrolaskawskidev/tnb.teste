<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use Illuminate\Http\Request;


class DepartamentController extends Controller
{
    
    public function index()
    {
        $departaments = Departament::all();
        
       return view('departament.index',['departaments' => $departaments]);
    }

   
    public function create()
    {
        return view('departament.create');
    }

  
    public function store(Request $request)
    {
        $data = $request->all();
        Departament::create($data);
        return redirect()->route('departament.index');

    }
    
    public function edit(string $id)
    {
        $departament =  Departament::findOrFail($id);
        return view('departament.edit', ['departament' => $departament]);
    }

    
    public function update(Request $request, string $id)
    {
        $data = $request->except('_token', '_method');
        
       $departament = Departament::findOrFail($data['id']);
       $departament->update($data);

        return redirect()->route('departament.index');
    }

   
    public function destroy(string $id)
    {
        $departament = Departament::find($id);
        $departament->delete();

        return redirect()->route('departament.index');

    }
}
