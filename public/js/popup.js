var linkAbrirPopup = document.getElementById('registrar'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

linkAbrirPopup.addEventListener('click',function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click',function(){
	overlay.classList.remove('active');
	popup.classList.remove('active');
});