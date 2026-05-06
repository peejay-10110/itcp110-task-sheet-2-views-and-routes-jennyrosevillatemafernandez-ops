<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me | Jenny Rose</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #4c1d95 0%, #7c3aed 100%) fixed;
            font-family: 'Inter', sans-serif;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }
    </style>
</head>
<body class="min-h-screen text-white flex flex-col items-center p-6">

<!-- Navigation Bar -->
<nav class="fixed top-0 w-full p-6 flex justify-center gap-8 bg-white/10 backdrop-blur-md z-50">
    <a href="/" class="font-bold hover:text-purple-300 transition">Home</a>
    <a href="/about" class="font-bold hover:text-purple-300 transition">About</a>
    <a href="/education" class="font-bold hover:text-purple-300 transition">Education</a>
    <a href="/skills" class="font-bold hover:text-purple-300 transition">Skills</a>
    <a href="/experience" class="font-bold hover:text-purple-300 transition">Experience</a>
    <a href="/projects" class="font-bold hover:text-purple-300 transition">Projects</a>
    <a href="/gallery" class="font-bold hover:text-purple-300 transition">Gallery</a>
    <a href="/services" class="font-bold hover:text-purple-300 transition">Services</a>
    <a href="/hobbies" class="font-bold hover:text-purple-300 transition">Hobbies</a>
    <a href="/contact" class="font-bold border-b-2 border-white">Contact</a>
</nav>

<!-- Header Section -->
<div class="mt-24 mb-12 text-center">
    <h1 class="text-4xl font-extrabold mb-2">Get In Touch</h1>
    <p class="opacity-80">Have questions or want to collaborate? Feel free to send me a message!</p>
</div>

<!-- Contact Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl w-full">

    <!-- Contact Information -->
    <div class="glass-card p-8 rounded-3xl">
        <h2 class="text-2xl font-bold mb-6 text-purple-200">Contact Details</h2>

        <div class="space-y-6">
            <div class="flex items-center gap-4">
                <div class="bg-white/20 p-3 rounded-full">📧</div>
                <div>
                    <p class="text-xs uppercase opacity-60">Email Address</p>
                    <p class="font-semibold">fjennyrose42@gmail.com</p>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <div class="bg-white/20 p-3 rounded-full">📱</div>
                <div>
                    <p class="text-xs uppercase opacity-60">Mobile Number</p>
                    <p class="font-semibold">09947461302</p>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <div class="bg-white/20 p-3 rounded-full">📍</div>
                <div>
                    <p class="text-xs uppercase opacity-60">Location</p>
                    <p class="font-semibold">Taguig City, Philippines</p>
                </div>
            </div>
        </div>

        <!-- Social Links Section -->
        <div class="mt-10 pt-8 border-t border-white/10">
            <h3 class="text-lg font-bold mb-4">Connect with me</h3>
            <div class="flex gap-4">
                <a href="#" class="bg-white/10 hover:bg-white hover:text-purple-700 p-3 rounded-xl transition">GitHub</a>
                <a href="#" class="bg-white/10 hover:bg-white hover:text-purple-700 p-3 rounded-xl transition">LinkedIn</a>
                <a href="https://facebook.com/jennyrose.fernandez.3910" target="_blank" class="bg-white/10 hover:bg-white hover:text-purple-700 p-3 rounded-xl transition">Facebook</a>
            </div>
        </div>
    </div>

    <!-- Quick Message Form -->
    <div class="glass-card p-8 rounded-3xl flex flex-col">
        <h2 class="text-2xl font-bold mb-6 text-purple-200">Send a Message</h2>
        <div class="space-y-4 flex-grow">
            <div>
                <label class="block text-sm mb-2">Name</label>
                <input type="text" placeholder="Enter your name" class="w-full bg-white/10 border border-white/20 rounded-lg p-3 outline-none focus:border-white transition">
            </div>
            <div>
                <label class="block text-sm mb-2">Message</label>
                <textarea rows="4" placeholder="Type your message here..." class="w-full bg-white/10 border border-white/20 rounded-lg p-3 outline-none focus:border-white transition"></textarea>
            </div>
        </div>

        <a href="https://www.facebook.com/jennyrose.fernandez.3910" target="_blank" class="mt-4 w-full bg-white text-purple-700 text-center font-bold py-3 rounded-lg hover:bg-purple-100 transition shadow-lg block">
            Send Message via Facebook
        </a>
    </div>

</div>

<footer class="mt-20 py-8 opacity-60 text-sm text-center">
    Jenny Rose Fernandez | TUP - Taguig Campus
</footer>

</body>
</html>
