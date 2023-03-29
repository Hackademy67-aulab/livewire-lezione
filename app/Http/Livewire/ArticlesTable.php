<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{

    public function destroy($id){
        // $article=Article::find($id);
        // $article->delete();

        Article::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.articles-table',
            [
                'articles'=>Article::all()
            ]
        );
    }
}
