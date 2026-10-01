
@props(['active' => false, 'href' => '/'])

@php
    $current = "dark:text-white bg-blue-500  py-3 px-4 inline-flex items-center gap-2 bg-layer text-sm text-layer-foreground font-medium rounded-lg shadow-2xs focus:outline-hidden";
    $default = "dark:text-dark py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm text-muted-foreground-1 hover:text-foreground font-medium rounded-lg hover:text-primary-hover focus:outline-hidden focus:text-primary-focus";
@endphp

 <nav class="flex gap-x-2">
    <a class="{{ $active ? $current : $default }} " href = '{{ $href }}' aria-current="page">{{ $slot }}</a>
  </nav>
