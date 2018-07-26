function setup() {
	var width = 600;
	var height = width;
	var diameter = (2 / 3) * width;
	var maxStroke = width / 60;
	var minStroke = width / 300;
	var npoints = 8;

	createCanvas(width, height);

	background(240);

	var fontsize = width / 20;
	textFont('Trebuchet MS');
	textSize(fontsize);
	textStyle(BOLD);
	textAlign(CENTER);
	text('Evaluación de Habilidades', width / 2, width / 10);

	fontsize = width / 25;
	textSize(fontsize);
	textStyle(NORMAL);
	text('Nombre de Usted Ahí', width / 2, width / 10 + fontsize);

	translate(width / 2, height / 2 + width / 20);


	textAlign(RIGHT);

	stroke(0);
	strokeWeight(minStroke);
	fill(220);
	ellipse(0, 0, diameter);

	stroke('#000');
	strokeWeight(minStroke);
	angleLimits(0, 0, diameter / 2 - diameter / 100, npoints);

	stroke('#c78009');
	strokeWeight(maxStroke);
	fill(220);
	polygon(0, 0, diameter / 2 - diameter / 100, npoints, POINTS);

	habilidades = ["I", "II", "III", "IV", "V", "VI", "VII", "VIII"]

	polLabel(0, 0, diameter / 2, npoints, habilidades, 0);

	var ata = 87;
	ata = map(ata, 0, 100, 0, diameter / 2);

	var def = 90;
	def = map(def, 0, 100, 0, diameter / 2);

	var dri = 60;
	dri = map(dri, 0, 100, 0, diameter / 2);

	var fin = 56;
	fin = map(fin, 0, 100, 0, diameter / 2);

	var chu = 75;
	chu = map(chu, 0, 100, 0, diameter / 2);

	var vel = 80;
	vel = map(vel, 0, 100, 0, diameter / 2);

	posHab = [ata, def, dri, fin, chu, vel, 90, 76];


	fill(190, 21, 33, 70);
	stroke(190, 21, 33);
	strokeWeight(minStroke);
	habPolygon(0, 0, npoints, posHab);
}

function polygon(x, y, radius, npoints, type) {
	var angle = TWO_PI / npoints;
	beginShape(type);
	for (var a = 0; a < TWO_PI; a += angle) {
		var sx = x + cos(a) * radius;
		var sy = y + sin(a) * radius;
		vertex(sx, sy);
	}
	endShape(CLOSE);
}

function angleLimits(x, y, radius, npoints) {
	var angle = TWO_PI / npoints;
	for (var a = 0; a < TWO_PI; a += angle) {
		var sx = x + cos(a) * radius;
		var sy = y + sin(a) * radius;
		line(sx, sy, 0, 0);
	}
}

function polLabel(x, y, radius, npoints, labels, color) {
	noStroke();
	fill(color);
	var fontsize = width / 30;
	textFont('Trebuchet MS');
	textSize(fontsize);
	textStyle(BOLD);
	var lbl = labels;
	var i = 0;
	var angle = TWO_PI / npoints;
	for (var a = 0; a < TWO_PI; a += angle) {
		var tx = x + cos(a) * radius;
		var ty = y + sin(a) * radius;

		text(lbl[i], tx, ty);
		i++;
	}
}


function habPolygon(x, y, npoints, points) {
	var angle = TWO_PI / npoints;
	var i = 0;
	beginShape();
	for (var a = 0; a < TWO_PI; a += angle) {
		var sx = x + cos(a) * points[i];
		var sy = y + sin(a) * points[i];
		vertex(sx, sy);
		i++;
	}
	endShape(CLOSE);
}
