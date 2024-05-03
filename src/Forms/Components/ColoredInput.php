<?php

namespace DevIDKWHOAMI\ColoredInputs\Forms\Components;

use Filament\Forms\Components\Field;
use Filament\Support\RawJs;

class ColoredInput extends Field
{
    protected string $view = 'colored-inputs::forms.components.colored-input';

    protected RawJs $options;

    protected string $themeMode;

    protected string $theme;

    protected string $style;

    public function configure(): static
    {
        $this->theme = 'default';
        $this->themeMode = 'auto';
        $this->style = 'default';

        return $this;
    }

    public function defaultStyle(): static
    {
        $this->style = 'default';

        return $this;
    }

    public function squareStyle(): static
    {
        $this->style = 'square';

        return $this;
    }

    public function circleStyle(): static
    {
        $this->style = 'circle';

        return $this;
    }

    public function fullStyle(): static
    {
        $this->style = 'full';

        return $this;
    }

    public function getStyle(): string
    {
        return $this->style;
    }

    public function options(RawJs | \Closure $options): static
    {
        $this->options = $this->evaluate($options);

        return $this;
    }

    public function getOptions(): RawJs
    {
        return $this->options;
    }

    public function themeMode(string | \Closure $themeMode): static
    {
        $this->themeMode = $this->evaluate($themeMode);

        return $this;
    }

    public function getThemeMode(): string
    {
        return $this->themeMode;
    }

    public function theme(string | \Closure $theme): static
    {
        $this->theme = $this->evaluate($theme);

        return $this;
    }

    public function getTheme(): string
    {
        return $this->theme;
    }
}
