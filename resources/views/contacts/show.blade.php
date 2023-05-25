<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between ...">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Show Contact') }}
            </h2>
            <div class="inset-y-0 right-0">
                <a href="{{ route('contact.index') }}" class="px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200">Go back</a>
            </div>
          </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Name
                        </label>
                        <div>
                            {{ $contact->name }}
                        </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Contact
                        </label>
                        <div>
                            {{ $contact->contact }}
                        </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            E-mail
                        </label>
                        <div>
                            {{ $contact->email }}
                        </div>
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="flex justify-between ...">
                            <a href="{{ route('contact.edit', $contact->id ) }}" class="font-bold py-2 px-4 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200">Edit Contact</a>
                            <form action="{{ route('contact.delete', $contact->id ) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="shadow bg-red-500 rounded hover:bg-red-600 focus:shadow-outline focus:outline-none text-red-100 hover:text-red-200 font-bold py-2 px-4" type="submit">
                                    Delete Contact
                                </button>
                            </form>
                        </div>
                        <div class="md:w-2/3"></div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
