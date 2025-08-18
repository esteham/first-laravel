<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.css')
</head>
<body class="bg-gray-100">

<div class="max-w-4xl mx-auto py-12 px-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Contact Us</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Contact Info -->
        <div class="space-y-4">
            <p class="text-gray-600">If you have any questions, feel free to reach out to us using the form or the details below:</p>
            
            <div class="space-y-2">
                <p class="flex items-center text-gray-700">
                    <span class="ml-2">123 Main Street, Dhaka, Bangladesh</span>
                </p>
                <p class="flex items-center text-gray-700">
                    <span class="ml-2">+880 123 456 789</span>
                </p>
                <p class="flex items-center text-gray-700">
                    <span class="ml-2">info@example.com</span>
                </p>
            </div>
        </div>

        <!-- Contact Form -->
        <div>
            <form action="#" method="POST" class="space-y-4 bg-white shadow-md rounded-2xl p-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                    <input type="text" name="name" id="name" class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-blue-500 p-2">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                    <input type="email" name="email" id="email" class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-blue-500 p-2">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message" rows="4" class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-blue-500 p-2"></textarea>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-xl hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
