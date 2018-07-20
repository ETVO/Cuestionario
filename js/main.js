var isMobile = true;

//var validaHTML = '<table><tr><th>Claridad <b>(1 - 5)</b></th></tr><tr><td><div class="opts"><div><b>1</b><br><input type="radio" name="brad" value="1" required><br>Confuso</div><div><b>2</b><br><input type="radio" name="brad" value="2"><br>Un poco confuso</div><div><b>3</b><br><input type="radio" name="brad" value="3"><br>Compreensible</div><div><b>4</b><br><input type="radio" name="brad" value="4"><br>Muy claro</div><div><b>5</b><br><input type="radio" name="brad" value="5"><br>Totalmente claro</div></div></td></tr></table><table><tr><th>Comentarios <b>(opcional)</b></th></tr><tr><td><textarea name="bcom" id="comentario" maxlength="280" placeholder="Feu clic o toqueu aquí per escriure text."></textarea></td></tr></table>';


var adap = function adaptiveLayout() {
	if (screen.height < screen.width) {
		isMobile = false;
	} else {
		isMobile = true;
	}


	var select = document.getElementsByClassName('select');
	var short = document.getElementsByClassName('short');
	var value = document.getElementsByClassName('value');
	var opts = document.getElementsByClassName('opts');
	var valida = document.getElementsByClassName('valida');
	var item = document.getElementsByClassName('item');
	var leg_b = document.getElementsByClassName('leg_b');
	var half_grid = document.getElementsByClassName('half_grid');
	var consentimiento = document.getElementById('consentimiento');
	var aviso = document.getElementsByClassName('aviso');
	var avalia = document.getElementsByClassName('avalia');

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
		for (var i = 0; i < opts.length; i++) {
			opts[i].style = '';
		}
		for (var i = 0; i < item.length; i++) {
			item[i].style = '';
		}
		for (var i = 0; i < valida.length; i++) {
			valida[i].style = '';
		}
		for (var i = 0; i < leg_b.length; i++) {
			leg_b[i].style = '';
		}
		for (var i = 0; i < half_grid.length; i++) {
			half_grid[i].style = '';
		}
		consentimiento.style = 'width: 100%;';
		for (var i = 0; i < aviso.length; i++) {
			aviso[i].style = '';
		}
		for (var i = 0; i < avalia.length; i++) {
			avalia[i].style = '';
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
		for (var i = 0; i < opts.length; i++) {
			opts[i].style = 'grid-template-columns: 19% 19% 19% 19% 20%; grid-column-gap: 1%;';
		}
		for (var i = 0; i < item.length; i++) {
			item[i].style = 'grid-template-columns: 49% 49%; grid-column-gap: 2%;';
		}
		for (var i = 0; i < valida.length; i++) {
			valida[i].style = 'grid-template-columns: 73% 26%; grid-column-gap: 1%;';
		}
		for (var i = 0; i < leg_b.length; i++) {
			leg_b[i].style = 'font-size: 16px;';
		}
		consentimiento.style = '';
		for (var i = 0; i < half_grid.length; i++) {
			half_grid[i].style = 'grid-template-columns: 49% 49%; grid-column-gap: 2%;';
		}
		for (var i = 0; i < aviso.length; i++) {
			aviso[i].style = 'grid-template-columns: 5% 93%; grid-column-gap: 2%;';
		}
		for (var i = 0; i < avalia.length; i++) {
			avalia[i].style = 'font-size: 12px;';
		}
	}
}

window.onload = adap;

window.onresize = adap;
