// script.js
const randomButton = document.getElementById('randomButton');
const resultElement = document.getElementById('result');

randomButton.addEventListener('click', () => {
    const min = 1; // Set your minimum value
    const max = 100; // Set your maximum value
    const randomNum = getRandomInt(min, max);
    resultElement.textContent = `Random number: ${randomNum}`;
});

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
