@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <!-- iconic icons -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     <!-- tailwindcss script -->
     <script src="https://cdn.tailwindcss.com"></script>

     <style>
       ion-icon {
  font-size: 30px;
}
     </style>

  <title>Login</title>
</head>
<body>

<div class="font-sans">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
           
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                    Login
                </label>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div id="email" class="mt-7">                
                        <input type="email" placeholder="example.email@gmail.com" class="mt-1 pl-3 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 {{ $errors->has('email') ? ' is-invalid' : '' }}"
                        value="{{ old('email') }}" name="email" required autofocus>
                         
                        @if($errors->has('email'))
                            <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                            
                        @endif
                    </div>

                    <div class="mt-7">                
                        <input id="password" type="password" placeholder="Enter password" class="mt-1 block pl-3 w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 {{$errors->has('password')? 'is-invalid':''}}"
                        value="{{ old('password') }}" name="password" required>
                         

                        @if($errors->has('password'))
                            <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                            
                        @endif
                    </div>
                    <div class="mt-7">
                        <button type="submit" class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Login
                        </button>
                    </div>
        
                </form>
        
                    <div class="mt-7">
                        <div class="flex justify-center items-center">
                            <label class="mr-2" >I don't have an Account!!</label>
                            <a href="/register" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                               Register
                            </a>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@endsection

