let cols, rows;
let scl = 20;
let w = null;
let h = null;
let cnv
let flying = 0;
let terrain = [];


function centerCanvas() {
  var x = (windowWidth - width) / 2;
  var y = (windowHeight - height) / 2;
  cnv.position(x, y);
}

function windowResized() {
  centerCanvas();
}


function setup() {
  cnv = createCanvas(windowWidth, windowHeight, WEBGL);
  //canvas.parent('sketch-holder');
  //cnv.position(0,0);
  centerCanvas();
  w = windowWidth - 10;
  h = windowHeight - 10;
  cols = w / scl;
  rows = h / scl;
  //terrain = new float[cols][rows];
  for (let i = 0; i < cols; i++) {
    terrain[i] = [];
    for (let j = 0; j < rows; j++) {
      terrain[i][j] = 0.0;
    }
  }
}


function draw() {

  flying -= 0.05; 

  let yoff = flying;
  for (let y = 0; y < rows; y++) {
    let xoff = 0;
    for (let x = 0; x < cols; x++) {
      terrain[x][y] = map(noise(xoff, yoff), 0, 1, -100, 100);
      xoff += 0.2;
    }
    yoff += 0.2;
  }

  background(0);
  stroke(255);
  noFill();

  //translate(width/2, height/2+50);
  rotateX(PI / 3);
  frameRate(30);
  translate(-w / 2, -h / 2);

  for (let y = 0; y < rows - 1; y++) {
    beginShape(TRIANGLE_STRIP);
    for (let x = 0; x < cols; x++) {
      vertex(x * scl, y * scl, terrain[x][y]);
      vertex(x * scl, (y + 1) * scl, terrain[x][y + 1]);
    }
    endShape();
  }
}