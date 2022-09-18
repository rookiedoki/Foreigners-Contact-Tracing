window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 180) {
        document.getElementById("navba").style.backgroundColor = "#212020";
        document.getElementById("navbar").style.display = "none";
    }
    else {
        document.getElementById("navba").style.backgroundColor = "#212020";
        document.getElementById("navbar").style.display = "block";
    }
}