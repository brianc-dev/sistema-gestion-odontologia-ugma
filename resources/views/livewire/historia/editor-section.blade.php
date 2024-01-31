<div class="container flex h-fit">
    <livewire:historia.menus />
    @switch($section)
        @case(0)
            <livewire:historia.create-historia />
        @break
        @default
    @endswitch
</div>
