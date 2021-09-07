Instruction to run project:
<br>
Create a database locally <br>
Download the project and put in folder C:\xampp\htdocs (or any folder you can run XAMPP on) <br>
Open the console and cd your project root directory <br>
Run copy .env.example .env <br>
Run composer install or php composer.phar install <br>
Run php artisan key:generate <br>
Run php artisan migrate <br>
Run php artisan db:seed <br>

Open "http://localhost:8080/[Your Folder Name]/public/homepage" and enjoy!
