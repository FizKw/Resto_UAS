<div
    x-data = "{show : false}"
    x-show = "show"
    x-on:open-detail.window = "show = true"
    x-on:close-detail.window = "show = false"

    x-transition.duration.100ms
    {{-- Edit transition animation https://alpinejs.dev/directives/transition --}}

    style="display:none"
    class="fixed z-50 inset-0">
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
    <div>
    {{ $body }}
    </div>

</div>
