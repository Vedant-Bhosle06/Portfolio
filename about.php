<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Vedant</title>
    <link href="./src/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-teal-800 text-black snap-y snap-mandatory overflow-y-scroll bg-cover">

    <!-- Glowing Circular Div that Follows Cursor -->
    <div id="cursor2" class="absolute w-10 h-10 rounded-full bg-gray-200 opacity-60 blur-lg pointer-events-none"></div>
    
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

    <main class="max-w-7xl mx-auto text-pt">
        <section class="max-w-4xl mx-auto h-screen flex flex-col justify-center px-6">
            <p class="text-3xl font-bold mb-6">Hi there, this is Vedant.</p>
            <p class="text-lg leading-relaxed">
                Growing up in Mumbai, I was always captivated by how technology could transform ideas into reality.
                My journey into the world of programming began as a curiosity, experimenting with small projects and
                understanding how systems work. Over time, this fascination grew into a passion, leading me to pursue a
                diploma in Computer Engineering at Government Polytechnic Mumbai.
            </p>
            <p class="text-lg leading-relaxed mt-4">
                It was here that I truly discovered my love for Java and its versatility in solving real-world problems.
                My early experiments evolved into meaningful projects, like a Language Translator App that bridges
                communication gaps through speech recognition and multilingual text translation. Another project, a Multi-Tasking
                WebApp utilizing servlets and threadpooling, gave me insight into the power of concurrent processing to
                enhance user experience.
            </p>
            <p class="text-lg leading-relaxed mt-4">
                These experiences solidified my belief in creating software that’s not just functional but impactful. With
                every project, my goal has been to craft seamless solutions that simplify lives and push boundaries.
            </p>
            <p class="text-lg leading-relaxed mt-4">
                I’m excited to continue this journey, exploring new challenges and building innovative tools that make a
                difference. Let’s connect—I’d love to share more of my story!
            </p>
        </section>
    </main>

    <div class="max-w-4xl mx-auto px-6 flex flex-col items-start pb-24">
        <!-- Navigation Links -->
        <div class="space-y-4">
            <a href="mailto:vedantbhosle2006@gmail.com" class="text-xl font-semibold text-gray-950 hover:text-black transition-colors">
                →Email
            </a>
            <a href="assets/resume.pdf" download="Vedant_Bhosle_Resume.pdf" target="_blank" class="text-xl font-semibold text-gray-950 hover:text-black transition-colors">
                →Resume
            </a>
            <a href="https://www.linkedin.com/in/bhosle-vedant" target="_blank" class="text-xl font-semibold text-gray-950 hover:text-black transition-colors">
                →LinkedIn
            </a>
            <a href="https://www.instagram.com/veydant_b" target="_blank" class="text-xl font-semibold text-gray-950 hover:text-black transition-colors">
                →Instagram
            </a>
        </div>
    </div>
    <script src="./src/scripts2.js"></script>
</body>
</html>
