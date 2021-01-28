<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Appliance
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('appliances.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="manufacturer" class="block font-medium text-sm text-gray-700">Manufacturer</label>
                                <input type="text" name="manufacturer" id="manufacturer" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ old('manufacturer', '') }}" />
                                @error('manufacturer')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="purchase_date" class="block font-medium text-sm text-gray-700">Purchase date</label>
                                    <input type="date" name="purchase_date" id="purchase_date" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('purchase_date', '') }}" />
                                    @error('purchase_date')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        
                                        <label for="serial_num" class="block font-medium text-sm text-gray-700">Serial Number</label>
                                        <input type="text" name="serial_num" id="serial_num" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('serial_num', '') }}" />
                                        @error('serial_num')
                                            <p class="text-sm text-red-600">{{ "The serial number entered was not found on our database" }}</p>
                                        @enderror
                                    </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>