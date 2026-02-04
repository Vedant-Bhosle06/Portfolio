<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vedant's Portfolio</title>
    <link href="./src/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script> <!-- Ensure Tailwind CSS is loaded -->
</head>
<body class="bg-gray-200 text-gray-950 snap-y snap-mandatory overflow-y-scroll bg-cover relative">

    <!-- Glowing Circular Div that Follows Cursor -->
    <div id="cursor1" class="absolute w-10 h-10 rounded-full bg-amber-600 opacity-40 blur-lg pointer-events-none"></div>
    <?php include './src/components/header.php'; ?>

    <main class="max-w-7xl mx-auto">
        <!-- Intro Section -->
        <section class="max-w-4xl mx-auto h-screen snap-start flex flex-col items-left px-4 text-left">
            <p class="text-xl font-normal mt-24 mb-4">Based in Mumbai → <span id="time" class="font-semibold"></span></p>
            <hr class="border-t-2 border-black">
            <h1 class="my-5 py-5 text-6xl font-extrabold">Hi, this is Vedant.</h1>
            <p class="text-xl font-normal mt-6">
                I'm a passionate developer and learner, currently studying Computer Engineering in Mumbai. My interests span Java, JavaScript, and building innovative applications. I believe in taking risks to achieve growth and success.
            </p>
        </section>

        <hr class="border-t-2 border-black">

        <section class="max-w-5xl mx-auto h-fit snap-start flex flex-col text-left ">
        <!-- Projects Section -->
        <section id="projects" class="max-w-4xl px-6">
            <h2 class="text-4xl mt-14 font-semibold text-left">Projects</h2>
            <hr class="border-t border-black my-4 ">
            <div class="mt-6 space-y-6">
                <div>
                    <h3 class="font-semibold text-xl">Translator App</h3>
                    <p class="text-sm mt-1">Created a Language Translator App using Java, enabling real-time text and speech translation into 10+ global languages.</p>
                </div>
                <hr class="border-t border-black my-4 ">
                <div>
                    <h3 class="font-semibold text-xl">Multi-Tasking WebApp</h3>
                    <p class="text-sm mt-1">Built a web application leveraging Java servlets and threadpooling for concurrent task handling, featuring asynchronous responses with JavaScript async/await.</p>
                </div>
                <hr class="border-t border-black my-4 ">
                <div>
                    <h3 class="font-semibold text-xl">Amazon Clone</h3>
                    <p class="text-sm mt-1">Developed a fully functional e-commerce frontend using HTML, CSS, and JavaScript, with optimized UI and interactive user experiences.</p>
                </div>
                <hr class="border-t border-black my-4 ">
                <div>
                    <h3 class="font-semibold text-xl">Smart Home Controller System</h3>
                    <p class="text-sm mt-1">Designed an IoT-based solution with ESP32 and a relay module for controlling home appliances via mobile apps, voice commands, and physical switches.</p>
                </div>
            </div>
        </section>
        <hr class="max-w-5xl border-t-2 border-black mt-14">
        
        <!-- Education Section -->
        <section class="max-w-4xl px-6">
            <h2 class="text-4xl mt-14 font-semibold text-left">Education</h2>
            <hr class="border-t border-black my-4 ">
            <div class="mt-6 space-y-6">
                <div>
                    <h3 class="font-semibold">Diploma in Computer Engineering</h3>
                    <p class="text-sm">Government Polytechnic Mumbai (Final Year, Expected Completion: 2025)</p>
                </div>
                <hr class="border-t border-black my-4 ">
                <div>
                    <h3 class="font-semibold">10th Grade (ICSE)</h3>
                    <p class="text-sm">St. Xavier's High School, Panchgani</p>
                    <p class="text-sm">Scored: 88%</p>
                </div>
            </div>
        </section>
        <hr class="max-w-5xl border-t-2 border-black mt-14">

        <!-- Skills Section -->
        <section class="max-w-4xl px-6">
            <h2 class="text-4xl mt-14 font-semibold text-left">Skills</h2>
            <hr class="border-t border-black my-4 ">
            <div class="mt-6 text-left space-y-4">
                <p>Technologies: <span class="font-semibold">Java (Core & Advanced), JavaScript, R, MongoDB, MySQL</span></p>
                <p>Tools: <span class="font-semibold">HTML, CSS, Git, GitHub, VS Code</span></p>
                <p>Interests:</p>
                <ul class="list-disc list-inside">
                    <li>Designing user-focused solutions with Java and modern web technologies</li>
                    <li>Exploring data-driven applications with MongoDB and R</li>
                    <li>Building scalable and efficient software systems</li>
                    <li>Continuously learning new technologies and development frameworks</li>
                </ul>
            </div>

            <!-- GitHub Logo Section -->
            <div class="mt-10 flex left-5">
                <a href="https://github.com/Vedant-Bhosle06" target="_blank" class="flex items-center space-x-2">
                    <img src="./assets./githublogo.png" alt="GitHub Logo" class="h-12 w-12">
                    <span class="text-lg font-semibold">View My GitHub Projects</span>
                </a>
            </div>
        </section>

        </section>
    </main>

    <?php include './src/components/footer.php'; ?>

    <!-- Link to the external JavaScript file -->
    <script src="./src/scripts.js"></script>
</body>
</html>
