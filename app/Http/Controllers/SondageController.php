<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sondage;

class SondageController extends Controller
{
    public function create()
    {
        return view('sondage.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'question' => 'required|string',
            'options' => 'required|array',
        ]);

        Sondage::create($data);

        return redirect()->back()->with('success', 'Sondage créé avec succès !');
    }

    public function show($id)
    {
        $sondage = Sondage::findOrFail($id);
        return view('sondage.show', compact('sondage'));
    }

    public function respond(Request $request, $id)
    {
        $sondage = Sondage::findOrFail($id);
        $response = $request->input('response');

        // Enregistrez la réponse dans la base de données ou effectuez un traitement supplémentaire

        return redirect()->back()->with('success', 'Réponse enregistrée avec succès !');
    }
}
