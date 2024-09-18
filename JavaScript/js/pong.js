

 // Show cords on screen inside <p>
function myFunction(e) {
    let x = e.clientX;
    let y = e.clientY;
    let coor = "Coordinates: (" + x + "," + y + ")";
    document.getElementById("Cords").innerHTML = coor;
}

 // Remove cords on screen if outside <p>
function clearCoor() {
    document.getElementById("Player1").innerHTML = "";
}


 const ball = document.getElementById('Ball');
 const players = [document.querySelector('.Player1'), document.querySelector('.Player2')];
 const gameArea = document.querySelector('.GameArea'); // Get the GameArea element
 let ballPosition = { x: 752.5, y: 345 };
 let velocity = { x: 2, y: 2 };

 function moveBall() {
     ballPosition.x += velocity.x;
     ballPosition.y += velocity.y;

     const rect = gameArea.getBoundingClientRect(); // Get GameArea boundaries

     // Check for collisions with the GameArea boundaries
     if (ballPosition.x <= rect.left || ballPosition.x + 50 >= rect.right) {
         velocity.x *= -1;
     }
     if (ballPosition.y <= rect.top || ballPosition.y + 50 >= rect.bottom) {
         velocity.y *= -1;
     }

     // Check for collisions with players
     players.forEach(player => {
         const playerRect = player.getBoundingClientRect();
         if (ballPosition.x < playerRect.right && ballPosition.x + 50 > playerRect.left &&
             ballPosition.y < playerRect.bottom && ballPosition.y + 50 > playerRect.top) {
             // Collision detected
             if (Math.abs(velocity.x) > Math.abs(velocity.y)) {
                 velocity.x *= -1; // Reverse x direction
             } else {
                 velocity.y *= -1; // Reverse y direction
             }
         }
     });

     ball.style.left = `${ballPosition.x}px`;
     ball.style.top = `${ballPosition.y}px`;
 }

 setInterval(moveBall, 20);







