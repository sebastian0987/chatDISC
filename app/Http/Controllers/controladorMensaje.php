<?php
/**
 * Created by PhpStorm.
 * User: tatan
 * Date: 13-05-2017
 * Time: 18:01
 */

namespace App\Http\Controllers;
use App\Note;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes/list', compact('notes'));
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store()
    {
        return 'hola';
    }
    public function show($note)
    {
        dd($note);
    }
}