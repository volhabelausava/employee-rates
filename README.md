# Employee Rates
Employee Rates fetches and handles the information about the employees' time reports from database. Task performed with PHP + MySQL.
## Task Description
The purpose of the task is to write a program that will fetch the information about the employees' time reports from the example   database and for each day of the week calculate the top 3 employees who have the highest average number of working hours reported on the corresponding weekday. 
## Getting Database
Option 1:
>You can use `dump.sql`:
```shell
$ mysql -uroot -p employee-rates < dump.sql
```
>*use password 1111

Option 2:
>You can create database using settings in `config.php`

>Then execute `migration.php` to create database tables.

>And execute `db-fill.php` to fill database with testing data.

## Getting data
You can choose where you want to browse data:

- By default you should launch index.php in command line and get data there.

- You can get data in JS console:
> Just use method `PrintOutput::ToConsole` instead of `PrintOutput::ToCommandLine` (`index.php` line 14)

- You can get data in browser:
> Just use method `PrintOutput::ToBrowser` instead of `PrintOutput::ToCommandLine` (`index.php` line 14)


## Contacts
If you have any questions reach out to me by email: <a href="mailto:volha.belausava@gmail.com" target="_blank">volha.belausava@gmail.com</a> 
