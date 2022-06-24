function setup() {
		var width = 600; 
		// var width = $("#grafico").width();
		var grafheight = width + width / 5;
		var height = width;
		var diameter = 0.66 * width;
		var radius = diameter / 2;
		var maxStroke = width / 60;
		var minStroke = width / 300;
		var npoints = 7;
		var title = "";
		try {
			title = document.getElementById("graf_title").value;
		}
		catch(err) {

		}
		if(title === "")
			title = 'Su evaluación y dominio\nsobre las competencias';

		var mapMax = 5.0;
		var mapMin = 0.0;

		var ia = document.getElementById('Ia').value;
		var iia = document.getElementById('IIa').value;
		var iiia = document.getElementById('IIIa').value;
		var iva = document.getElementById('IVa').value;
		var va = document.getElementById('Va').value;
		var via = document.getElementById('VIa').value;
		var viia = document.getElementById('VIIa').value;

		var ib = document.getElementById('Ib').value;
		var iib = document.getElementById('IIb').value;
		var iiib = document.getElementById('IIIb').value;
		var ivb = document.getElementById('IVb').value;
		var vb = document.getElementById('Vb').value;
		var vib = document.getElementById('VIb').value;
		var viib = document.getElementById('VIIb').value;

		var cnva = createCanvas(width, grafheight);
		cnva.parent('grafico');

		cnva.background(240);

		push();

		var fontsize = width / 20;
		textFont('Trebuchet MS');
		textSize(fontsize);
		textStyle(BOLD);
		textAlign(CENTER);
		text(title, width / 2, width / 10);

		fontsize = width / 25;	
		textSize(fontsize);
		// textStyle(NORMAL);
		// text(name, width / 2, width / 10 + fontsize);

		translate(width / 2, height / 2 + width / 12);

		textAlign(RIGHT);

		stroke(0);
		strokeWeight(minStroke);
		fill(220);
		ellipse(0, 0, diameter);

		stroke('#000');
		strokeWeight(minStroke);
		angleLimits(0, 0, diameter / 2 - diameter /1, npoints);

		stroke('#c78009');
		strokeWeight(maxStroke);
		fill(220);
		polygon(0, 0, diameter / 2 - diameter / 100, npoints, POINTS);

		habilidades = ["I", "II", "III", "IV", "V", "VI", "VII"];

		polLabel(0, 0, diameter / 2, npoints, habilidades, 0);


		ia = map(ia, mapMin, mapMax, 0, diameter / 2);

		iia = map(iia, mapMin, mapMax, 0, diameter / 2);

		iiia = map(iiia, mapMin, mapMax, 0, diameter / 2);

		iva = map(iva, mapMin, mapMax, 0, diameter / 2);

		va = map(va, mapMin, mapMax, 0, diameter / 2);

		via = map(via, mapMin, mapMax, 0, diameter / 2);

		viia = map(viia, mapMin, mapMax, 0, diameter / 2);

		ib = map(ib, mapMin, mapMax, 0, diameter / 2);

		iib = map(iib, mapMin, mapMax, 0, diameter / 2);

		iiib = map(iiib, mapMin, mapMax, 0, diameter / 2);

		ivb = map(ivb, mapMin, mapMax, 0, diameter / 2);

		vb = map(vb, mapMin, mapMax, 0, diameter / 2);

		vib = map(vib, mapMin, mapMax, 0, diameter / 2);

		viib = map(viib, mapMin, mapMax, 0, diameter / 2);

		fill(190, 21, 33, 60);
		stroke(190, 21, 33);
		strokeWeight(minStroke);
		habPolygon(0, 0, npoints, [ia, iia, iiia, iva, va, via, viia]);

		fill(33, 21, 190, 60);
		stroke(33, 21, 190);
		strokeWeight(minStroke);
		habPolygon(0, 0, npoints, [ib, iib, iiib, ivb, vb, vib, viib]);

		
		leg = ["I. Planificación reflexiva", "II. Gestión de las sesiones de entrenamientos y partidos", 
		"III. Enseñanza de la modalidad", "IV. Desarrollo de valores en los deportistas", 
		"V. Liderazgo, comunicación y empatía", "VI. Participación en la gestión del club y de la promoción de la modalidad", 
		"VII. Formación continuada"];

		translate(-width/2, -grafheight/2+20);
		
		noStroke();
		fill(0);
		var fontsize = width / 45;
		textSize(fontsize);
		textStyle(NORMAL);

		textAlign(LEFT);

		var i = 0; 
		var deltay = fontsize;
		var deltax = 50;
		var legy = -fontsize*leg.length-1.3*fontsize;
		var legx = fontsize;
		text(leg[i++], legx, grafheight+legy); legy += deltay;
		text(leg[i++], legx, grafheight+legy); legy += deltay;
		text(leg[i++], legx, grafheight+legy); legy += deltay;
		text(leg[i++], legx, grafheight+legy); legy += deltay;
		text(leg[i++], legx, grafheight+legy); legy += deltay;
		text(leg[i++], legx, grafheight+legy); legy += deltay;
		text(leg[i++], legx, grafheight+legy); legy += deltay;
		

		pop();

		noStroke();
		fill(0);
		var fontsize = width / 45;
		textSize(fontsize);
		textStyle(NORMAL);

		textAlign(LEFT);

		var i = 0; 
		var deltay = fontsize+15;
		var deltax = fontsize + 5;
		var legy = - deltay * 2;
		var legx = width - (4.8 * deltax);
		// if(windowWidth < 500)
		// {
		// 	var legx = width - (3.5 * deltax);
		// }
		// else
		// {
		// 	var legx = width - (4.5 * deltax);
		// }

		// alert(grafheight+"x"+width);
		// alert("("+legx+", "+legy + ")");

		text("Evaluación", legx, grafheight+legy); 
		fill(190, 21, 33, 60);
		stroke(190, 21, 33);
		strokeWeight(minStroke/2);
		rect(legx-deltax, grafheight+legy-fontsize+2, fontsize, fontsize); legy += deltay;
		
		noStroke();
		fill(0);
		text("Dominio", legx, grafheight+legy);
		fill(33, 21, 190, 60);
		stroke(33, 21, 190);
		strokeWeight(minStroke/2);
		rect(legx-deltax, grafheight+legy-fontsize+2, fontsize, fontsize); legy += deltay;
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
				tx += 15;
				ty += 8;
			} else if (a < HALF_PI) {
				textAlign(RIGHT);
				tx += 10;
				ty += 18;
			} else if (a == HALF_PI) {
				textAlign(CENTER);
				ty += 5;
			} else if (a > HALF_PI && a < PI) {
				textAlign(LEFT);
				tx -= 20;
				ty += 18;
			} else if (a == PI) {
				textAlign(LEFT);
			} else if (a > PI && a < 3 * HALF_PI) {
				textAlign(LEFT);
				tx -= 15;
				ty -= 10;
			} else if (a == 3 * HALF_PI) {
				textAlign(CENTER);
				ty -= 5;
			} else if (a > 3 * HALF_PI) {
				textAlign(RIGHT);
				tx += 25;
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