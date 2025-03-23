document.getElementById("image").addEventListener("mouseover", function() {
    this.src = "ngoku.png";  // Change image
    document.getElementById("text").innerText = "Image changed! Hover out to revert.";
});

document.getElementById("image").addEventListener("mouseout", function() {
    this.src = "bwgoku.jpeg";  // Revert to original image
    document.getElementById("text").innerText = "Hover over the image to change it!";
});
