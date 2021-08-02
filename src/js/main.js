const toggleMenu = () => {
	const menu = document.querySelector('nav.main')
	if(menu.classList.contains('open')) {
		menu.classList.remove('open')
	}

	else {
		menu.classList.add('open')
	}
}

const toggleModal = () => {
	const modal = document.querySelector('#modal')
	if(modal.classList.contains('open')) {
		modal.classList.remove('open')
	}

	else {
		modal.classList.add('open')
	}
}

const togglePopup = () => {
	const popup = document.querySelector('#popup')
	if(popup.classList.contains('open')) {
		popup.classList.remove('open')
	}

	else {
		popup.classList.add('open')
	}
}

const toggleBooking = () => {
	const sidebar = document.querySelector('#booking')
	if(sidebar.classList.contains('open')) {
		sidebar.classList.remove('open')
	}

	else {
		sidebar.classList.add('open')
	}
}