@extends('layouts.main')
@section('navbar')


<br><br>

    {{-- form s --}}
<form class="max-w-sm mx-auto" method="POST" action="/update/{{ $student->id }}">
  @csrf
  @method('put')
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
      <input type="text" name="nama" value="{{ $student->nama }}" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="edit nama..." required />
    </div>
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kesalahan</label>
      <input type="text" name="kesalahan" value="{{ $student->kesalahan }}" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="edit kesalahan..." required />
    </div>
    <div class="mb-5">
      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hukuman</label>
      <input type="text" name="hukuman" value="{{ $student->hukuman }}" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="edit hukuman..." required />
    </div>
    <div class="flex items-start mb-5">
    </div>
    <button type="submit" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
  </form>
    {{-- form e --}}


    @endsection