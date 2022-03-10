function Choise() {
	if (document.querySelector('.main-buttons')) {
		let buttons = document.querySelector('.main-buttons');
		
		if (!document.querySelector('.main-button.sell')) {
			let div = document.createElement('a');
			div.className = 'main-button sell';
			div.innerHTML = "Продать за:";
			buttons.append(div);
		}
		if (!document.querySelector('.main-button.upgrade')) {
			let div = document.createElement('a');
			div.className = 'main-button upgrade';
			div.innerHTML = "Апгрейд";
			buttons.append(div);
		} 
		if (!document.querySelector('.main-button.contract')) {
			let div = document.createElement('a');
			div.className = 'main-button contract';
			div.innerHTML = "В контракт";
			buttons.append(div);
		}
		if (document.querySelector('.main-button.open-case')) {
			let div = document.querySelector('.main-button.open-case');
			div.innerHTML = "Прокрутить";
		}
	} 
}