(function () {     
    $(".Exit").bind("click", function() { 
        $.ajax ({
            url: "../../Scripts/CMS/Admin_panel.php",
            type: "POST",
            data: { exit: true }, 
            success: function() {
                const admin_panel = document.querySelectorAll(".admin-panel");
                admin_panel.forEach(elem => elem.remove());
            }
        });
    });
}());
