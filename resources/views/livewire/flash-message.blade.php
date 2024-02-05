<div class="fixed bottom-0 right-0 p-4 w-full lg:w-1/4">
    @if(session('message'))
    <div class="bg-sky-200 rounded-lg p-4"
        x-data="{ shown: false, timeout: null }"
         x-init="() => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 5000); }"
         x-show.transition.out.opacity.duration.1500ms="shown"
         x-transition:leave.opacity.duration.1500ms
         style="display: none;" >
        <p>
            {{ session()->pull('message') }}
        </p>
    </div>
    @endif
</div>
