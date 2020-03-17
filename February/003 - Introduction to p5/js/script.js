function setup() {
  createCanvas(800, 600);
  background(255,255,51);
}


function draw() {
  if (mouseIsPressed) {
  	let m = color('magenta');
    fill(m);
  } else {
  	let c = color('hsl(160, 100%, 50%)');
    fill(c);
  }
  ellipse(mouseX, mouseY, 80, 80);
}