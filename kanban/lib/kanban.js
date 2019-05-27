function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("Text", ev.target.id);
}

function drop(ev) {
	if(!ev.target.id.startsWith("div"))
		return;
	
    var data = ev.dataTransfer.getData("Text");
    ev.target.appendChild(document.getElementById(data));
    ev.preventDefault();
	
	document.getElementById("log").innerHTML = "El elemento " + data + " está ahora en el cuadro " + ev.target.id;
	
	//$("#drag2").attr("draggable", "");
}