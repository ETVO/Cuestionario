//var validaHTML = '<table><tr><th>Claridad <b>(1 - 5)</b></th></tr><tr><td><div class="opts"><div><b>1</b><br><input type="radio" name="brad" value="1" required><br>Confuso</div><div><b>2</b><br><input type="radio" name="brad" value="2"><br>Un poco confuso</div><div><b>3</b><br><input type="radio" name="brad" value="3"><br>Compreensible</div><div><b>4</b><br><input type="radio" name="brad" value="4"><br>Muy claro</div><div><b>5</b><br><input type="radio" name="brad" value="5"><br>Totalmente claro</div></div></td></tr></table><table><tr><th>Comentarios <b>(opcional)</b></th></tr><tr><td><textarea name="bcom" id="comentario" maxlength="280" placeholder="Feu clic o toqueu aquí per escriure text."></textarea></td></tr></table>';

$(function () {
	$("form").sisyphus();
});


//// classes para ajustes da disposição em celular (vertical e horizontal) e PC
//
//var content = document.getElementsByClassName('content');
//var select = document.getElementsByClassName('select');
//var short = document.getElementsByClassName('short');
//var value = document.getElementsByClassName('value');
//var opts = document.getElementsByClassName('opts');
//var valida = document.getElementsByClassName('valida');
//var item = document.getElementsByClassName('item');
//var leg_b = document.getElementsByClassName('leg_b');
//var half_grid = document.getElementsByClassName('half_grid');
//var consente = document.getElementsByClassName('consente');
//var aviso = document.getElementsByClassName('aviso');
//var imgInfo = document.getElementsByClassName('imgInfo');
//var avalia = document.getElementsByClassName('avalia');
//var ubLogo = document.getElementsByClassName('ubLogo');
//var dropdown = document.getElementsByClassName('dropdown');
//var dropdown_content = document.getElementsByClassName('dropdown_content');
//var show = document.getElementsByClassName('show');
//
//
//function isVerticalMobile() {
//	for (var i = 0; i < content.length; i++) {
//		content[i].style = '';
//	}
//	for (var i = 0; i < select.length; i++) {
//		select[i].style = 'width: 94%;';
//	}
//	for (var i = 0; i < short.length; i++) {
//		short[i].style = 'width: 90%;';
//	}
//	for (var i = 0; i < value.length; i++) {
//		value[i].style = 'width: 45%;';
//	}
//	for (var i = 0; i < opts.length; i++) {
//		opts[i].style = '';
//	}
//	for (var i = 0; i < item.length; i++) {
//		item[i].style = '';
//	}
//	for (var i = 0; i < valida.length; i++) {
//		valida[i].style = '';
//	}
//	for (var i = 0; i < leg_b.length; i++) {
//		leg_b[i].style = '';
//	}
//	for (var i = 0; i < half_grid.length; i++) {
//		half_grid[i].style = '';
//	}
//	for (var i = 0; i < aviso.length; i++) {
//		aviso[i].style = '';
//	}
//	for (var i = 0; i < imgInfo.length; i++) {
//		imgInfo[i].style = 'padding-show:0';
//	}
//	for (var i = 0; i < avalia.length; i++) {
//		avalia[i].style = '';
//	}
//	for (var i = 0; i < consente.length; i++) {
//		consente[i].style = 'width: 100%';
//	}
//	for (var i = 0; i < ubLogo.length; i++) {
//		ubLogo[i].style = 'width: 95%';
//	}
//	for (var i = 0; i < dropdown.length; i++) {
//		dropdown[i].style = 'display: inline-block;';
//	}
//	for (var i = 0; i < show.length; i++) {
//		show[i].style = 'display: none;';
//	}
//}
//
//function isHorizontalMobile() {
//	for (var i = 0; i < content.length; i++) {
//		content[i].style = '';
//	}
//	for (var i = 0; i < select.length; i++) {
//		select[i].style = '';
//	}
//	for (var i = 0; i < short.length; i++) {
//		short[i].style = '';
//	}
//	for (var i = 0; i < value.length; i++) {
//		value[i].style = '';
//	}
//	for (var i = 0; i < opts.length; i++) {
//		opts[i].style = 'grid-template-columns: 19% 19% 19% 19% 20%; grid-column-gap: 1%;';
//	}
//	for (var i = 0; i < item.length; i++) {
//		item[i].style = 'grid-template-columns: 49% 49%; grid-column-gap: 2%;';
//	}
//	for (var i = 0; i < valida.length; i++) {
//		valida[i].style = 'grid-template-columns: 73% 26%; grid-column-gap: 1%;';
//	}
//	for (var i = 0; i < leg_b.length; i++) {
//		leg_b[i].style = '';
//	}
//	for (var i = 0; i < consente.length; i++) {
//		consente[i].style = '';
//	}
//	for (var i = 0; i < half_grid.length; i++) {
//		half_grid[i].style = 'grid-template-columns: 49% 49%; grid-column-gap: 2%;';
//	}
//	for (var i = 0; i < aviso.length; i++) {
//		aviso[i].style = 'grid-template-columns: 7% 92%; grid-column-gap: 1%;';
//	}
//	for (var i = 0; i < imgInfo.length; i++) {
//		imgInfo[i].style = '';
//	}
//	for (var i = 0; i < avalia.length; i++) {
//		avalia[i].style = '';
//	}
//	for (var i = 0; i < ubLogo.length; i++) {
//		ubLogo[i].style = 'width: 90%';
//	}
//	for (var i = 0; i < dropdown.length; i++) {
//		dropdown[i].style = 'display: inline-block;';
//	}
//	for (var i = 0; i < show.length; i++) {
//		show[i].style = 'display: none;';
//	}
//}
//
//function notMobile() {
//	for (var i = 0; i < content.length; i++) {
//		content[i].style = 'width: 80%;';
//	}
//	for (var i = 0; i < select.length; i++) {
//		select[i].style = '';
//	}
//	for (var i = 0; i < short.length; i++) {
//		short[i].style = '';
//	}
//	for (var i = 0; i < value.length; i++) {
//		value[i].style = '';
//	}
//	for (var i = 0; i < opts.length; i++) {
//		opts[i].style = 'grid-template-columns: 1fr 1fr 1fr 1fr 1fr; grid-column-gap: 1%;';
//	}
//	for (var i = 0; i < item.length; i++) {
//		item[i].style = 'grid-template-columns: 49% 49%; grid-column-gap: 2%;';
//	}
//	for (var i = 0; i < valida.length; i++) {
//		valida[i].style = 'grid-template-columns: 73% 26%; grid-column-gap: 1%;';
//	}
//	for (var i = 0; i < leg_b.length; i++) {
//		leg_b[i].style = 'font-size: 16px;';
//	}
//	for (var i = 0; i < consente.length; i++) {
//		consente[i].style = '';
//	}
//	for (var i = 0; i < half_grid.length; i++) {
//		half_grid[i].style = 'grid-template-columns: 49% 49%; grid-column-gap: 2%;';
//	}
//	for (var i = 0; i < aviso.length; i++) {
//		aviso[i].style = 'grid-template-columns: 7% 92%; grid-column-gap: 1%;';
//	}
//	for (var i = 0; i < imgInfo.length; i++) {
//		imgInfo[i].style = '';
//	}
//	for (var i = 0; i < avalia.length; i++) {
//		avalia[i].style = '';
//	}
//	for (var i = 0; i < ubLogo.length; i++) {
//		ubLogo[i].style = 'width: 70%';
//	}
//	for (var i = 0; i < dropdown.length; i++) {
//		dropdown[i].style = '';
//	}
//	for (var i = 0; i < show.length; i++) {
//		show[i].style = '';
//	}
//}
//
//var adap = function adaptiveLayout() {
//
//	if (screen.height < screen.width) {
//		if (screen.width < 1200)
//			isHorizontalMobile();
//		else
//			notMobile();
//	} else {
//		isVerticalMobile();
//	}
//}
//
//window.onload = adap;
//
//window.onresize = adap;
//
//
function dropMenu() {
	for (var i = 0; i < dropdown_content.length; i++) {
		dropdown_content[i].classList.toggle("dropShow");
	}
}
window.onclick = function (event) {
	if (!event.target.matches('.dropdown_btn')) {

		var dropdowns = dropdown_content;
		for (var i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('dropShow')) {
				openDropdown.classList.remove('dropShow');
			}
		}
	}
}
