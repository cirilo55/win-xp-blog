// cria o efeito de lasto;
document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("post-background");

    document.addEventListener("mousemove", function (event) {
        const trail = document.createElement("div");
        trail.classList.add("trail");
        trail.style.left = event.pageX + "px";
        trail.style.top = event.pageY + "px";
        container.appendChild(trail);

        // Remove o rastro após um curto período de tempo
        setTimeout(() => {
            container.removeChild(trail);
        }, 500);
    });
});