@extends('layouts.main')
@section('navbar')

@php
    $no=1;
@endphp


<a href="/input"><button class="btn btn-primary ml-2 mt-5 mb-2">Add</button></a>

    {{-- table s --}}
    <div class="overflow-x-auto">
        <table class="table table-zebra">
          <!-- head -->
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Kesalahan</th>
              <th>Hukuman</th>
            </tr>
            
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach($student as $s)

            <tr>
               {{-- untuk memanggilnya sesuaikan dgn field --}}
                <th>{{ $no }}</th>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->kesalahan }}</td>
                <td>{{ $s->hukuman }}</td>
                <td>
                  <a href="{{ $s->id }}/edit"><button class="btn btn-outline btn-primary">Edit</button></a>
                  
                  <form action="/update/{{ $s->id }}" method="POST">

                    @csrf
                    @method('delete')
                    
                    <button type="submit" class="btn btn-outline btn-error">Delete</button>

                  </form>
                </td>
              </tr>

              @php
                  $no++;
              @endphp
              @endforeach
              
           
            
          </tbody>
          
        </table>

      </div>
    
    {{-- table e --}}

@endsection