@extends('layouts.app')
@section('content')
<div class=" p-4 mt-14 mb-4 rounded bg-gray-50 dark:bg-gray-800">
    <h1 class="text-white text-center dark:text-white dark:text-center text-lg pb-10">Customer With Virtual Acoount</h1>
   
    <
            <div class="relative overflow-x-auto shadow-md pt-3">
                <form action="{{ route('customer-va.print-lot') }}" method="POST" >
                    @csrf
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class=" py-3 dark:bg-green-700 bg-green-700 dark:text-white text-white"><button class="w-full" type="submit" >Print</button></th>
                            <th scope="col" class="px-6 py-3">ID Customer</th>
                            <th scope="col" class="px-6 py-3">Nama Customer</th>
                            <th scope="col" class="px-6 py-3">Virtual Account</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customerVas as $customer)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <input name="checkboxid[]" id="chckboxid" type="checkbox" value="{{ $customer->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                               
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $customer->id }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $customer->customer->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $customer->virtual_account }}
                            </td>
                           
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                </form>
            </div>
          
 

    </div>

                  
   
@endsection
