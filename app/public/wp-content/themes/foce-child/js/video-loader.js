document.addEventListener('DOMContentLoaded', function() {
    var video = document.getElementById('background-video');

    // Delay in milliseconds (5000ms = 5 seconds)
    var delay = 2000;

    // Show video after the delay and start playing
    setTimeout(function() {
        video.classList.remove('hidden');
        video.play().catch(error => {
            console.error("Error attempting to play the video: ", error);
        }); // Start playing the video after the delay
    }, delay);

    video.addEventListener('canplay', function() {
        video.classList.remove('hidden');
    });
});
