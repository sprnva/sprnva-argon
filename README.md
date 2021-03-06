# Sprnva Framework
### /supernova/
Sprnva is a beautifully designed application starter kit for you and provides the perfect starting point for your next application. Sprnva provides the entry point in learning the MVC framework.
<br><br>
docs: http://docs.sprnva.space
<br>
Sprnva is designed using bootstrap 4 and offers your choice of using different stacks.
![image](https://user-images.githubusercontent.com/37282871/113674825-35440d80-96ed-11eb-8953-20d68802a597.png)
![image](https://user-images.githubusercontent.com/37282871/113804024-47c35300-9790-11eb-9305-9de68b5c2409.png)

## Features

- beautiful routing
- protected routes by authentication
- can run on php >= php5.6
- built in login and registration
- forgot password with email sending password reset link
- inspired in MVC approach
- simple database migration <i>(sync database development for everyone)</i>
- can send email with just a simple setup
- bootstrap 4 stack (can use diffrent stacks)
- jquery-3.6.0 stack (can use diffrent stacks)
- easy to deploy to a hosting server
- can add/change diffrent templates of your choice
- open-source
- easy to undertstand
- coding used is not complex good for rising artisan
- fast developing applications
- Csrf protection
- database seeder
- brightens your horizon in future engagement for massive frameworks

## REQUIREMENTS
- Php version supported: PHP >= php5.6
- composer
- apache and mysql server

## INSTALLATION
```bash
composer create-project sprnva/sprnva example-app

cd example-app
```

- setup `config.php` credentials
- set `'base_url' => 'example-app'` *('example-app' is the directory name of your application)*
- Create a database identical to your config then go to  `/migration`module with this URL:
```
http://localhost/sprnva/migration
```
- click fresh button to migrate default tables
- You can start building your application

