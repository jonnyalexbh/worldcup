@forelse ($groups as $group)
  <div class="col-md-4">
    <div class="card-header">Grupo {{ $group->name }}</div>

    <table class="table-groups" width="100%">
      <tbody>

        @forelse($group->matches as $match)
          @include('pronostics._match')
        @empty
        @endforelse

      </tbody>
    </table>

  </div>
@empty
  <p>No groups</p>
@endforelse
