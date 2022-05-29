<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alunos;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Alunos::all();

        return view('index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'portugues' => 'required|integer',
            'matematica' => 'required|integer',
            'biologia' => 'required|integer',
            'fisica' => 'required|integer',
            'quimica' => 'required|integer',
            'artes' => 'required|integer',
            'educacaofisica' => 'required|integer',
            'ingles' => 'required|integer',
            'filosofia' => 'required|integer',
            'geografia' => 'required|integer',
            'historia' => 'required|integer',
            'sociologia' => 'required|integer',
        ]);
        $show = Alunos::create($validatedData);

        return redirect('/alunos')->with('success', 'Aluno cadastrado com successo.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Alunos::findOrFail($id);

        return view('edit', compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'portugues' => 'required|integer',
            'matematica' => 'required|integer',
            'biologia' => 'required|integer',
            'fisica' => 'required|integer',
            'quimica' => 'required|integer',
            'artes' => 'required|integer',
            'educacaofisica' => 'required|integer',
            'ingles' => 'required|integer',
            'filosofia' => 'required|integer',
            'geografia' => 'required|integer',
            'historia' => 'required|integer',
            'sociologia' => 'required|integer',
        ]);
        Alunos::whereId($id)->update($validatedData);

        return redirect('/alunos')->with('success', 'Dados do aluno alterados com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Alunos::findOrFail($id);
        $aluno->delete();

        return redirect('/alunos')->with('success', 'Aluno deletado com sucesso.');
    }
}
