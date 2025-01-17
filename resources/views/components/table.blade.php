@props([
    'footer' => null,
    'header' => null,
])

<table {{ $attributes->class(['w-full text-left divide-y table-auto']) }}>
    @if ($header)
        <thead>
            <tr class="bg-gray-50">
                {{ $header }}
            </tr>
        </thead>
    @endif

    <tbody class="divide-y whitespace-nowrap">
        {{ $slot }}
    </tbody>

    @if ($footer)
        <tfoot>
            <tr class="bg-gray-50">
                {{ $footer }}
            </tr>
        </tfoot>
    @endif
</table>
