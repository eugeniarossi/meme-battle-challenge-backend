<?php

namespace App\Http\Controllers;

use App\Models\Meme;
use Illuminate\Http\Request;

class MemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memes = Meme::all(); // prende tutti i meme

        return response()->json($memes); // e li restituisce in formato json
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // funzione per creare un nuovo record nel db
    public function store(Request $request)
    {
        $data = $request->all(); // salvo i dati passati dal frontend in $data

        if (is_array($data['preview'])) {  // verifica se 'preview' è un array 
            $data['preview'] = json_encode($data['preview']); // se lo è lo converte in una stringa JSON
        }

        $newMeme = Meme::create($data); // crea un nuovo record utilizzando il modello Meme

        return response()->json(['message' => 'Meme creato con successo'], 201);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    // funzione per incrementare lo score di un meme già presente nel db
    public function update(Request $request, $id)
    {
        $meme = Meme::find($id); // cerca tra i meme quello con l'id passato dal frontend

        if ($meme) { // controlla che il meme esista
            $meme->score = $meme->score + 1; // incrementa lo score
            $meme->save(); //salva i nuovi dati
            return response()->json(['message' => 'Punteggio aggiornato con successo']);
        } else {
            return response()->json(['message' => 'Meme non trovato'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
