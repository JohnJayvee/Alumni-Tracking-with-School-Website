<!-- Script By Jayvee! -->
<script LANGUAGE="javascript">

   

function click() {

if (event.button==2) {

    alert('Sorry, This Functionality Has Been Disabled!');


}

}

document.onmousedown=click



jQuery(document).ready(function($){
    $(document).keydown(function(event) { 
        var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();

        
        if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u")) {
            alert('Sorry, This Functionality Has Been Disabled!'); 
            //disable key press porcessing  
            return false; 
        }

        if (event.ctrlKey && (pressedKey == "i") ) {
            alert('Sorry, This Functionality Has Been Disabled!'); 
            //disable key press porcessing
            return false; 
        }

        if (event.shiftKey && (pressedKey == "i") ) {
            alert('Sorry, This Functionality Has Been Disabled!'); 
            //disable key press porcessing
            return false; 
        }

        if (event.shiftKey && (pressedKey == "j") ) {
            alert('Sorry, This Functionality Has Been Disabled!'); 
            //disable key press porcessing
            return false; 
        }

        if (event.ctrlKey && (pressedKey == "s") ) {
            alert('Sorry, This Functionality Has Been Disabled!'); 
            //disable key press porcessing
            return false; 
        }
        
        
                if (event.keyCode == "123") {
            alert('Sorry, This Functionality Has Been Disabled!'); 
            //disable key press porcessing
            return false; 
        }
        
        


    });
});



</script>