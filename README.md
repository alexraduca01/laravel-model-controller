# Laravel model controller
## Descrizione 

Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel. <br>
1 - Create un nuovo progetto Laravel 9 (dal template). <br>
2 - se  lo avete già va benissimo il nostro shop_db se no tramite phpMyAdmin create un nuovo database laravel_model_controller. <br>
3 - solo se non avete già il db  Importate nel vostro database la tabella movies in allegato. <br>
4 - inserite le vostre credenziali per il database nel file .env. <br>
5 - Create un model Movie.
es. php artisan make:model Movie.  <br>
6 - Create la rotta e un controller che gestirà la rotta / (home) e uno per i libri
es. php artisan make:controller  PageController. <br>
7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card. <br>
8. Stilare il layout nei dettagli con Sass.
