document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const heading = urlParams.get('heading');
    const logo = urlParams.get('logo');
    const paragraph = urlParams.get("text");
    const videoParam = urlParams.get('video'); 

    const videoContainer = document.getElementById('video-container');

    if (videoParam === "no video") {
        videoContainer.classList.add("hidden");
    } else {
        const videoElement = document.getElementById('video');
        videoElement.setAttribute('src', videoParam); 
    }

    document.getElementById('heading').innerHTML = heading;
    const logoHolder = document.getElementById('logo');
    logoHolder.setAttribute('src', logo);
    document.getElementById('about').innerHTML = paragraph;
});
