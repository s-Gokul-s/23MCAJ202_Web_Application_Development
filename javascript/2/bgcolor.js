//  Random HEX color
function getRandomColor() {
    let letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Change Color on button click
document.getElementById("changeColorBtn").addEventListener("click", function () {
    let newColor = getRandomColor();
    document.body.style.backgroundColor = newColor;
    document.getElementById("colorCode").innerText = newColor;
});
