(function () {     
    $(".main-button").bind("click", function() { 
       $.ajax ({
           url: "../../Scripts/Drop_skins/random.php",
           type: "POST",
           success: function(id) {
               console.log(id);
               PrintDrop(id);
           }
       });
    });
}());

function PrintDrop(id) {
    let case_drop_icons = document.querySelector('.case-drop-icons');        
    
    if (!document.querySelector('.alert')) {
        var div = document.createElement('div');
        div.className = 'alert'
    } else {
        var div = document.querySelector('.alert');
        div.innerHTML = "";
    }
    
    if (id == 1) {
        div.innerHTML = "<strong>Выпало синие</strong>"
    } else if (id == 2) {
        div.innerHTML = "<strong>Выпало фиолетовое</strong>"
    } else if (id == 3) {
        div.innerHTML = "<strong>Выпало красное</strong>"
    } else if (id == 4) {
        div.innerHTML = "<strong>Выпало золотое</strong>"
    }
	
	case_drop_icons.append(div);
	Choise();
}

/*_____________________CHOISE_____________________*/

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