<x-layout title="Nova Série">
  <form action="{{ route('series.store') }}" method="post">
    @csrf

    <diw class="row mb-3">
      <div class="col-8">
        <label for="nome" class="form-label">Nome:</label>
        <input 
          type="text" 
          autofocus
          id="nome" 
          name="nome" 
          class="form-control" 
          value="{{ old('nome') }}">      
      </div>

      <div class="col-2">
        <label for="seasonsQuantity" class="form-label">Temporadas:</label>
        <input 
          type="text" 
          id="seasonsQuantity" 
          name="seasonsQuantity" 
          class="form-control" 
          value="{{ old('seasonsQuantity') }}">      
      </div>

      <div class="col-2">
        <label for="episodesPerSeason" class="form-label">Episódios / Temporada:</label>
        <input 
          type="text" 
          id="episodesPerSeason" 
          name="episodesPerSeason" 
          class="form-control" 
          value="{{ old('episodesPerSeason') }}">      
      </div>
    </diw>
      
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>
</x-layout>