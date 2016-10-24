// Form validation code for the first form
      function validate()
      {
        
         if (( document.artist.f-name.value == "" )|| ( document.artist.l-name.value == "" )||( document.artist.date.value == "" )){
         
            alert( "Please fill up all the form fields!" );
            document.artist.f-name.focus() ; 
            return false;
         }
        
         
        
         return( true );
     	 }



