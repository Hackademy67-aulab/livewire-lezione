<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticleForm extends Component
{
    public $title;
    public $body;

    protected $rules = [
        'title' => 'required|min:6',
        'body' => 'required|min:10',
    ];

    protected $messages = [
        'title.required'=>'Il titolo é richiesto',
        'title.min'=>'Il titolo deve essere minimo di 6 caratteri',
        'body.required'=>'Il body é richiesto',
        'body.min'=>'Il body deve essere minimo di 10 caratteri',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // public function updatedTitle()
    // {
    //     $this->validateOnly('title');
    // }

    // public function updatedBody()
    // {
    //     $this->validateOnly('body');
    // }

    public function store(){

        $this->validate();

        //Mass assignemet
        Article::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);

        // $this->resetData();
        $this->reset();

        return redirect(route('homePage'))->with('message','Hai inserito correttamente l\'articolo');
    }

    // public function resetData(){
    //     $this->title = "";
    //     $this->body = "";
    // }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}
