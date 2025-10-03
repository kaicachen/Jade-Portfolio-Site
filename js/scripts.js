function onClick(element) {
    const targetUrl = element.getAttribute("data-url");
    
    if (targetUrl) {
        window.location.href = targetUrl;
    } else {
        console.warn("No data-url attribute found on the clicked element.");
    }
}