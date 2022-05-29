@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Editando informações
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('alunos.update', $aluno->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Nome:</label>
                    <input type="text" class="form-control" name="name" value="{{ $aluno->name }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Português: </label>
                    <input type="number" class="form-control" max="10" name="portugues" value="{{ $aluno->portugues }}"/>

                    <label for="cases">Matemática: </label>
                    <input type="number" class="form-control" max="10" name="matematica" value="{{ $aluno->matematica }}"/>

                    <label for="cases">Biologia: </label>
                    <input type="number" class="form-control" max="10" name="biologia" value="{{ $aluno->biologia }}"/>

                    <label for="cases">Física: </label>
                    <input type="number" class="form-control" max="10" name="fisica" value="{{ $aluno->fisica }}"/>

                    <label for="cases">Química: </label>
                    <input type="number" class="form-control" max="10" name="quimica" value="{{ $aluno->quimica }}"/>

                    <label for="cases">Artes: </label>
                    <input type="number" class="form-control" max="10" name="artes" value="{{ $aluno->artes }}"/>

                    <label for="cases">Educação física: </label>
                    <input type="number" class="form-control" max="10" name="educacaofisica" value="{{ $aluno->educacaofisica }}"/>

                    <label for="cases">Inglês: </label>
                    <input type="number" class="form-control" max="10" name="ingles" value="{{ $aluno->ingles }}"/>

                    <label for="cases">Filosofia</label>
                    <input type="number" class="form-control" max="10" name="filosofia" value="{{ $aluno->filosofia }}"/>

                    <label for="cases">Geografia: </label>
                    <input type="number" class="form-control" max="10" name="geografia" value="{{ $aluno->geografia }}"/>

                    <label for="cases">História: </label>
                    <input type="number" class="form-control" max="10" name="historia" value="{{ $aluno->historia }}"/>

                    <label for="cases">Sociologia: </label>
                    <input type="number" class="form-control" max="10" name="sociologia" value="{{ $aluno->sociologia }}"/>

                </div>
                <button type="submit" class="btn btn-primary">Atualizar dados</button>
            </form>
        </div>
    </div>
@endsection
