const toggleMenu = () => {
	const menu = document.querySelector('nav.main')
	if(menu.classList.contains('open')) {
		menu.classList.remove('open')
	}

	else {
		menu.classList.add('open')
	}
}

const togglePopup = (popupID, auto) => {
	const popup = document.querySelector(`#${popupID}`)
	const lastUpdated = popup.querySelector('.last-updated time').dataset.date
	let prevView = window.localStorage.getItem('popupNotice')
	const trigger = () => {
		if(popup.classList.contains('open')) {
			popup.classList.remove('open')
		}
		else {
			popup.classList.add('open')
		}

		window.localStorage.setItem('popupNotice', JSON.stringify({
			seen: true,
			date: Date.parse(new Date()),
			lastUpdated: lastUpdated
		}))

		return
	}

	if(!auto) {
		console.log('Manually opened popup')
		trigger()
		return
	}

	if(!prevView) {
		console.log(`Haven't viewed the popup before`)
		trigger()
		return
	}
	
	prevView = JSON.parse(prevView)

	if(prevView?.lastUpdated < lastUpdated) {
		console.log(`Popup has changed`)
		trigger()
		return
	}

	return
	
}

window.onload = () => {
	togglePopup('popup', true)
}
