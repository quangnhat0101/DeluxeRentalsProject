Instruction to run project:

<br>
1. Create a database locally <br>
2. Download the project and put in folder C:\xampp\htdocs (or any folder you can run XAMPP on) <br>
3. Open the console and cd your project root directory <br>
4. Run copy .env.example .env <br>
5. Run composer install or php composer.phar install <br>
6. Run php artisan key:generate <br>
7. Run php artisan migrate <br>
8. Run php artisan db:seed <br>

Finally open "http://localhost:8080/[Your Folder Name]/public/homepage" and enjoy!
