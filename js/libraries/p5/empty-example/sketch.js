function setup() {
	width = 350;
	height = 350;
	createCanvas(width, height);

	r = 300;
	rad = HALF_PI / 2;
	ang = degrees(rad);
	rad *= -1;
	ang *= -1;

	angleMode(RADIANS);

	translate(width / 2, height / 2);
	stroke(0);

	strokeWeight(3);
	ellipse(0, 0, r, r);

	strokeWeight(1);
	line(-width / 2, 0, width / 2, 0);
	line(0, -height / 2, 0, height / 2);
}

function draw() {
	translate(width / 2, height / 2);

	noFill();
	strokeWeight(4);
	stroke(255, 0, 0);
	arc(0, 0, r, r, rad, 0);

	noFill();
	strokeWeight(2);
	stroke(100, 200, 200);



	xi = Math.cos(rad);
	yi = Math.sin(rad);
	xr = map(xi, -1, 1, -r / 2, r / 2);
	yr = map(yi, -1, 1, -r / 2, r / 2);

	strokeWeight(2);
	dashedLine(0, 0, xr, yr, 5, 5);

	strokeWeight(10);
	stroke(151);
	point(xr, yr);
	strokeWeight(5);
	stroke(200);
	point(xr, yr);

	fill(0);
	strokeWeight(0.25);
	stroke(0);
	textSize(15);
	ang = roundUp(ang, 2);
	if (ang > -90)
		text(-ang + '°', -30, -10);
	else
		text(-ang + '°', 10, -10);
}

function dashedLine(x1, y1, x2, y2, l, g) {
	var pc = dist(x1, y1, x2, y2) / 100;
	var pcCount = 1;
	var lPercent = gPercent = 0;
	var currentPos = 0;
	var xx1 = yy1 = xx2 = yy2 = 0;

	while (int(pcCount * pc) < l) {
		pcCount++
	}
	lPercent = pcCount;
	pcCount = 1;
	while (int(pcCount * pc) < g) {
		pcCount++
	}
	gPercent = pcCount;

	lPercent = lPercent / 100;
	gPercent = gPercent / 100;
	while (currentPos < 1) {
		xx1 = lerp(x1, x2, currentPos);
		yy1 = lerp(y1, y2, currentPos);
		xx2 = lerp(x1, x2, currentPos + lPercent);
		yy2 = lerp(y1, y2, currentPos + lPercent);
		if (x1 > x2) {
			if (xx2 < x2) {
				xx2 = x2;
			}
		}
		if (x1 < x2) {
			if (xx2 > x2) {
				xx2 = x2;
			}
		}
		if (y1 > y2) {
			if (yy2 < y2) {
				yy2 = y2;
			}
		}
		if (y1 < y2) {
			if (yy2 > y2) {
				yy2 = y2;
			}
		}

		line(xx1, yy1, xx2, yy2);
		currentPos = currentPos + lPercent + gPercent;
	}
}

function roundUp(num, precision) {
	precision = Math.pow(10, precision)
	return Math.ceil(num * precision) / precision
}
