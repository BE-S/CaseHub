(function () {       
    
    $(".main-button").bind("click", function() { 
       $.ajax ({
           url: "../../Scripts/php/PageDrop/random.php",
           type: "POST",
           success: function(id) {
               PrintDrop(id);
               /*GetDataDb().then(arr => {
                   //var mas = jQuery.parseJSON(arr);
                   console.log(arr);
               });*/
               CallWrite(id);
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

/*function CallWrite(id, arr) {
  $.ajax({
    url: "../../DataBase/WriteDB.php",
    type: 'POST',
    data: {id: id, arr: arr},
    success: function(html){
        alert(html);
   },
});
}

function CallDataDb(id) {
      $.ajax({
        url: "../../Data/Players.php",
        type: 'POST',
        data: {check: true},
    success: function(data) {
        var arr = jQuery.parseJSON( data );
        CallWrite(id, arr);
    },
});
}*/

function CallWrite(id) {
  $.ajax({
    url: "../../DataBase/WriteDB.php",
    type: 'POST',
    data: {id: id},
    success: function(arr){
        alert(arr);
   },
});
}

/*function CallDataDb(id) {
    return new Promise(resolve => {
      $.ajax({
        url: "../../Data/Players.php",
        type: 'POST',
        data: {check: true},
        success: resolve
      });
    });
}*/

function aa() {
    return new Promise(resolve => {
       $.ajax({
        url: "../../DataBase/Info.php",
        type: 'POST',
        data: {check_info: true},
        success: resolve
      }); 
    });
}

function bb() {
    return new Promise(resolve => {
      $.ajax({
        url: "../../DataBase/Info.php",
        type: 'POST',
        data: {check_info_db: true},
        success: resolve
      });
});
}

async function GetDataDb() {
    const a = await aa();
  return a;
}