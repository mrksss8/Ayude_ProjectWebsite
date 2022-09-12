<?php

namespace App\View\Components;

use App\Models\MainNav;
use Illuminate\View\Component;

class FooterLinks extends Component
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
      $navs = MainNav::where('language_id','=',$this->language)->get();
      return view('components.footer-links', compact('navs'));
    }
}
