var i = 0;
var name = "Noa Senesi";
var typing = document.querySelector(".typing");

setTimeout(() => {
	var interval = setInterval(() => {

		typing.innerHTML = (i == 0 ? "" : typing.innerHTML) + name[i++];

		if (i >= name.length) {
			clearInterval(interval);

			setTimeout(() => {
				typing.className = null;
			}, 3000);
		}
	}, 200);
}, 1500);