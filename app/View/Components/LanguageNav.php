<?php

namespace App\View\Components;

use App\Models\Language;
use Illuminate\View\Component;

class LanguageNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $languages = Language::all();
        return view('components.language-nav', compact('languages'));
    }
}
