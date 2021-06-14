# PHP Developer Test

In this project, I was tasked to implement the basic users' authentication, 
authorization and access controls in a PHP application. The full project
specification can be found [here](docs/PHP-Developer-test.pdf)

## Built with
* PHP 7.4.3 (Symfony 4.4)
* Bootstrap 4.6
* MySQL + Doctrine + Doctrine Migrations
* PHPUnit
* Composer Package Manager
* PSR-2 Coding Style

## Getting Started

To get a local copy up and running follow these simple steps.

- On the project GitHub page, navigate to the main page of the repository [this page](https://github.com/teekaytech/PHP-Developer-Test).
- Under the repository name, locate and click on a green button named 'Code'.
- Copy the project URL as displayed.
- If you're running Windows Operating System, open your command prompt. On Linux, Open your terminal.
- Change the current working directory to the location where you want the project to be cloned. Leave as it is if the current location is where you want the project to be.
- Type `git clone`, and then paste the URL you copied in Step 3.<br>
  `$ git clone https://github.com/teekaytech/PHP-Developer-Test.git`
- Press Enter. Your local copy will be created.

Please Note that you must have `GitHub`, `PHP >= 7.2`, `Composer`, & Apache `MySQL` installed on your PC.


### Prerequisites

Since this is a PHP codebase, `PHP Runtime >= 7.2.0` and `Symfony 4.4` is required to interpret the code.
Also, `composer` is another major requirement since it is the dependency manager of choice. If you don't have it 
installed, you can get it [here](https://getcomposer.org/)

### Setup
- In your `.env` file, look for the database configuration line 
  (since I used MySQL, here's my DB driver: `DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"`). 
  If it is commented (prefixed with `#`, remove the `#` symbol).
- Update your database username and password. You might also change the name of the database. 
  Replace the string as indicated below:
```
db_user: <your-username>
db_password: <your-password>
db_name: <your-referred-name>
```
- Run `php bin/console doctrine:database:create` to create the database.
- Generate database migrations with `php bin/console doctrine:migrations:migrate`
- Seed the database with default admin account: `php bin/console doctrine:fixtures:load`
- If your configuration is well setup in the `.env` file, your database should be created. 
- Install dependencies with `composer install`
  
### Starting the App (Development Environment)
- Run `php bin/console server:start` 
- Open your browser and navigate to `http://127.0.0.1:8000`
- All done. Enjoy the App :blush:

### Running Tests:
- Create Test database with: `php bin/console --env=test doctrine:database:create`
- Create tables in the test database: `php bin/console --env=test doctrine:schema:create`
- Populate test database with default admin data: `php bin/console --env=test doctrine:fixtures:load`
- Finally, run tests with: `php bin/phpunit tests`


## Author

👤 **Taofeek Olalere**

- Github: [@teekaytech](https://github.com/teekaytech)
- Twitter: [@ola_lere](https://twitter.com/ola_lere)
- Linkedin: [linkedin](https://linkedin.com/in/olaleretaofeek)

## 🤝 Contributing
Contributions, issues and feature requests are welcome!
1. Fork the Project
2. Create your Feature Branch (git checkout -b feature/AmazingFeature)
3. Commit your Changes (git commit -m 'Add some AmazingFeature')
4. Push to the Branch (git push origin feature/AmazingFeature)
5. Open a Pull Request.<br>
   Feel free to check the [issues page](issues/).

## Show your support

Give a ⭐️ if you like this project.

## 📝License

This project is [MIT](lic.url) licensed.

## Acknowledgements

- [Symfony Documentation](https://symfony.com/doc/current/index.html)
- [Gary Clarke on Youtube](https://www.youtube.com/channel/UCA2dkCp5DZj7HE0-6IX5ZHQ)