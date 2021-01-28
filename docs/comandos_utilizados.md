laravel new j-livewire-8 --jet

Seleccionamos 0 para livewire

- INSTALAMOS LIVEWIRE
composer require laravel/jetstream
php artisan jetstream:install livewire

Creando modelo de categorías
php artisan make:model Category -mf

Creando modelo de cursos
php artisan make:model Course -mf

Creando modelo de post
php artisan make:model Post -mf

Configurando las migraciones

************************************************
Creando componente en livewire para listade cursos
php artisan make:livewire CourseList

Creando controlador en laravel
php artisan make:controller PageController

Creando componente para tarjeta del curso
php artisan make:component course-card

Publicar los archivos de los paquetes
php artisan vendor:publish




