// Form validation function for the second form

   function validatea()
       {
      	var title = document.forms[1].a-title.value;
	var date = document.forms[1].a-dor.value;
         
if (( title == "" )|| (date == "" )){
         document.album.a-title.focus() ;
            alert( "Please fill up all the form fields!" );
                       
	return false;
         }
        
         
        
         return( true );
     	 }
