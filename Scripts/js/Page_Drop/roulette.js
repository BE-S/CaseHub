(function () {       
    $(".main-button").bind("click", function() { 
       $.ajax ({
           url: "../../Scripts/php/PageDrop/random.php",
           type: "POST",
           success: function(id) {
               console.log(id);
               PrintDrop(id);
               /*GetDataDb().then(arr => {
                   //var mas = jQuery.parseJSON(arr);
                   console.log(arr);
               });*/
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