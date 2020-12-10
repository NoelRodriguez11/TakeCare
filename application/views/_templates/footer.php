<!-- Footer -->
<footer style="background-color: #e7e7e7; color:black;z-index:4;position:relative; width: 100%;">

<div class="container">


        <div class="text-center center-block">
        <br>
            <p>- TakeCare 2020 -</p>
            <br/>
            <a href="<?=base_url()?>home/avisoLegal" style="float: right;padding-top: 20px; float: left; ">Aviso Legal</a>
    		<a href="<?=base_url()?>home/quienesSomos" style="float: right;padding-top: 10px;float: left ">Quienes Somos</a>
           	
                <a href="https://www.facebook.com/profile.php?id=100057232210381"><i id="social-fb" class="fa fa-facebook fa-3x social"></i></a>
	            <a href="https://twitter.com/TakeCareTFG"><i id="social-tw" class="fa fa-twitter fa-3x social"></i></a>
	            <a href="https://www.instagram.com/bootsnipp"><i id="social-ig" class="fa fa-instagram fa-3x social"></i></a>
	            <a href="mailto:takecaretfg@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>

<br>

<br />
		<div id="barraaceptacion" style="background-color: #5E5E5E; color:white; padding: 8px;">
		Esta web utiliza cookies propias para mejorar la experiencia de usuario.
		<a href="javascript:void(0);" class="ok" onclick="acceptCookies1();"><button id="aceptar">Aceptar</button></a>
		</div>
		<script>
    function getCookie(c_name){
        
        var c_value = document.cookie;
        var c_start = c_value.indexOf(" " + c_name + "=");

        if (c_start == -1){
            c_start = c_value.indexOf(c_name + "=");
        }

        if (c_start == -1){
            c_value = null;

        } else {
            
            c_start = c_value.indexOf("=", c_start) + 1;
            var c_end = c_value.indexOf(";", c_start);

            if (c_end == -1){
                c_end = c_value.length;
        	}
            c_value = unescape(c_value.substring(c_start,c_end));
        }
        return c_value;
    }

    function setCookie(c_name,value,exdays) {
        
        var exdate=new Date();
        exdate.setDate(exdate.getDate() + exdays);
        
        var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
        document.cookie=c_name + "=" + c_value;
    }

    function acceptCookies1() {
        
    	        setCookie('cookieInfo','true', 365);
    	        document.getElementById('barraaceptacion').style.display='none';
    	    }
    
	if (getCookie('cookieInfo')){
		
    	        document.getElementById('barraaceptacion').style.display='none';
    	    }

</script>
		
	

	</div>
	</div>

</footer>
