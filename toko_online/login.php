<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-r from-blue-500 via-indigo-600 to-purple-600 dark:bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow-lg dark:border dark:border-gray-700 sm:max-w-md xl:p-0 dark:bg-gray-800">
            <div class="p-6 space-y-6 sm:p-8">
                <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-3xl dark:text-white">
                    Sign in to Your Account
                </h1>
                <form class="space-y-6" action="proses_login.php" method="post">
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username" id="username" class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your username" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" class="w-full p-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-900 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="••••••••" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:ring-offset-gray-800">
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-300">Remember me</label>
                        </div>
                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                    </div>
                    <button type="submit" name="login" class="w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-indigo-600 dark:focus:ring-indigo-800 transition duration-300 ease-in-out transform hover:scale-105">
                        Sign in
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Don’t have an account? <a href="tambah_pelanggan.php" class="font-medium text-indigo-600 hover:underline dark:text-indigo-500">Sign up</a>
                    </p>
                    <!-- Button for Login as Staff -->
                    <a href="login_petugas.php" class="w-full text-center block text-indigo-600 bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-indigo-500 dark:focus:ring-indigo-800 transition duration-300 ease-in-out transform hover:scale-105">
                        Login sebagai Petugas
                    </a>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS (If needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
