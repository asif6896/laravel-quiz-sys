<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-green-500 flex items-center justify-center min-h-screen">
    <div class="bg-yellow-500 p-8 rounded-2xl shadow-lg w-full max-w-sm">

        <h2 class="text-2xl text-center text-grey-800 mb-6 ">Admin Login</h2>
        @error('user')
           <div class="text-red-500">{{$message}}</div>
       @enderror
        <form action="/admin-login" method="POST" class="space-y-4">
            @csrf
            <div>
                <lable for="" class="text-grey-600 mb-1">Admin Name</lable>
                <input type="text" placeholder="Enter Admin Name" name="name"
                    class="w-full px-4 py-2 border border-grey-300 rounded-xl focus:outline-none">
            </div>
            @error('name')
                <div class="text-red-500">{{$message}}</div>
            @enderror
            <div>
                <lable for="" class="text-grey-600 mb-1">Password</lable>
                <input type="password" placeholder="Enter Admin Password" name="password"
                    class="w-full px-4 py-2 border border-grey-300 rounded-xl focus:outline-none">
            </div>
             @error('password')
                <div class="text-red-500">{{$message}}</div>
            @enderror
            
            <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-4 text-blue">Login</button>
        </form>
    </div>

</body>

</html>
