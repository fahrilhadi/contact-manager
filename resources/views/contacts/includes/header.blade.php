<header class="w-full">
    <div class="max-w-2xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-xl font-semibold">Contact</h1>
      @if (request()->routeIs('contacts.create','contacts.edit'))
          <a href="{{ route('contacts.index') }}" 
            class="px-4 py-2 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition shadow">
            Back
          </a>
      @else
          <a href="{{ route('contacts.create') }}" 
            class="px-4 py-2 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition shadow">
            + Add Contact
          </a>
      @endif
    </div>
</header>