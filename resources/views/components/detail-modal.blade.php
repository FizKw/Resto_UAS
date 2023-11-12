<div
    x-data = "{show : false}"
    x-show = "show"
    x-on:open-detail.window = "show = true"
    x-on:close-detail.window = "show = false"
    
    x-transition.duration.500ms
    {{-- Edit transition animation https://alpinejs.dev/directives/transition --}}

    style="display:none"
    class="fixed z-50 inset-0">  
    <div>
    {{ $body }}
    </div>
    
</div>