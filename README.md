![Doctype Admin](https://github.com/pratiksh404/doctype_admin/blob/master/screenshot/doctype_admin.png)

## Laravel 7 Admin Panel for lazy developers.

#### Contains : -

-   User Management
-   Role and Permission Management
-   Activity Management
-   Auth Management
-   Plugin Extensions

### Installation

Run Composer Require Command

```sh
$ composer require drh2so4/doctype_admin
```

or

```sh
git clone https://github.com/pratiksh404/doctype_admin.git
```

Install Composer Dependencies

```sh
composer install
```

Create a copy of your .env file

```sh
cp .env.example .env
```

Generate an app encryption key

```sh
php artisan key:generate
```

Create an empty database for our application and set yo environment variable in .env file

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=doctype_admin
DB_USERNAME=root
DB_PASSWORD=
```

Then migrate the database.
Go on the console and type..

```sh
php artisan migrate --seed
```

This allows you to have necessary login credential

> Admin Credential
> email : admin@admin.com
> password: admin123

> User Credential
> email : user@user.com
> password: user123

## Packages

| Package | Description                          | Link                                              | Command                             |
| ------- | ------------------------------------ | ------------------------------------------------- | ----------------------------------- |
| Blog    | Blog Package for Doctype Admin Panel | https://github.com/pratiksh404/doctype_admin_blog | composer require doctype_admin/blog |

## Model Scopes

| Scopes                           | Description                                                                                      |
| -------------------------------- | ------------------------------------------------------------------------------------------------ |
| Model::getLatestAll()            | Retrive data orderd by updated_at timestamp in ascending order                                   |
| Model::getLatestLimit(\$limit)   | This scope expects parameter $limit which return $limit number of data                           |
| Model::todayData()               | Retrives today's data                                                                            |
| Model::weekData()                | Retrives week data                                                                               |
| Model::weekDataLimit(\$limit)    | Retrives week \$limit number of data                                                             |
| Model::monthData()               | Retrives month data                                                                              |
| Model::MonthDataLimit(\$limit)   | Retrives month \$limit number of data                                                            |
| Model::yearData()                | Retrives month data                                                                              |
| Model::yearDataLimit(\$limit)    | Retrives year \$limit number of data                                                             |
| Model::tillNowFrom(\$date)       | Retrives data from \$date till now                                                               |
| Model::dataBetween($from,$to)    | Retrives data $from date to $to date                                                             |
| Model::dataNotBetween($from,$to) | Doesn't retrives data $from date to $to date                                                     |
| Model::asc()                     | Ascending Ordered Data                                                                           |
| Model::desc()                    | Descending Ordered Data                                                                          |
| Model::whereFilter(array)        | Return multiple where condition data where key is field and value is condition matching value    |
| Model::orWhereFilter(array)      | Return multiple or where condition data where key is field and value is condition matching value |

### Admin Panel Screenshot

![Doctype Admin](https://github.com/pratiksh404/doctype_admin/blob/master/screenshot/login.jpg)
![Doctype Admin](https://github.com/pratiksh404/doctype_admin/blob/master/screenshot/register.jpg)
![Doctype Admin](https://github.com/pratiksh404/doctype_admin/blob/master/screenshot/all_user.jpg)
![Doctype Admin](https://github.com/pratiksh404/doctype_admin/blob/master/screenshot/create_user.jpg)
![Doctype Admin](https://github.com/pratiksh404/doctype_admin/blob/master/screenshot/roles.jpg)
![Doctype Admin](https://github.com/pratiksh404/doctype_admin/blob/master/screenshot/activity.jpg)

### Todos

-Extension Install Menu
-More Functionality
-Improved Roles and Permission
-Maintainabilty
-Better UI

## Package Used

-   https://github.com/rtconner/laravel-tagging
-   https://github.com/jeremykenedy/laravel-users
-   https://github.com/jeremykenedy/laravel-roles
-   https://github.com/jeremykenedy/laravel-logger
-   https://github.com/jeroennoten/Laravel-AdminLTE

## License

MIT

**DOCTYPE NEPAL ||DR.H2SO4**
