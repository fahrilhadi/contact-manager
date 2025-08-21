@extends('master')

@section('title')
    Contact Manager App
@endsection

@section('main-content')
    <div class="max-w-2xl px-4 py-6 bg-white border border-gray-200 rounded-xl shadow-lg">
      <div class="overflow-x-auto">
        <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
          <thead>
            <tr class="bg-gray-100 text-left">
              <th class="px-4 py-3 border-b border-gray-200 text-sm font-bold">Name</th>
              <th class="px-4 py-3 border-b border-gray-200 text-sm font-bold">Email</th>
              <th class="px-4 py-3 border-b border-gray-200 text-sm font-bold">Phone</th>
              <th class="px-4 py-3 border-b border-gray-200 text-sm font-bold text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($contacts as $contact)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-4 py-3 border-b border-gray-200">{{ $contact->name }}</td>
                    <td class="px-4 py-3 border-b border-gray-200">{{ $contact->email }}</td>
                    <td class="px-4 py-3 border-b border-gray-200">{{ $contact->phone }}</td>
                    <td class="px-4 py-3 border-b border-gray-200 text-center">
                        <a href="{{ route('contacts.edit', $contact->id) }}" 
                          class="px-3 py-1 rounded-lg border border-gray-300 hover:border-black text-sm transition shadow mr-2">
                            Edit
                        </a>
                        <a href="" 
                          class="px-3 py-1 rounded-lg border border-gray-300 hover:border-red-500 hover:text-red-500 text-sm transition shadow">
                            Delete
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                        <p>No contacts available.</p>
                    </td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
@endsection