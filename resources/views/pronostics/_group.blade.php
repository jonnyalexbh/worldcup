@forelse ($groups as $group)

  <div class="card col-md-4">
    <div class="card-body">
      <h4 class="card-title">Grupo {{ $group->name }}</h4>
      <table class="table-groups" width="100%">
        <tbody>
          @forelse($group->matches as $match)
            @include('pronostics._match')
          @empty
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

@empty
  <p>No groups</p>
@endforelse
