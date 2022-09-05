@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])
  
  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}><use href="#heroicon-ms-view-columns" /></svg>
    @endif
  @once('heroicon-ms-view-columns')
    @push('simple-blade-icons')
      <g id="heroicon-ms-view-columns"><path fill-rule="evenodd" d="M14 18h2.75A2.25 2.25 0 0019 15.75V4.25A2.25 2.25 0 0016.75 2H14v16zM12.5 2h-5v16h5V2zM3.25 2H6v16H3.25A2.25 2.25 0 011 15.75V4.25A2.25 2.25 0 013.25 2z" clip-rule="evenodd"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}>
  <path fill-rule="evenodd" d="M14 18h2.75A2.25 2.25 0 0019 15.75V4.25A2.25 2.25 0 0016.75 2H14v16zM12.5 2h-5v16h5V2zM3.25 2H6v16H3.25A2.25 2.25 0 011 15.75V4.25A2.25 2.25 0 013.25 2z" clip-rule="evenodd"></path>
</svg>
  @endif
  