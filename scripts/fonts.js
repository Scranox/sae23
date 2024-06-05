document.getElementById('changeFontBtn').addEventListener('click', changeFont);

let currentFont = 0;
const fonts = [
    "Montserrat",
    "OpenDyslexic"
];

function changeFont() {
    const bodyElement = document.body;

    currentFont = (currentFont + 1) % fonts.length;

    bodyElement.style.fontFamily = fonts[currentFont];

    const buttonElement = document.getElementById('changeFontBtn');
    const nextFont = fonts[(currentFont + 1) % fonts.length];
    buttonElement.textContent = `Changer la police vers ${nextFont}`;
}
