document.addEventListener("DOMContentLoaded", function () {
    const cursor = document.getElementById("cursor2");
    let cursorX = 0;
    let cursorY = 0;

    // Update cursor position on mousemove
    document.addEventListener("mousemove", function (event) {
        // Get the cursor's x and y position
        cursorX = event.clientX;
        cursorY = event.clientY;

        // Apply the new position to the cursor element
        cursor.style.transform = `translate3d(${cursorX - cursor.offsetWidth / 2}px, ${cursorY - cursor.offsetHeight / 2}px, 0)`;
    });
});
