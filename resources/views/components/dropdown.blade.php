
<div class="position-relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            class="position-absolute z-50 rounded-md shadow-lg "
            style="display: none;"
            @click="open = false">
        <div class="rounded-md">
            {{ $content }}
        </div>
    </div>
</div>
