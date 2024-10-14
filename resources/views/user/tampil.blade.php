<x-layout>
  <x-slot:title>CRUD</x-slot> 
  
  <div class="d-flex">
  <h3 class="text-xl">List User</h3>
  </div>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Email_created_at
                </th>
                <th scope="col" class="px-6 py-3">
                    Password
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $no=>$data)
            <tr>
                <td scope="col" class="px-6 py-3">
                    {{$no+1}}
                </td>
                <td scope="col" class="px-6 py-3">
                    {{$data->name}}
                </td>
                <td scope="col" class="px-6 py-3">
                    {{$data->email}}
                </td>
                <td scope="col" class="px-6 py-3">
                    {{$data->email_created_at}}
                </td>
                <td scope="col" class="px-6 py-3">
                    {{$data->password}}
                </td>
                <td>
                <a href="{{ route('user.edit') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-small rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br>
<br>
<a href="{{ route('user.tambah') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-small rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah User</a>
</x-layout>

