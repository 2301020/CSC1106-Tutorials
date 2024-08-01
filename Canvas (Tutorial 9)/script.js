const canvas = document.getElementById('my-canvas');
const context = canvas.getContext('2d');

let writingMode = false;
context.lineWidth = 3;
context.lineJoin = context.lineCap = 'round';

canvas.addEventListener('pointerdown', handlePointerDown, {passive: true});
canvas.addEventListener('pointerup', handlePointerUp, {passive: true});
canvas.addEventListener('pointermove', handlePointerMove, {passive: true});

function handlePointerDown(event) {
    writingMode = true;
    context.beginPath();
    const [x, y] = getCursorPosition(event);
    context.moveTo(x, y);
}

function handlePointerUp() {
    writingMode = false;
}

function handlePointerMove(event) {
    if (!writingMode) {
        return
    }
    const [x, y] = getCursorPosition(event);
    context.lineTo(x, y);
    context.stroke();
}

function getCursorPosition(event) {
    positionX = event.clientX - event.target.getBoundingClientRect().x;
    positionY = event.clientY - event.target.getBoundingClientRect().y;

    return [positionX, positionY]
}

function clearPad() {
    context.clearRect(0, 0, canvas.width, canvas.height);
}


document.getElementById('canvas-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const imageURL = canvas.toDataURL();
    const image = document.getElementById('signature-img');
    const downloadLink = document.getElementById('download-link');
    const imageDiv = document.getElementById('signature-img-div');
    image.src = imageURL;
    image.height = canvas.height;
    image.width = canvas.width;
    image.style.display = 'block';
    downloadLink.href = imageURL;
})


document.getElementById('clear-canvas-btn').addEventListener('click', function(event) {
    event.preventDefault();
    clearPad();
})


