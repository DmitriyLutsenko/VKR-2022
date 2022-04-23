<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Menu;

class MainMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menu;
    public function __construct()
    {
        $this->menu = Menu::where('active', 'Y')->orderby('priority', 'asc')->get(); 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('front.menu.main-menu');
    }
}
