$(document).ready(function(){

function ImageSwitcher(choices, i) {
	i = 0;
	
	this.Next = function() {
		hide_current_image();
		show_next_image();
	}
	
	var hide_current_image = function() {
		if(choices){
			choices[i].style.visibility = "hidden";
			i += 1;
		}
	}
	var show_next_image = function() {
		if(choices){
			if(i == (choices.length)) {
				i = 0;
			}
			choices[i].style.visibility = "visible";
		}
	}
}
  
    var fur = $(".fur");
	var eyes = $(".eyes");
	var mouth = $(".mouth");
	var acc = $(".acc")

	var furpicker = new ImageSwitcher(fur);
	document.getElementById("nextfur").onclick = function() { furpicker.Next(); };
	
	var eyespicker = new ImageSwitcher(eyes);
	document.getElementById("nexteyes").onclick = function() {eyespicker.Next(); };
	
	var mouthpicker = new ImageSwitcher(mouth);
	document.getElementById("nextmouth").onclick = function() {mouthpicker.Next(); };
	
	var accpicker = new ImageSwitcher(acc);
	document.getElementById("nextacc").onclick = function() {accpicker.Next(); };

});

  $("#nextfur").click(function(){
  $("#shirt-menu").css("visibility", "visible"); });