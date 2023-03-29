<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Tutti gli articoli</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- @if(count($articles) > 0)
                            @foreach ($articles as $article)
                                //ecc ecc
                            @endforeach 
                        @else
                            <h1>Non ci sobno elementi da visualizzare</h1>
                        @endif --}}

                        @forelse ($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->body}}</td>
                                <td>
                                    <button wire:click="destroy({{$article->id}})" class="btn btn-danger">Elimina</button>
                                </td>
                                <td>
                                    <a href="{{route('updateArticle', compact('article'))}}" class="btn btn-warning">Modifica</a>
                                </td>

                            </tr>
                        @empty
                            <h1>Non ci sono articoli da visualizzare</h1>
                        @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
