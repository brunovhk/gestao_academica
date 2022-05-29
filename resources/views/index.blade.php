@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Português</td>
                <td>Matemática</td>
                <td>Biologia</td>
                <td>Fisica</td>
                <td>Química</td>
                <td>Artes</td>
                <td>Ed. Física</td>
                <td>Inglês</td>
                <td>Filosofia</td>
                <td>Geografia</td>
                <td>História</td>
                <td>Sociologia</td>
                <td colspan="2" class="text-center">Ações</td>
            </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{$aluno->id}}</td>
                    <td>{{$aluno->name}}</td>
                    <td>{{$aluno->portugues}}</td>
                    <td>{{$aluno->matematica}}</td>
                    <td>{{$aluno->biologia}}</td>
                    <td>{{$aluno->fisica}}</td>
                    <td>{{$aluno->quimica}}</td>
                    <td>{{$aluno->artes}}</td>
                    <td>{{$aluno->educacaofisica}}</td>
                    <td>{{$aluno->ingles}}</td>
                    <td>{{$aluno->filosofia}}</td>
                    <td>{{$aluno->geografia}}</td>
                    <td>{{$aluno->historia}}</td>
                    <td>{{$aluno->sociologia}}</td>
                    <td><a href="{{ route('alunos.edit', $aluno->id)}}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="{{ route('alunos.destroy', $aluno->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
