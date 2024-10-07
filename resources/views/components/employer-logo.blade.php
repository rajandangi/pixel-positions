@props(['employer','width' => 90])

<img src="{{ Storage::url($employer->logo) }}" alt="Image" class="rounded-xl" width="{{ $width }}" />
