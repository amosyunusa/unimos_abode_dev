 function validates()
      {
        
         if (( document.song.s-name.value == "" )|| ( document.song.songtype.value == "" )){
         
            alert( "Please fill up all the form fields!" );
            document.song.s-name.focus() ; 
            return false;
         }
        
         
        
         return( true );
     	 }

