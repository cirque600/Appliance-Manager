<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Appliance List') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('appliances.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Appliance</a>
            </div>
           
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Manufacturer
                  </th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Serial Number
                   </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Action
                </th>
                
              </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($appliances as $appliance)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                
                    <div class="text-sm text-gray-900">{{ $appliance->name }}</div> 
                    
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                    <div class="text-sm text-gray-900">{{ $appliance->manufacturer }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                  <div class="text-sm text-gray-900">{{ $appliance->serial_number }}</div>
              </td>
                

                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium" >
                  <a href="{{ route('appliances.show', $appliance->id) }}" class="text-blue-600 hover mb-2 mr-2">View</a>
                  <a href="{{ route('appliances.edit', $appliance->id) }}" class="text-indigo-600 hover mb-2 mr-2">Edit</a>
                  <form class="inline-block" action="{{ route('appliances.destroy', $appliance->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                  </form>
                  
                </td>
                
               
                
              </tr>
            @endforeach
              <!-- More rows... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
        </div>
    </div>
    
</x-app-layout>
