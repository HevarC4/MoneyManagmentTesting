<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//unpkg.com/alpinejs" defer></script>        
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');</style>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="grid place-items-center h-screen bg-slate-100" x-data="{open: false}">
    <div class="fixed h-3/4 w-1/3 rounded-2xl shadow-xl flex items-center" x-bind:class="open ? 'z-50 bg-white rotate-0 transition delay-200' : '-rotate-[7deg] bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 transition delay-200'" x-cloak>
        <div class="flex flex-col justify-center mx-24 w-full" x-show="open" x-cloak>
            <div class="pb-6 border-b-2 space-y-6 border-gray-400">
                <h1 class="text-4xl font-bold text-gray-800" style="font-family: 'Poppins', sans-serif;">Sign Up</h1>
                <div class="flex space-x-2">
                    <input type="text" class="w-full p-2 border-b-2 border-gray-400 outline-none active:border-cyan-300  focus:border-cyan-500 hover:border-cyan-400 active:border-none focus:placeholder:text-cyan-500 hover:placeholder:text-cyan-400" placeholder="First Name">
                    <input type="text" class="w-full p-2 border-b-2 border-gray-400 outline-none active:border-cyan-300  focus:border-cyan-500 hover:border-cyan-400 active:border-none focus:placeholder:text-cyan-500 hover:placeholder:text-cyan-400" placeholder="Last Name">
                </div>
                <input type="text" class="w-full p-2 border-gray-400 border-b-2 outline-none active:border-cyan-300  focus:border-cyan-500 hover:border-cyan-400 active:border-none focus:placeholder:text-cyan-500 hover:placeholder:text-cyan-400" placeholder="Email">
                <input type="password" class="w-full p-2 border-gray-400 border-b-2 outline-none active:border-cyan-300  focus:border-cyan-500 hover:border-cyan-400 active:border-none focus:placeholder:text-cyan-500 hover:placeholder:text-cyan-400" placeholder="Password">
                <input type="password" class="w-full p-2 border-gray-400 border-b-2 outline-none active:border-cyan-300  focus:border-cyan-500 hover:border-cyan-400 active:border-none focus:placeholder:text-cyan-500 hover:placeholder:text-cyan-400" placeholder="Password Confirmation">
                <button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-sm shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-semibold rounded-lg text-md px-5 py-2.5 text-center me-2 mb-2">Sign Up</button>
            </div>
            <p class="flex items-center justify-center text-sm text-gray-600 mt-6">
                Already a member?&nbsp;  
                <button @click="open = !open" class="text-cyan-500 hover:underline">Sign in</button>
            </p>
        </div>
    </div>
    <div x-cloak class="fixed h-3/4 w-1/3  rounded-2xl shadow-xl flex items-center" x-bind:class="!open ? 'z-40 bg-white transition delay-300' : '-rotate-[7deg] bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 transition delay-200'">
        <div class="flex flex-col  justify-center mx-24 w-full" x-show="!open" x-cloak>
            <div class="pb-6 border-b-2 border-gray-400 space-y-10">
                <h1 class="text-4xl font-bold text-gray-800" style="font-family: 'Poppins', sans-serif;">Sign In</h1>
                <input type="text" class="w-full p-2 border-gray-400 border-b-2 outline-none active:border-cyan-300  focus:border-cyan-500 hover:border-cyan-400 active:border-none focus:placeholder:text-cyan-500 hover:placeholder:text-cyan-400" placeholder="Email">
                <input type="password" class="w-full border-gray-400 p-2 border-b-2 outline-none active:border-cyan-300  focus:border-cyan-500 hover:border-cyan-400 active:border-none focus:placeholder:text-cyan-500 hover:placeholder:text-cyan-400" placeholder="Password">
                <button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-sm shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-semibold rounded-lg text-md px-5 py-2.5 text-center me-2 mb-2">Sign In</button>
            </div>
            <div class="mt-8 mx-auto">
                <button type="button" class="text-black mb-6 focus:ring-2 focus:outline-none shadow-md border-2 border-gray-300 hover:border-cyan-400 focus:ring-cyan-600 font-medium rounded-lg text-sm px-5 py-1 text-center inline-flex items-center dark:focus:ring-cyan-800 me-2 space-x-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 48 48">
                        <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>
                    <p class="text-gray-700 font-semibold">Sign in with Google</p>
                </button>
                <p class="flex items-center justify-center text-sm text-gray-600">
                    New here?&nbsp;
                    <button @click="open = !open" class="text-cyan-500 hover:underline">Create an account</button>
                </p>
            </div>
        </div>
    </div>
</body>
</html>