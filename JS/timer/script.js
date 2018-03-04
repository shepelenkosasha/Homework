window.onload = function () {
  	var min = 0;
	var sec = 0; 
	var msec = 0; 
	var milisec = document.getElementById("ms")
	var seconds = document.getElementById("s")
	var minutes = document.getElementById("m")
	var Start = document.getElementById("btn_start");
	var Stop = document.getElementById("btn_stop");
	var Reset = document.getElementById("btn_reset");
	var Interval ;

	Start.onclick = function() {
		clearInterval(Interval);
		Interval = setInterval(startTimer, 10);
	} 
	Stop.onclick = function() {
		clearInterval(Interval);
	}		  
	Reset.onclick = function() {
		clearInterval(Interval);
		msec = "00";
		sec = "00";
		min = "00";
		milisec.innerHTML = msec;
		seconds.innerHTML = sec;
		minutes.innerHTML = min;
	}	
	function startTimer () {
		msec++;
		
 	    
		if(msec < 9){
			milisec.innerHTML = "0" + msec;
		}

		if (msec > 9){
    		milisec.innerHTML = msec;
   	 	}

		if (msec > 99) {
			sec++;
			document.getElementById("arrow").style.transform =  sec + 'rotate(6deg)';
			seconds.innerHTML = "0" + sec;
			msec = 0;
			milisec.innerHTML = "0" + 0;
		}
				
		if (sec > 9){
    		seconds.innerHTML = sec;
   	 	}   

		if (sec > 59) {
			min++;
			minutes.innerHTML = "0" + min;
			sec = 0;
			seconds.innerHTML = "0" + 0;
		}

		if (min > 9){
    		minutes.innerHTML = min;
   	 	}
	}
}