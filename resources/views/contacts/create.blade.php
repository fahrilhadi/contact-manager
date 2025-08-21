@extends('master')

@section('title')
    Create Contact | Contact Manager App
@endsection

@section('main-content')
    <div class="w-full max-w-md px-4 py-6 bg-white border border-gray-200 rounded-xl shadow-lg">
      <form action="{{ route('contacts.store') }}" method="POST" class="space-y-4">
        @csrf
        <div class="flex flex-col">
          <label for="name" class="text-sm font-medium mb-1">Name</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" autocomplete="off"
                 class="@error('name') is-invalid @enderror border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition" >
        </div>

        <div class="flex flex-col">
          <label for="email" class="text-sm font-medium mb-1">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="off"
                 class="@error('email') is-invalid @enderror border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition" >
        </div>

        <div class="flex flex-col">
          <label for="phone" class="text-sm font-medium mb-1">Phone</label>
          <input type="text" id="phone" name="phone" value="{{ old('phone') }}" autocomplete="off"
                 class="@error('phone') is-invalid @enderror border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition" >
        </div>

        <div class="flex gap-2">
          <button type="submit" 
                  class="flex-1 px-4 py-2 bg-black text-white rounded-lg text-sm font-medium hover:bg-gray-800 transition shadow">
            Save Contact
          </button>
          <a href="{{ route('contacts.index') }}" 
             class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-center text-sm font-medium hover:border-black transition shadow">
            Cancel
          </a>
        </div>
      </form>
    </div>
@endsection