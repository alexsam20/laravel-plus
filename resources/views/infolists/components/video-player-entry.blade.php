<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    {{-- <div>
        <iframe src="https://player.vimeo.com/video/{{ $getState() }}"></iframe>        
    </div> --}}
    <div class="relative pt-[56.25%]">
        <iframe
            src="https://player.vimeo.com/video/{{ $getState() }}"
            frameborder="0" 
            allow="autoplay; fullscreen; picture-in-picture"
            class="absolute left-0 top-0 w-full h-full">
        </iframe>
        @script
            <script src="https://player.vimeo.com/api/player.js"></script>
        @endscript
    </div>
</x-dynamic-component>
