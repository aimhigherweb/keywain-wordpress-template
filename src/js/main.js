const toggleMenu = () => {
	const menu = document.querySelector('nav.main')
	if(menu.classList.contains('open')) {
		menu.classList.remove('open')
	}

	else {
		menu.classList.add('open')
	}
}

const togglePopup = (popupID) => {
	const popup = document.querySelector(`#${popupID}`)
	if(popup.classList.contains('open')) {
		popup.classList.remove('open')
	}
	else {
		popup.classList.add('open')
	}
}