<x-app-layout>
    <x-slot name="header">
      <div class="flex justify-between ...">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Create a new Contact') }}
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
                  @if($errors->all())
                      @foreach($errors->all() as $error)
                          <div class="alert alert-danger">
                              {{ $error }}
                          </div>
                      @endforeach
                  @endif
                  <form class="w-full max-w-lg" method="post" action="{{route('contact.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                          Name
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nick" type="text" name="name" >
                      </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                          Contact
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nick" type="text" name="contact">
                      </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                          E-mail
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" name="email">
                      </div>
                    </div>
                    <div class="md:flex md:items-center">
                      <div class="md:w-1/3">
                        <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-gray-700 font-bold py-2 px-4 rounded submit" type="submit">
                          Save Contact
                        </button>
                      </div>
                      <div class="md:w-2/3"></div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
