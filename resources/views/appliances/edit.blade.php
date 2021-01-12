<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Appliance
        </h2>
    </x-slot>

    <div class="wrapper px-2 w-full">
        <form action="{{ route('appliances.update', $appliance->id) }}" method="POST" class="max-w-sm bg-gray-100 px-3 py-5 rounded shadow-lg my-10 m-auto">
            @method('PUT')
            @csrf
           <div class="flex flex-col space-y-3">
              <div class="flex items-center bg-white border border-gray-100 rounded">
                <input id="name" class="w-full py-2 px-1 placeholder-indigo-400 outline-none placeholder-opacity-50 form-control @error('name') is-invalid @enderror" type="text" name="name"" value="{{ $appliance->name }}" required autofocus autocomplete="name" />
              </div>

              <div class="flex items-center bg-white border border-gray-100 rounded">
                <input id="manufacturer" class="w-full py-2 px-1 placeholder-indigo-400 outline-none placeholder-opacity-50 form-control @error('manufacturer') is-invalid @enderror" type="text" name="manufacturer"   value="{{ $appliance->manufacturer }}" required autofocus autocomplete="manufacturer" />
              </div>

              <div class="flex items-center bg-white border border-gray-100 rounded">
                <input id="purchase_date" class="w-full py-2 px-1 placeholder-indigo-400 outline-none placeholder-opacity-50 form-control @error('purchase_date') is-invalid @enderror" type="date" name="purchase_date"   value="{{ $appliance->purchase_date }}" required autofocus autocomplete="purchase_date" />
              </div>

              <div class="flex items-center bg-white border border-gray-100 rounded">
                <input id="serial_num" class="w-full py-2 px-1 placeholder-indigo-400 outline-none placeholder-opacity-50 form-control @error('serial_num') is-invalid @enderror" type="text" name="serial_num"   value="{{ $appliance->serial_num }}" required autofocus autocomplete="serial_num" />
              </div>

              <button type="submit"class="text-white bg-indigo-500 px-4 py-2 rounded">
                 {{ __('Save Appliance') }}
              </button>
           </div>
        </form>
     </div>

    
    
</x-app-layout>
    
    
