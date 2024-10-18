<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <!-- Container -->
    <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
        <div class="bg-white shadow-lg w-full rounded-lg divide-y divide-gray-200">
            <!-- Logo -->
            <div class="text-center py-6">
                <h1 class="text-3xl font-bold text-gray-700">Your Logo</h1>
            </div>
            
            <!-- Form Login -->
            <form action="{{route('admin.dashboard')}}" method="get" class="px-8 py-10">
                <div class="mb-5">
                    <label class="block text-sm font-semibold text-gray-600">E-mail</label>
                    <input type="email" class="mt-1 w-full px-3 py-2 border rounded-lg text-sm text-gray-700 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition duration-200" placeholder="Masukkan email" required />
                </div>
                <div class="mb-5">
                    <label class="block text-sm font-semibold text-gray-600">Password</label>
                    <input type="password" class="mt-1 w-full px-3 py-2 border rounded-lg text-sm text-gray-700 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition duration-200" placeholder="Masukkan password" required />
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-500 text-white py-3 rounded-lg font-semibold text-sm hover:bg-indigo-600 transition duration-300 focus:ring-4 focus:ring-indigo-400 focus:ring-opacity-50">
                        Login
                    </button>
                </div>
            </form>
            
            <!-- Social Media Login -->
            <div class="p-5">
                <div class="flex justify-between space-x-3">
                    <button class="w-full py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Facebook</button>
                    <button class="w-full py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">Google</button>
                    <button class="w-full py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition duration-300">GitHub</button>
                </div>
            </div>
            
            <!-- Forgot Password & Help -->
            <div class="px-5 py-5">
                <div class="flex justify-between">
                    <a href="#" class="text-sm text-gray-500 hover:text-gray-700">Forgot Password?</a>
                    <a href="#" class="text-sm text-gray-500 hover:text-gray-700">Help</a>
                </div>
            </div>
            
            <!-- Back Button -->
            <div class="py-5">
                <div class="text-center">
                    <a href="#" class="inline-block px-5 py-3 text-gray-600 hover:bg-gray-200 rounded-lg transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to your-app.com
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
