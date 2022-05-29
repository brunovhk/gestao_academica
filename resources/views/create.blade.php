<!-- create.blade.php -->

@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Cadastro de notas
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
            <form method="post" action="{{ route('alunos.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="country_name">Nome completo: </label>
                    <input input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="cases">Português: </label>
                    <input input type="number" max="10" class="form-control" name="portugues"/>
                </div>
                <div class="form-group">
                    <label for="cases">Matemática: </label>
                    <input input type="number" max="10" class="form-control" name="matematica"/>
                </div>
                <div class="form-group">
                    <label for="cases">Biologia: </label>
                    <input input type="number" max="10" class="form-control" name="biologia"/>
                </div>
                <div class="form-group">
                    <label for="cases">Física: </label>
                    <input input type="number" max="10" class="form-control" name="fisica"/>
                </div>
                <div class="form-group">
                    <label for="cases">Química: </label>
                    <input input type="number" max="10" class="form-control" name="quimica"/>
                </div>
                <div class="form-group">
                    <label for="cases">Artes: </label>
                    <input input type="number" max="10" class="form-control" name="artes"/>
                </div>
                <div class="form-group">
                    <label for="cases">Educação Física: </label>
                    <input input type="number" max="10" class="form-control" name="educacaofisica"/>
                </div>
                <div class="form-group">
                    <label for="cases">Ingles: </label>
                    <input input type="number" max="10" class="form-control" name="ingles"/>
                </div>
                <div class="form-group">
                    <label for="cases">Filosofia: </label>
                    <input input type="number" max="10" class="form-control" name="filosofia"/>
                </div>
                <div class="form-group">
                    <label for="cases">Geografia: </label>
                    <input input type="number" max="10" class="form-control" name="geografia"/>
                </div>
                <div class="form-group">
                    <label for="cases">História: </label>
                    <input input type="number" max="10" class="form-control" name="historia"/>
                </div>
                <div class="form-group">
                    <label for="cases">Sociologia: </label>
                    <input input type="number" max="10" class="form-control" name="sociologia"/>
                </div>
                <button type="submit" class="btn btn-success">Cadastrar aluno</button>
            </form>
        </div>
    </div>
@endsection
