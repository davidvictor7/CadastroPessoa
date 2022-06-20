<x-createLayout>
    <form method="post" action="{{ route('pessoa.store') }}">
        @csrf
        <div class="container bg-light border" style="width: 500px;">
            <div class="row">
                <div class="g-col-6">
                    <label class="form-label">Nome</label>
                    <input class="form-control" id="nome" name="nome" value="{{old('nome')}}">
                </div>
                <div class="g-col-6">
                    <label class="form-label">Matricula</label>
                    <input class="form-control" id="matricula" name="matricula" type="number" value="{{old('matricula')}}">
                </div>
                <div class="g-col-6">
                    <label class="form-label">Data de Nascimento</label>
                    <input class="form-control" id="nascimento" name="nascimento" type="date" value="{{old('nascimento')}}">
                </div>
                <div class="g-col-6">
                    <label class="form-label">E-mail</label>
                    <input class="form-control" id="email" name="email" value="{{old('email')}}">
                </div>
                <div class="float-end alinhamentoButton">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{ route('Index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
      </form>
</x-createLayout>