<div>
    <div class="row justify-content-between">
        <div class="col-md-3">
            <h2>Planos</h2>
        </div>
        <div class="col-md-2">
            <a href="{{ route('plans.create') }}" class="btn btn-dark mt-3">Novo Plano</a>
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
                  <th width="5%">ID</th>
                  <th width="50%">Nome</th>
                  <th width="20%">Valor</th>
                  <th colspan="2">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($plans as $plan)
                    <tr>
                        <td>{{ $plan->id }}</td>
                        <td>{{ $plan->name }}</td>
                        <td class="text-right">R$ {{ number_format($plan->price, 2, ',', '.') }}</td>
                        <td class="text-center">
                          <a href="{{ route('plans.edit', $plan->url) }}" class="w3-button w3-small w3-round-large w3-indigo">Editar</a>
                          <a href="{{ route('plans.show', $plan->url) }}" class="w3-button w3-small w3-border-indigo w3-round-large w3-deep-purple">Ver</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
          {{ $plans->links() }}
        </div>
      </div>
</div>
