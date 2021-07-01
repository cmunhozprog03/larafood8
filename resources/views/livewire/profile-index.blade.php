<div>
    <div class="row justify-content-between">
        <div class="col-md-3">
            <h2>Perfis</h2>
        </div>
        <div class="col-md-2">
            <a href="{{ route('profiles.create') }}" class="btn btn-dark mt-3">Novo Perfil</a>
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
                @foreach ($profiles as $profile)
                    <tr>
                        <td>{{ $profile->name }}</td>
                        <td>{{ $profile->description }}</td>

                        <td class="text-center">

                          <a href="{{ route('profiles.edit', $profile->id) }}" class="w3-button w3-small w3-round-large w3-indigo">EDITAR</a>
                          <a href="{{ route('profiles.show', $profile->id) }}" class="w3-button w3-small w3-border-indigo w3-round-large w3-deep-purple">VER</a>
                          <a href="{{ route('profiles.permissions', $profile->id) }}" class="w3-button w3-small w3-border-indigo w3-round-large w3-deep-purple">VER</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
          {{ $profiles->links() }}
        </div>
      </div>
</div>

