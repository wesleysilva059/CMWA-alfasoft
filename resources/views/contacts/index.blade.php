<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div class="inset-y-0 right-0">
                    <a href="{{ route('contact.create') }}" class="px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200">New Contact</a>
                  </div>
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                          <thead class="bg-gray-50">
                            <tr>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Contact</th>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900">E-mail</th>
                              <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                            </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            @foreach ($contacts as $contact)
                            <tr class="hover:bg-gray-50">
                              <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="text-sm">
                                  <div class="text-gray-400">{{ $contact->id }}</div>
                                </div>
                              </th>
                              <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold text-gray-900">
                                  {{ $contact->name }}
                                </span>
                              </td>
                              <td class="px-6 py-4">{{ $contact->contact }}</td>
                              <td class="px-6 py-4">{{ $contact->email }}</td>
                              <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                  <a x-data="{ tooltip: 'Show' }" href="{{ route('contact.show', $contact->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                  <a x-data="{ tooltip: 'Edite' }" href="{{ route('contact.edit', $contact->id) }}">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="none"
                                      viewBox="0 0 24 24"
                                      stroke-width="1.5"
                                      stroke="currentColor"
                                      class="h-6 w-6"
                                      x-tooltip="tooltip"
                                    >
                                      <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                      />
                                    </svg>
                                  </a>
                                  <form action="{{ route('contact.delete', $contact->id ) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          fill="none"
                                          viewBox="0 0 24 24"
                                          stroke-width="1.5"
                                          stroke="currentColor"
                                          class="h-6 w-6"
                                          x-tooltip="tooltip"
                                        >
                                          <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                          />
                                        </svg>
                                    </button>
                                </form>
                                  
                                  </a>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
