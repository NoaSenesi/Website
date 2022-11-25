const bd = document.querySelector(".birthday");

if (bd) {
    bd.addEventListener("click", () => {
        var colors = ["#FF0000", "#FF7F00", "#FFFF00", "#00FF00", "#0000FF", "#4B0082", "#9400D3"];

        var balloon = document.createElement("div");
        balloon.classList.add("balloon");
        balloon.style.setProperty("--color", colors[Math.floor(Math.random() * colors.length)]);
        balloon.style.left = "calc(" + Math.floor(Math.random() * 100) + "% - 50px)";

        let svg = "<svg width=\"100\" height=\"300\">";
        svg += "<path d=\"M 50,130 50,295\" stroke=\"#cfcfcf\" style=\"stroke-width:5px;\"/>";
        svg += "<circle class=\"colored\" cx=\"50\" cy=\"50\" r=\"50\"/>";
        svg += "<path class=\"colored\" d=\"M 10,80 50,130 90,80\"/>";
        svg += "<path class=\"colored\" d=\"M 35,130 35,135 65,135 65,130 50,100\"/>";
        svg += "<circle cx=\"30\" cy=\"30\" r=\"10\" fill=\"white\"/>";
        svg += "</svg>";

        balloon.innerHTML = svg;

        document.body.appendChild(balloon);

        let interval = setInterval(() => {
            if (balloon.offsetTop < -300) {
                balloon.remove();
                clearInterval(interval);
            }
        });
    });
}