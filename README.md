# Basic PHP Authorization and Login

Create and route a user set by privileges. Password encryption and validation checks.

### Prerequisites
MYSQL  
PHP  
```
Change the connection file to connect to your database configuration. 
```


### Installing

Create a table for users in the database.

```
users
```

Create four fields for the user.

```
user_id int(12) AUTO_INCREMENT Set primary key
```
```
username varchar(60)
```
```
hashed_password varchar(60)
```
```
user_type varchar(12)
```



## Built With

* [MAMP](https://www.mamp.info/en/) - Local web development

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Kevin Skoglund - Php With My Sql Essential Training


