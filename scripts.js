function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
    const targetUrl = element.getAttribute("data-url");
    
    if (targetUrl) {
        window.location.href = targetUrl;
    } else {
        console.warn("No data-url attribute found on the clicked element.");
    }
}

function toggleSubmenu() {
    var submenu = document.getElementById("portfolioSubmenu");
    submenu.style.display = (submenu.style.display === "block") ? "none" : "block";
  }