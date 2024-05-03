@php
    use \Filament\Support\Facades\FilamentAsset;
    $options = $getOptions();
    $theme = $getTheme();
    $themeMode = $getThemeMode();
    $style = $getStyle() ?? '';

@endphp
<x-dynamic-component
        :component="$getFieldWrapperView()"
        :field="$field"
>
    <div
            ax-load
            ax-load-src="{{ FilamentAsset::getAlpineComponentSrc('colored-input', 'dev-idkwhoami/colored-inputs') }}"
            x-ignore
            x-data="coloredInput({ state: $wire.$entangle('{{ $getStatePath() }}'), style: '{{ $style }}', theme: '{{ $theme }}', themeMode: '{{ $themeMode }}', options: {{ $options }} })"
    >
        <x-filament::input.wrapper>
            <x-filament::input x-bind:value="state" type="text" x-ref="coloredInput"/>
        </x-filament::input.wrapper>
    </div>
</x-dynamic-component>
