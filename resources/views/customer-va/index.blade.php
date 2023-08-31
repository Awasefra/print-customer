@extends('layouts.app')
@section('content')
<div class=" p-4 mt-14 mb-4 rounded bg-gray-50 dark:bg-gray-800">
    <h1 class="text-white text-center dark:text-white dark:text-center text-lg pb-10">INI Customer With Virtual Acoount</h1>
    {{-- @php
    echo "<script>";
        echo "alert('hello');";
        echo "</script>";
        @endphp --}}
        @if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block text-white dark:text-white">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
    <
            <div class="relative overflow-x-auto shadow-md pt-3">
                <form action="{{ route('prospect.pdf-with-selection') }}" method="POST" >
                    @csrf
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class=" py-3 dark:bg-green-700"><button class="w-full" type="submit" >Print A Lot</button></th>
                            <th scope="col" class="px-6 py-3">ID Customer</th>
                            <th scope="col" class="px-6 py-3">Nama Customer</th>
                            <th scope="col" class="px-6 py-3">Virtual Account</th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customerProspects as $prospects)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <input name="checkboxid[]" id="chckboxid" type="checkbox" value="{{ $prospects->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                               
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $prospects->id }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $prospects->nama }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $prospects->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $prospects->metodeBertemu->metode_bertemu}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $prospects->no_tlpn }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $prospects->status->status }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ url('prospect/edit/'.$prospects->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                </form>
            </div>
            {{ $customerProspects->links() }}

        {{-- </div> --}}
    {{-- </div> --}}
 

    </div>

                  
   
@endsection
