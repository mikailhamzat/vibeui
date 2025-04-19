<?php

namespace VibeUI\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $variant;
    public $size;
    public $disabled;
    public $icon;

    public function __construct($variant = 'primary', $size = 'md', $disabled = false, $icon = null)
    {
        $this->variant = $variant;
        $this->size = $size;
        $this->disabled = $disabled;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('vibeui::components.vibe-button');
    }
}

