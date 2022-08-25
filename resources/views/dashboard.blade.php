<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-bold">Import Shipment Details Spreadsheet </h2>
                    <form action="/import"  method="POST" enctype="multipart/form-data" >
                        @csrf
                        Management email <br>
                        <input type="email" name="management_email" required><br>
                        Email receipt to:  <br>
                        <input type="email" name="send_email" required> <br>

                        <input class="my-4" type="file" name="driver_sheet_file" accept=".xlsx,.xls,.csv" required>
                        <br>
                        <button class="shadow bg-lime-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded my-4" type="submit">
                            Upload
                          </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
