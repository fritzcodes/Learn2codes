const canvas = document.getElementById('confetti');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const confettiPieces = [];
const numberOfPieces = 50;
const gravity = 0.5;

// Generate each piece of confetti
for (let i = 0; i < numberOfPieces; i++) {
    confettiPieces.push({
        x: Math.random() * canvas.width, // x-coordinate
        y: Math.random() * canvas.height, // y-coordinate
        r: Math.random() * 4 + 1, // radius
        d: Math.random() * numberOfPieces, // density
        color: `rgba(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255}, 0.7)`,
        tilt: Math.floor(Math.random() * 10) - 10,
        tiltAngleIncremental: Math.random() * 0.07 + 0.05,
        tiltAngle: 0
    });
}

function drawConfetti() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < numberOfPieces; i++) {
        let p = confettiPieces[i];
        ctx.beginPath();
        ctx.lineWidth = p.r;
        ctx.strokeStyle = p.color;
        ctx.moveTo(p.x + p.tilt + (p.r / 4), p.y);
        ctx.lineTo(p.x + p.tilt, p.y + p.tilt + (p.r / 4));
        ctx.stroke();
        p.tiltAngle += p.tiltAngleIncremental;
        p.y += (Math.cos(p.d) + 3 + p.r / 2) / 2;
        p.tilt = Math.sin(p.tiltAngle - (i / 3)) * 15;
        
        // Re-spawn confetti when out of frame
        if (p.y > canvas.height) {
            confettiPieces[i] = {
                x: Math.random() * canvas.width,
                y: -10,
                r: p.r,
                d: p.d,
                color: p.color,
                tilt: p.tilt,
                tiltAngleIncremental: p.tiltAngleIncremental,
                tiltAngle: p.tiltAngle
            };
        }
    }

    requestAnimationFrame(drawConfetti);
}

drawConfetti();
