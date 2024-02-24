<?php

namespace App\View\Components;

use Illuminate\View\Component;

class staticSection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $userStatistics;
    public $totalUsers;

    public function __construct()
    {
        $this->userStatistics;
        $this->totalUsers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.static-section');
    }
}
