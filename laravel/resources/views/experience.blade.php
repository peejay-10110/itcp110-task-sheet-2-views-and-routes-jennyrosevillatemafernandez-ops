<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience | Jenny Rose</title>
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

<nav class="fixed top-0 w-full p-6 flex justify-center gap-8 bg-white/10 backdrop-blur-md z-50">
    <a href="/" class="font-bold hover:text-purple-300 transition">Home</a>
    <a href="/about" class="font-bold hover:text-purple-300 transition">About</a>
    <a href="/education" class="font-bold hover:text-purple-300 transition">Education</a>
    <a href="/skills" class="font-bold hover:text-purple-300 transition">Skills</a>
    <a href="/experience" class="font-bold border-b-2 border-white">Experience</a>
    <a href="/projects" class="font-bold hover:text-purple-300 transition">Projects</a>
    <a href="/gallery" class="font-bold hover:text-purple-300 transition">Gallery</a>
    <a href="/services" class="font-bold hover:text-purple-300 transition">Services</a>
    <a href="/hobbies" class="font-bold">Hobbies</a>
    <a href="/contact" class="font-bold hover:text-purple-300 transition">Contact</a>
</nav>

<!-- Header Section -->
<div class="mt-24 mb-12 text-center">
    <h1 class="text-4xl font-extrabold mb-2 uppercase tracking-wide">Work Experience</h1>
    <p class="opacity-80 italic">Summary of professional and student-assistant roles</p>
</div>

<!-- Main Content: Library Experience -->
<div class="glass-card p-8 rounded-3xl max-w-4xl w-full mb-10">
    <div class="flex flex-col md:flex-row justify-between mb-6 border-b border-white/10 pb-4">
        <div>
            <h2 class="text-2xl font-bold text-white">Library Assistant / Data Encoder</h2>
            <p class="text-purple-300 font-medium text-lg">School Library</p>
        </div>
        <div class="text-sm opacity-70 mt-2 md:mt-0 italic font-mono bg-black/20 p-2 rounded">
            Part-time / Student Assistant
        </div>
    </div>

    <ul class="space-y-5 text-md leading-relaxed opacity-95 list-disc list-outside ml-5">
        <li>
            <strong class="text-purple-200">Data Management:</strong> Efficiently encoded and updated library records using Microsoft Excel to maintain an organized database of books and resources.
        </li>
        <li>
            <strong class="text-purple-200">Circulation Control:</strong> Managed the daily log-in and log-out process for books, ensuring all borrowed items were accurately tracked and returned.
        </li>
        <li>
            <strong class="text-purple-200">Student Support:</strong> Provided front-desk assistance by manually verifying and logging student IDs when barcode scanners encountered technical issues.
        </li>
        <li>
            <strong class="text-purple-200">Inventory Maintenance:</strong> Conducted regular shelf-reading and physical inventory checks to ensure the library's collection remained in order.
        </li>
    </ul>
</div>

<footer class="mt-auto py-8 opacity-60 text-sm">
    © 2026 Jenny Rose Fernandez | TUP - Taguig Campus
</footer>

</body>
</html>
