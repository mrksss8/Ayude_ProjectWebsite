<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class RecentNews extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $language;
    public $id;
    public function __construct($language, $id)
    {
      $this->language = $language;
      $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      $news = Post::where([['id','!=',$this->id], ['language_id','=',$this->language]])->orderBy('updated_at', 'desc')->limit(7)->get();
      return view('components.recent-news', compact('news'));
    }
}
