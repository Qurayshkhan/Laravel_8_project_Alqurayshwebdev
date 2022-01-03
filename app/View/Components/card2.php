<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card2 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $title;
     public $subtitle;
     public $description;
     public $attributes;
    public function __construct($title,$subtitle,$description)
    {
        $this->title=$title;
        $this->subtitle=$subtitle;
        $this->description=$description;
       // $this->attributes=$attributes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card2');
    }
    public function addNumber($a){
        return $a+20;
    }
}
