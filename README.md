# [SPRINT 3] CC-2 FUTURESEEKERS Group Assignment 
## (SE_GROUP-02)

Sprint 3 roles: 

----- Part 01 ----- 
- Mohammed Yahya -> BUSINESS ANALYST
- Dilki Delgoda -> DEVELOPER
- Siduja Perera -> SCRUM MASTER
- Avishka Senanayake -> QUALITY ASSURANCE

----- Part 02 -----
- Mohammed Yahya -> QUALITY ASSURANCE 
- Dilki Delgoda -> SCRUM MASTER
- Siduja Perera -> DEVELOPER
- Avishka Senanayake -> BUSINESS ANALYST


Methods of use:

- Go to your htdocs folder and create a file called 'futureseekers'
- And in that folder, pull this repository 
- Start XAMPP Apache and MySQL service models 

In the address bar of the file directory, type 'cmd' (or powershell)
and type:

```
php spark migrate (to create all db tables automatically)
php spark db:seed AdminSeeder (add admin login data to database)

php spark migrate:rollback (if you want to drop all tables)
```

To go to the webpage, type in your browser address bar :
```
http://localhost/futureseekers/public/
```

Admin logins from seeder file are:

    - admin123@admin.com
    - admin123


*This assignment was for the Commercial Computing 2 AGILE Assignment*
