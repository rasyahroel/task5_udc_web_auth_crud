@section('title', 'Add New Stock')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Stock') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                    <div class="justify-center">

                        @if ($errors->any())
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="stock" method="POST" class="w-full max-w-md mx-auto">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="block text-white text-sm font-bold mb-2">Name</label>
                                <input type="text"
                                    class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300"
                                    name="name" id="name">
                            </div>

                            <div class="mb-4">
                                <label for="quantity"
                                    class="block text-white text-sm font-bold mb-2">Quantity</label>
                                <input type="number"
                                    class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300"
                                    name="quantity" id="quantity">
                            </div>

                            <div class="mb-4">
                                <label for="price" class="block text-white text-sm font-bold mb-2">Price</label>
                                <input type="number"
                                    class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300"
                                    name="price" id="price">
                            </div>

                            <div class="mb-6">
                                <button
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border rounded-lg focus:outline-none focus:shadow-outline-green active:bg-green-800"
                                    type="submit">SAVE</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
