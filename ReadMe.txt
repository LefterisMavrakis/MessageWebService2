This is simple form project with laravel and vue.js

LOCAL INSTALLATION

1: Downoload laragon https://laragon.org/download/
2: Clone or download project
3: Add files to C:\laragon\www or wherever is www directory of laragon
4: Run laragon and click Start All button
5: Accept laragon's request to create virtual host for the project
6: Create a database named messages_db from laragon
    To do this just:
    a) click Database button on laragon's window
    b) on the database window double click Laragon
    c) When it opens right click Laragon -> create new -> database
7: run 'php artisan migrate' command from the route directory of the project
   if you named your db with a name of your choice update .env file
8: Right click on laragon's main window -> www -> and the name of the project.
9: You are done. Laragon should open the project in the browser
