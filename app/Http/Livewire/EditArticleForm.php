<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditArticleForm extends Component
{
    // public $articleId;
    public $title;
    public $body;

    public $articleObject;

    // public function mount($articleId){
    //     $article=Article::find($articleId);
    //     $this->title=$article->title;
    //     $this->body=$article->body;
    // }

    public function mount($articleObject){
        //$this->articleObject = $articleObject;
        $this->title=$articleObject->title;
        $this->body=$articleObject->body;
    }

    public function update(){

        //$article= Article::find($this->articleId);

        // $article->update([
        //     'title'=>$this->title,
        //     'body'=>$this->body
        // ]);
        
        $this->articleObject->update([
             'title'=>$this->title,
             'body'=>$this->body
         ]);

        return redirect(route('homePage'))->with('message','Hai modificato correttamente l\'articolo');
    }

    public function render()
    {
        return view('livewire.edit-article-form');
    }
}
