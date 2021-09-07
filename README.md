Instruction to run project:

Create a database locally 
Download the project and put in folder C:\xampp\htdocs (or any folder you can run XAMPP on)
Open the console and cd your project root directory
Run copy .env.example .env
Run composer install or php composer.phar install
Run php artisan key:generate
Run php artisan migrate
Run php artisan db:seed 

Open "http://localhost:8080/[Your Folder Name]/public/homepage" and enjoy!
