<div class="flex items-center space-x-2 text-gray-500">
    @foreach ($links as $label => $url)
        @if ($url)
            <a href="{{ $url }}" class="hover:text-gray-700">{{ $label }}</a>
            <span class="text-gray-400">›</span>
        @else
            <span class="font-medium text-black">{{ $label }}</span>
        @endif
    @endforeach
</div>