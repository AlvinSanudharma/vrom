<x-app-layout>
    <x-slot name="title">Admin</x-slot>
    <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Brand') }}
      </h2>
    </x-slot>
  
    <x-slot name="script">
      <script>
        // NOTE: AJAX DataTable
        var datatable = $('#dataTable').DataTable({
          processing: true,
          serverSide: true,
          stateSave: true,
          ajax: {
            url: '{!! url()->current() !!}',
          },
          language: {
            url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
          },
          columns: [{
              data: 'id',
              name: 'id',
            },
            {
              data: 'name',
              name: 'name'
            },
            {
              data: 'slug',
              name: 'slug'
            },
            {
              data: 'action',
              name: 'action',
              orderable: false,
              searchable: false,
              width: '15%'
            },
          ],
        });
      </script>
    </x-slot>
  
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mb-10">
          <a href="{{ route('admin.brands.create') }}"
             class="px-4 py-2 font-bold text-white bg-green-500 rounded shadow-lg hover:bg-green-700">
            + Buat Brand
          </a>
        </div>
        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" class="mb-5" role="alert">
                <div class="flex justify-between items-center px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded">
                    <p>{{ session('success') }}</p>
                    <!-- Close Button -->
                    <button @click="show = false" class="text-green-700 hover:text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <table id="dataTable">
              <thead>
                <tr>
                  <th style="max-width: 1%">ID</th>
                  <th>Nama</th>
                  <th>Slug</th>
                  <th style="max-width: 1%">Aksi</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout>