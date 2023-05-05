<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function showAddForm()
    {
        return view('pages.add-news');
    }
    public function addNews(Request $request)
    {
        // Validați datele primite prin formular
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        // Salvați noutatea în baza de date
        $news = new News;
        $news->title = $validatedData['title'];
        $news->description = $validatedData['description'];
        $news->save();

        // Redirecționați utilizatorul înapoi pe pagina de adăugare a noutăților cu un mesaj de succes
        return redirect()->route('add-news')->with('success', 'Noutatea a fost adăugată cu succes.');
    }
}
