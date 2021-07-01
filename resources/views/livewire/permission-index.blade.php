<div>
    <div class="row justify-content-between">
        <div class="col-md-3">
            <h2>Permissões</h2>
        </div>
        <div class="col-md-2">
            <a href="{{ route('permissions.create') }}" class="btn btn-dark mt-3">Nova Permissão</a>
        </div>
        <div class="offset-2 col-md-5">
            <input type="text" wire:model="search" class="w3-input w3-border-dark-gray mt-2" placeholder="Buscar">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="table-responsive">
          <table class="table table-striped table-hover table-dark">
              <thead>
                <tr class="text-center">
                  <th width="20%">Nome</th>
                  <th width="50%">Descrição</th>
                  <th colspan="2">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->description }}</td>

                        <td class="text-center">

                          <a href="{{ route('permissions.edit', $permission->id) }}" class="w3-button w3-small w3-round-large w3-indigo">EDITAR</a>
                          <a href="{{ route('permissions.show', $permission->id) }}" class="w3-button w3-small w3-border-indigo w3-round-large w3-deep-purple">VER</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
          {{ $permissions->links() }}
        </div>
      </div>
</div>


