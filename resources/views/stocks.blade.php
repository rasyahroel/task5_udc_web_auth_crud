@section('title', 'Stocks')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stock List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                {{--  Content Stock  --}}

                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                    <div class="justify-center">
                        <div class="my-5 flex">
                            <a href="stock-add"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg border">
                                Add Data
                            </a>
                        </div>

                        @if (Session::has('status'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-5 rounded relative"
                                role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif


                        <table class="table-auto border-collapse border w-full text-white py-5 mt-8">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">#</th>
                                    <th class="px-4 py-2">Nama</th>
                                    <th class="px-4 py-2">Quantity</th>
                                    <th class="px-4 py-2">Price</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($stockList as $data)
                                    <tr>
                                        <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                        <td class="border px-4 py-2">{{ $data->name }}</td>
                                        <td class="border px-4 py-2">{{ $data->quantity }}</td>
                                        <td class="border px-4 py-2">{{ $data->price }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div class="my-5 py-5">
                            {{ $stockList->withQueryString()->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
