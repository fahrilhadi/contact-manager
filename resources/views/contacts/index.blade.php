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
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                      <td class="px-4 py-3 border-b border-gray-200 text-center">
                          <a href="{{ route('contacts.edit', $contact->id) }}" 
                            class="px-3 py-1 rounded-lg border border-gray-300 hover:border-black text-sm transition shadow mr-2">
                              Edit
                          </a>
                          <button type="button" onclick="openDeleteModal({{ $contact->id }}, '{{ addslashes($contact->name) }}')" class="px-3 py-1 rounded-lg border border-gray-300 hover:border-red-500 hover:text-red-500 text-sm transition shadow">
                            Delete
                          </button>
                      </td>
                    </form>
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
    <div id="deleteModal" class="fixed inset-0 backdrop-blur-sm z-[9999] hidden items-center justify-center">
      <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-sm text-center">
        <h2 class="text-lg font-semibold mb-2">Delete Contact</h2>
        <p class="text-gray-600 text-sm mb-4">Are you sure you want to delete <span id="contactName" class="font-medium"></span>?</p>
        <form id="deleteForm" method="POST" class="flex justify-center gap-3">
          @csrf
          @method('DELETE')
          <button type="button" onclick="closeDeleteModal()" 
                  class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium hover:border-black transition shadow">
            Cancel
          </button>
          <button type="submit" 
                  class="px-4 py-2 rounded-lg border border-gray-300 hover:border-red-500 hover:text-red-500 text-sm transition shadow">
            Delete
          </button>
        </form>
      </div>
    </div>
@endsection

@push('addon-script')
  <script>
    function openDeleteModal(contactId, contactName) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');
        const nameSpan = document.getElementById('contactName');

        form.action = '/contacts/' + contactId;
        nameSpan.textContent = contactName;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
  </script>
@endpush