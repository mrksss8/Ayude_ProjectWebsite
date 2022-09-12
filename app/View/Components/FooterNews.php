<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class FooterNews extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $language;

    public function __construct($language)
    {
      $this->language = $language;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      $news = Post::where('language_id','=',$this->language)->orderBy('updated_at', 'desc')->limit(2)->get();
      return view('components.footer-news', compact('news'));
    }
}
