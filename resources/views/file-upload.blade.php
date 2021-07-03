@extends('layouts.app')
@section('content')
<div class="flex justify-center">
<div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Upload Excel File </h3>
            @csrf
           
          
            <div class = "mb-4">
 <label for="list-name" class="sr-only">List Name</label>
 <input type="text" name="list-name" id="list-name" placeholder="List Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('list-name') border-red-500 @enderror">
 @error('list-name')
 <div class="text-red-500 mt-2 text-sm">
 {{$message}}
 </div>
 @enderror
 </div>
           
            <div class="custom-file">
            <div class = "mb-4">
                <label class="custom-file-label" for="chooseFile">Select file</label>
                <input type="file" name="file" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" id="chooseFile">
                </div>
            </div>

            <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" >Upload Files</button>
             </div>
        </form>
        </div>
    </div>
@endsection