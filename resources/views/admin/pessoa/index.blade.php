<x-layout>
  <div class="container col-md-6 offset-md-3 bg-light border">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Matricula</th>
          <th>Data de Nascimento</th>
          <th>E-mail</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pessoa as $item)
          <tr>
              <td>{{ $item->Nome }}</td>
              <td>{{ $item->Matricula }}</td>
              <td>{{ date("d/m/Y", strtotime($item->Nascimento)) }}</td>
              <td>{{ $item->Email }}</td>
              <td>
                <div class="row">
                  <div class="col-4">
                    <a class="btn btn-primary" href="{{ Route('pessoa.edit', $item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                  </div>
                  <div class="col-4">
                    <form action="{{ Route('pessoa.destroy', $item->id) }}" method="post">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                  </div>
                </div>
              </td>
          </tr>   
        @endforeach
      </tbody>
    </table>
  </div>
</x-layout>