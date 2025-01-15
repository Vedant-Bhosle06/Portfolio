<!-- src/contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="./src/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tl from-sky-700 to-gray-200 text-gray-950 snap-y snap-mandatory overflow-y-scroll bg-cover relative">
        
    <div class="max-w-7xl my-2 px-6 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <a href="/" class="text-xl font-semibold">Vedant Bhosle</a>
        </div>
        <nav>
            <ul class="flex space-x-8">
                <li><a href="about.php" class="hover:font-black">About</a></li>
                <li><a href="index.php/#projects" class="hover:font-black">Projects</a></li>
                <li>
                    <a href="assets/resume.pdf" download="Vedant_Bhosle_Resume.pdf" class="hover:font-black">
                        Resume
                    </a>
                </li>
                <li><a href="contact.php" class="hover:font-black">Contact</a></li>
            </ul>
        </nav>
    </div>

    <hr class="border-t-2 border-black">

    <main class="max-w-7xl mx-auto px-6">
        <section class="max-w-4xl mx-auto h-fit snap-start flex flex-col text-left  my-10">
            <h1 class="text-4xl font-semibold">Contact Me</h1>
            <hr class="border-t border-black my-4 ">
            <form class="max-w-3xl mx-auto p-6 bg-inherit rounded-lg" method="POST" action="./src/backend/contact_form.php">

                <label for="name" class="block text-lg">Name:</label>
                <input type="text" id="name" name="name" required class="bg-white bg-opacity-50 border border-gray-300 rounded-lg mt-2 p-2 w-full backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name">

                <label for="email" class="block text-lg mt-4">Email:</label>
                <input type="email" id="email" name="email" required class="bg-white bg-opacity-50 border border-gray-300 rounded-lg mt-2 p-2 w-full backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email">

                <label for="message" class="block text-lg mt-4">Message:</label>
                <textarea id="message" name="message" rows="6" required class="bg-white bg-opacity-50 border border-gray-300 rounded-lg mt-2 p-2 w-full backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the message"></textarea>

                <button type="submit" class="mt-6 px-4 py-2 bg-slate-900 text-white rounded">Send Message</button>
            </form>
        </section>
    </main>

    <hr class="border-t-2 border-black mt-14">

    <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center space-y-8 md:space-y-0">
        <!-- Navigation Links -->
        <div class="grid grid-cols-2 gap-y-6 gap-x-10 pl-10 md:pl-20">
            <!-- First Column -->
            <a href="mailto:vedantbhosle2006@gmail.com" class="text-base font-semibold text-gray-950 hover:text-black transition-colors">
                →Email
            </a>
            <a href="assets/resume.pdf" download="Vedant_Bhosle_Resume.pdf" target="_blank" class="text-base font-semibold text-gray-950 hover:text-black transition-colors">
                →Resume
            </a>
            <!-- Second Column -->
            <a href="https://www.linkedin.com/in/bhosle-vedant" target="_blank" class="text-base font-semibold text-gray-950 hover:text-black transition-colors">
                →LinkedIn
            </a>
            <a href="https://www.instagram.com/veydant_b" target="_blank" class="text-base font-semibold text-gray-950 hover:text-black transition-colors">
                →Instagram
            </a>
        </div>

        <!-- Update Section -->
        <div class="text-center md:text-right text-base font-semibold text-gray-950">
            <p>Updated 1/25</p>
            <p>© Vedant Bhosle_2025</p>
        </div>
    </div>
</body>
</html>
