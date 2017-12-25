<p>
	Checkmoney es un lugar que te ayuda a getionar todo lo que pasa en tu bolcillo. Tu tienes el control de tus gastos e ingresos, gestionalo desde una donde quiera que este a travez de una amagable interfaz de usuario.
</p>
<p>Configuración</p>
<ul>
	<li>Configurar datos de base de datos en tu archivo .env</li>
	
	>	DB_DATABASE=myBD
	>	DB_USERNAME=myUserBD
	>	DB_PASSWORD=password
	
	
<li>Agregar a su archivo .env lo siguiente:</li>

	>	CLIENT_ID_FB=my_id_fb
	>	CLIENT_SECRET_FB=my_secret_client
	>	REDIRECT_SOCIAL_FB=http://midominio.com/auth/facebook/callback
	
	
	
<p>Para obtener los valores de las variables anterioremente agregadas les recomiendo pasen por [esta guía en la sección Facebook Login](https://blog.damirmiladinov.com/laravel/laravel-5.2-socialite-facebook-login.html#.WkCriXXXa01)</p>

	
	<li>Ejecutar el comando: <b>composer update</b></li>
	<li>Ejecutar las migraciones: <b>php artisan migrate</b></li>
	<li>Ejecutar servidor: php artisan serve</li>
	
<li>Demo Online: https://checkmoney.andresed.me/</li>
</ul>
