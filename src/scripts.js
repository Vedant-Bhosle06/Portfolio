document.addEventListener("DOMContentLoaded", function () {
    const timeElement = document.getElementById("time");
    let currentTime; // To store the current time
    let offset; // To calculate the difference between local time and IST

    // Function to fetch IST time with retry logic
    async function fetchIST() {
        try {
            const response = await fetch("https://worldtimeapi.org/api/timezone/Asia/Kolkata");
            if (!response.ok) {
                throw new Error("Failed to fetch time");
            }

            const data = await response.json();
            const serverTime = new Date(data.datetime);
            const localTime = new Date();
            offset = serverTime - localTime; // Calculate offset to adjust local time to IST
            currentTime = new Date(localTime.getTime() + offset);

            // Start updating the time locally once it is successfully fetched
            updateTime();
            setInterval(updateTime, 1000);
        } catch (error) {
            console.error("Error fetching IST, retrying in 3 seconds:", error);
            timeElement.textContent = "Retrying to fetch time...";
            setTimeout(fetchIST, 3000); // Retry after 3 seconds
        }
    }

    // Function to update the time on the screen
    function updateTime() {
        if (currentTime) {
            currentTime = new Date(currentTime.getTime() + 1000); // Increment the current time by 1 second
            timeElement.textContent = currentTime.toLocaleTimeString("en-IN", {
                timeZone: "Asia/Kolkata",
                hour: "2-digit",
                minute: "2-digit",
                second: "2-digit",
                hour12: true,
            });
        }
    }

    // Start the process by fetching IST time
    fetchIST();

    // Cursor Tracking functionality
    const cursorDiv = document.getElementById('cursor1');

    // Function to update the cursor position
    document.addEventListener('mousemove', function (e) {
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        cursorDiv.style.transform = `translate(${mouseX - cursorDiv.offsetWidth / 2}px, ${mouseY - cursorDiv.offsetHeight / 2}px)`;
    });
});
