window.onload = function() {

	renderBulbBottom();
	renderBulb();

}

function renderBulbBottom() {
	var canvas = document.getElementById("bulbCanvas");
	var context = canvas.getContext("2d");
	
	// var radius = Math.floor(Math.random() * 40);
	// var x = Math.floor(Math.random() * canvas.width);
	// var y = Math.floor(Math.random() * canvas.height);

	// context.beginPath();
	// context.arc(x, y, radius, 0, degreesToRadians(360), true);

	// context.fillStyle = "lightblue";
	// context.fill();

	//---------Top-----------
	context.beginPath();

	context.moveTo(180, 40);
	context.lineTo(120, 40);

	context.arcTo(120, 20, 140, 20, 20);
	context.lineTo(160, 20);
	context.arcTo(180, 20, 180, 40, 20);
	
	// context.fillStyle = "lightblue";
	// context.fill();

	//--------Middle----------

	context.moveTo(195, 50);
	context.lineTo(105, 50);
	context.arcTo(100, 50, 100, 65, 5);
	context.lineTo(100, 65);
	context.arcTo(100, 70, 105, 70, 5);
	context.lineTo(195, 70);
	context.arcTo(200, 70, 200, 65, 5);
	context.lineTo(200, 55);
	context.arcTo(200, 50, 195, 50, 5);

	//--------Lower Middle----------

	context.moveTo(195, 80);
	context.lineTo(105, 80);
	context.arcTo(100, 80, 100, 95, 5);
	context.lineTo(100, 95);
	context.arcTo(100, 100, 105, 100, 5);
	context.lineTo(195, 100);
	context.arcTo(200, 100, 200, 95, 5);
	context.lineTo(200, 85);
	context.arcTo(200, 80, 195, 80, 5);
	context.stroke();
	context.fill();
}

function renderBulb() {
	var canvas = document.getElementById("bulbCanvas");
	var context = canvas.getContext("2d");

	//--------Bulb----------

	context.beginPath();
	context.moveTo(270, 250);
	context.arc(150, 250, 120, 0, 2*Math.PI , true);
	
	//--------Bottom of Bulb----------

	context.moveTo(200, 140);
	context.arcTo(195, 140, 195, 135, 5);
	context.lineTo(195, 110);
	context.lineTo(105, 110);
	context.lineTo(105, 135);
	context.arcTo(105, 140, 100, 140, 5);
	context.fillStyle = "grey";
	context.fill();
}