@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])
  
  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}><use href="#heroicon-ms-square-2-stack" /></svg>
    @endif
  @once('heroicon-ms-square-2-stack')
    @push('simple-blade-icons')
      <g id="heroicon-ms-square-2-stack"><path d="M2 4.25A2.25 2.25 0 014.25 2h6.5A2.25 2.25 0 0113 4.25V5.5H9.25A3.75 3.75 0 005.5 9.25V13H4.25A2.25 2.25 0 012 10.75v-6.5z"></path>
  <path d="M9.25 7A2.25 2.25 0 007 9.25v6.5A2.25 2.25 0 009.25 18h6.5A2.25 2.25 0 0018 15.75v-6.5A2.25 2.25 0 0015.75 7h-6.5z"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}>
  <path d="M2 4.25A2.25 2.25 0 014.25 2h6.5A2.25 2.25 0 0113 4.25V5.5H9.25A3.75 3.75 0 005.5 9.25V13H4.25A2.25 2.25 0 012 10.75v-6.5z"></path>
  <path d="M9.25 7A2.25 2.25 0 007 9.25v6.5A2.25 2.25 0 009.25 18h6.5A2.25 2.25 0 0018 15.75v-6.5A2.25 2.25 0 0015.75 7h-6.5z"></path>
</svg>
  @endif
  