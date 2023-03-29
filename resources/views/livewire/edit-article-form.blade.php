<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Modifica l'articolo</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form wire:submit.prevent="update" class="shadow p-5">
                    <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">Titolo</label>
                      <input wire:model.model.lazy="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Testo:</label>
                        <textarea wire:model.lazy="body" id="exampleInputEmail1" class="form-control" cols="30" rows="10"></textarea>
                        @error('body') <span class="error">{{ $message }}</span> @enderror
                    </div>
    
                    <button type="submit" class="btn btn-primary">Modifica articolo</button>
                </form>
            </div>
        </div>
    </div>
</div>
