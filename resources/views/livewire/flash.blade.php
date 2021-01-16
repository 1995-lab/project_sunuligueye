<div>
  <div class="container" x-data="{ open: false }" x-on:flash.window="open = true; window.scrollTo(0, 0); setTimeout(() => open = false, 8000);" x-cloak>
    <div x-show.transition.opacity="open" class="alert alert-danger" role="alert">
      <div>
        <svg style="width: 20px;height: 20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>
        <span class="{{ $styleByType[$type] }}">{{ $message }}</span>
      </div>
    </div>
  </div>
</div>
