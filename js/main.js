var isMobile = true;

var adap = function adaptiveLayout() {
	if (screen.height < screen.width) {
		isMobile = false;
	} else {
		isMobile = true;
	}

	var select = document.getElementsByClassName('select');
	var short = document.getElementsByClassName('short');
	var value = document.getElementsByClassName('value');
	var eval = document.getElementsByClassName('eval');

	// Mobile friendly code
	if (isMobile) {
		for (var i = 0; i < select.length; i++) {
			select[i].style = 'width: 94%;';
		}
		for (var i = 0; i < short.length; i++) {
			short[i].style = 'width: 90%;';
		}
		for (var i = 0; i < value.length; i++) {
			value[i].style = 'width: 45%;';
		}
		for (var i = 0; i < eval.length; i++) {
			eval[i].style = '';
		}
	} else {
		for (var i = 0; i < select.length; i++) {
			select[i].style = '';
		}
		for (var i = 0; i < short.length; i++) {
			short[i].style = '';
		}
		for (var i = 0; i < value.length; i++) {
			value[i].style = '';
		}
		for (var i = 0; i < eval.length; i++) {
			eval[i].style = 'grid-template-columns: 19% 19% 19% 19% 19%; grid-column-gap: 1%;';
		}
	}
}

//window.onload = adap;

//window.onresize = adap;
