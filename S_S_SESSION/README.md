## $_SESSION

**An associative array** containing session variables available to the current script. 

This is a **'superglobal' variable**  (or automatic global variable).
This simply means that it is available in all scopes throughout a script. There is no need to do global $variable; to access it within functions or methods.

A session is started with the **session_start()** function.
The session_start() function must be the very first thing in your document. Before any HTML tags.

Session variables are set with the PHP global variable: **$_SESSION[" "]=....**

Session variables hold or store information about one single user, and are available to all pages in one application (e.g. username, favorite color, etc). 
By default, session variables last until the user closes the browser.

**Session variables are not passed individually** to each new page, instead they are retrieved from the session we open at the beginning of each page (session_start()).

To remove all global session variables and destroy the session, use **session_unset()** and **session_destroy()**.

##### SOURCES: PHP MANUAL & W3 SCHOOL
