@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])
  
  @if ($pushRef)
    @if ($showIcon)
      <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}><use href="#heroicon-ms-battery-50" /></svg>
    @endif
  @once('heroicon-ms-battery-50')
    @push('simple-blade-icons')
      <g id="heroicon-ms-battery-50"><path d="M4.75 8a.75.75 0 00-.75.75v2.5c0 .414.336.75.75.75H9.5a.75.75 0 00.75-.75v-2.5A.75.75 0 009.5 8H4.75z"></path>
  <path fill-rule="evenodd" d="M3.25 5A2.25 2.25 0 001 7.25v5.5A2.25 2.25 0 003.25 15h12.5A2.25 2.25 0 0018 12.75v-1.085a1.5 1.5 0 001-1.415v-.5a1.5 1.5 0 00-1-1.415V7.25A2.25 2.25 0 0015.75 5H3.25zM2.5 7.25a.75.75 0 01.75-.75h12.5a.75.75 0 01.75.75v5.5a.75.75 0 01-.75.75H3.25a.75.75 0 01-.75-.75v-5.5z" clip-rule="evenodd"></path></g>
    @endpush
  @endonce
  @else
    <svg {{ $attributes->merge(['xmlns' => 'http://www.w3.org/2000/svg', 'viewBox' => '0 0 20 20', 'fill' => 'currentColor', 'aria-hidden' => 'true']) }}>
  <path d="M4.75 8a.75.75 0 00-.75.75v2.5c0 .414.336.75.75.75H9.5a.75.75 0 00.75-.75v-2.5A.75.75 0 009.5 8H4.75z"></path>
  <path fill-rule="evenodd" d="M3.25 5A2.25 2.25 0 001 7.25v5.5A2.25 2.25 0 003.25 15h12.5A2.25 2.25 0 0018 12.75v-1.085a1.5 1.5 0 001-1.415v-.5a1.5 1.5 0 00-1-1.415V7.25A2.25 2.25 0 0015.75 5H3.25zM2.5 7.25a.75.75 0 01.75-.75h12.5a.75.75 0 01.75.75v5.5a.75.75 0 01-.75.75H3.25a.75.75 0 01-.75-.75v-5.5z" clip-rule="evenodd"></path>
</svg>
  @endif
  