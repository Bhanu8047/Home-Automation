jQuery(function($) {
    $.urlParam = function(light){
        var url = new RegExp('[\?&]' + light + '=([^&#]*)').exec(window.location.href);
        if (url==null){
           return null;
        }
        else{
           return url[1] || 0;
        }
    }


	if($.urlParam('light1')=='on')
	{document.getElementById("bg1").classList.add("on");
	document.getElementById("bg1").classList.remove("off");
	light1="on";
	document.getElementById("l1").innerHTML=light1;
	}
	
	else if($.urlParam('light1')=='off')
	{document.getElementById("bg1").classList.remove("on");
	document.getElementById("bg1").classList.add("off");
	light1="off";
	document.getElementById("l1").innerHTML=light1;
	}
	
    else if($.urlParam('light2')=='on')
	{document.getElementById("bg2").classList.add("on");
	document.getElementById("bg2").classList.remove("off");
	light2="on";
	document.getElementById("l2").innerHTML=light2;
	}
	
	else if($.urlParam('light2')=='off')
	{document.getElementById("bg2").classList.remove("on");
	document.getElementById("bg2").classList.add("off");
	light2="off";
	document.getElementById("l2").innerHTML=light2;
	}
	
});


