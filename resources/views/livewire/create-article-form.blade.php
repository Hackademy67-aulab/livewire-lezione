<div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center">Inserisci l'articolo</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form wire:submit.prevent="store" class="shadow p-5">
                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Titolo</label>{{-- {{$title}} --}}
                  <input wire:model.debounce.3000ms="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Testo:</label> {{-- {{$body}}--}}
                    <textarea wire:model.lazy="body" id="exampleInputEmail1" class="form-control" cols="30" rows="10"></textarea>
                    @error('body') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Inserisci articolo</button>
            </form>
        </div>
    </div>
</div>
</div>
