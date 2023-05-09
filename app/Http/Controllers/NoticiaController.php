<?php
//php artisan make:controller NoticiaController --resource
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factories\NoticiaFactory;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index(){
        // $noticias = NoticiaFactory::generarNoticias(30);
        $noticias = Noticia::all();
        return view('backend.noticias.index', compact('noticias'));
    }

    public function show($id){
        $noticia = (object) array(
            "titulo" => "What is lorem Ipsum?",
            "cuerpo" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla velit metus, luctus non nunc in, euismod imperdiet est. Proin vel molestie eros. Mauris finibus, mauris quis volutpat rhoncus, risus purus varius risus, a ultricies enim ligula ut eros. Curabitur blandit porttitor varius. Duis nec aliquet lacus. Donec placerat vel magna vel imperdiet. Cras id porttitor turpis. Aenean commodo lorem sit amet mi lacinia, non pharetra velit congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean pharetra, nulla et tristique interdum, ante velit consequat justo, sit amet pharetra velit dui sit amet nibh.",
            "imagen" => "https://i.imgur.com/6S1nxee.gif",
            "id" => $id
        );
        return view('backend.noticias.show', compact('noticia'));
    }
}
