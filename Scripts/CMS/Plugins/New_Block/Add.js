(function () {

    Add_window_ajax();

    $('.main-window-case').bind('click', function() {
        Add_case();
    })

    //const plugin = document.querySelector(".plugin");
    //alert(plugin);
})();

function Add_window_ajax() {
    $.ajax ({
        url: "../../Scripts/CMS/Plugins/New_Block/New_block.php",
        type: "POST",
        data: { add: true }, 
        success: function(result) {
            print_window_add(result);
        }
    });
}

function Add_case() {
    let window_add = document.querySelector('.main-window-case');        

    var div = document.createElement('div');
    div.className = 'main-case';
    div.innerHTML = "+";
    window_add.append(div);
}

function print_window_add(result) {
    let window_add = document.querySelector('.main-block-content');        

    var div = document.createElement('div');
    div.className = 'main-window-add plugin';
    div.innerHTML = result;
    window_add.append(div);
}