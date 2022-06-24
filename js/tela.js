	function setup() {
		var width = 600;
		var height = width;
		var diameter = 0.66 * width;
		var radius = diameter / 2;
		var maxStroke = width / 60;
		var minStroke = width / 300;
		var npoints = 7;
		var title = document.getElementById('title').value;
		var name = document.getElementById('name').value;

		var mapMax = 5.0;
		var mapMin = 1.0;

		var i = document.getElementById('I').value;
		var ii = document.getElementById('II').value;
		var iii = document.getElementById('III').value;
		var iv = document.getElementById('IV').value;
		var v = document.getElementById('V').value;
		var vi = document.getElementById('V').value;
		var vii = document.getElementById('VII').value;

		var cnv = createCanvas(width, height);
		cnv.parent('tela');

		background(240);

		var fontsize = width / 20;
		textFont('Trebuchet MS');
		textSize(fontsize);
		textStyle(BOLD);
		textAlign(CENTER);
		text(title, width / 2, width / 10);

		fontsize = width / 25;
		textSize(fontsize);
		textStyle(NORMAL);
		text(name, width / 2, width / 10 + fontsize);

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

		habilidades = ["I", "II", "III", "IV", "V", "VI", "VII"]

		polLabel(0, 0, diameter / 2, npoints, habilidades, 0);


		i = map(i, mapMin, mapMax, 0, diameter / 2);

		ii = map(ii, mapMin, mapMax, 0, diameter / 2);

		iii = map(iii, mapMin, mapMax, 0, diameter / 2);

		iv = map(iv, mapMin, mapMax, 0, diameter / 2);

		v = map(v, mapMin, mapMax, 0, diameter / 2);

		vi = map(vi, mapMin, mapMax, 0, diameter / 2);

		vii = map(vii, mapMin, mapMax, 0, diameter / 2);

		fill(190, 21, 33, 70);
		stroke(190, 21, 33);
		strokeWeight(minStroke);
		habPolygon(0, 0, npoints, [i, ii, iii, iv, v, vi, vii]);

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

			if (a == 0) {
				textAlign(RIGHT);
				tx += 20;
			} else if (a < HALF_PI) {
				textAlign(RIGHT);
				tx += 10;
				ty += 18;
			} else if (a == HALF_PI) {
				textAlign(CENTER);
				ty += 5;
			} else if (a > HALF_PI && a < PI) {
				textAlign(LEFT);
				tx -= 15;
				ty += 18;
			} else if (a == PI) {
				textAlign(LEFT);
			} else if (a > PI && a < 3 * HALF_PI) {
				textAlign(LEFT);
				tx -= 10;
				ty -= 13;
			} else if (a == 3 * HALF_PI) {
				textAlign(CENTER);
				ty -= 5;
			} else if (a > 3 * HALF_PI) {
				textAlign(RIGHT);
				tx += 15;
				ty -= 5;
			} else
				textAlign(CENTER);

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
