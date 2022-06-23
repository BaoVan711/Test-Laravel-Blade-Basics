<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * @var string
     */
    public string $metaTitle;

    /**
     * AppLayout constructor
     */
    public function __construct(string $metaTitle = null)
    {
        $this->metaTitle = $metaTitle;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
