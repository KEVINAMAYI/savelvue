# Savelvue Setup

### To setup this project successfully, you need

- **[Composer For PHP Dependencies](https://getcomposer.org/)**
- **[PHP 8.1 Minimun requirement for Laravel 10](https://www.apachefriends.org/download.html)**
- **[MYSQL For Managing the database](https://www.apachefriends.org/download.html/)**




## 1. Clone the Project Repository

- ### Clone the project Repository by Running this command in a folder you have created.
```
git clone https://github.com/KEVINAMAYI/savelvue.git 
```

![Cloning the Project](/installation_files/auth_scaffold_1.PNG "Cloning the Project").

## 2. Install Dependencies

- ### Once the project has been cloned, cd into the project and run.

```
composer install 
```

![Cloning the Project](/installation_files/auth_scaffold_2.PNG "Installing Dependencies").


## 3. Configure Database and Run Migrations

- Rename .env-example to .env
- Add database details to the .env ( Make sure to create the dabase or you can create it during migration ).
- Add a FRONT_END_URL in the env, it will be used to receive the account activation code and the password
- Run migration to migrate the tables

![Cloning the Project](/installation_files/auth_scaffold_3.PNG "Rename .env-example to .env").
![Cloning the Project](/installation_files/auth_scaffold_4.PNG "Add Database details").
![Cloning the Project](/installation_files/auth_scaffold_7.PNG "Add FRONT_END_URL to .env").
![Cloning the Project](/installation_files/auth_scaffold_5.PNG "Migrate the table").




## 4. Start Backend Server
- Start the serve by running the command below. Don't close the serve as this will be required to be used by the frontend server.

```
php artisan serve
```
![Cloning the Project](/installation_files/auth_scaffold_6.PNG "Start server").

