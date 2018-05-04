
# Database Project
### Authors: Liam Flaherty, Skyler Todd, Christian Reed

---


## Application Description

This application takes two databases involving employee data of two popular YouTube channels (Funhaus and Achievement Hunter). The purpose of this application and its abilities is to allow easy access for not only the channels themselves to keep and manage records of their employees, but also for fans of the channels to be able to come to know the history of them.


## Database Schemas
##### (Both databases have identical schemas)


##### Table: Employees


Name | Type | Attributes | NULL | Default
--- | --- | --- | --- | ---
Employee   | int          |    | Yes | NULL
FirstName  | varchar(255) |    | Yes | NULL
LastName   | varchar(255) |    | Yes | NULL
YearJoined | int          |    | Yes | NULL
YearLeft   | int          |    | Yes | NULL



## Entity Relationship Diagram


![](https://github.com/DropthaBeatus/MySQL/blob/master/ERDv2.PNG?raw=true "ERD Diagram")

- As you can see the two databases don't have a connection in forms of their individual entities, but comparing the two is still viable as they share common data points.

## CRUD Descriptions
##### Each portion of CRUD is easily accessible within the UI of the application

- Create: We create within the databases through adding in new employees as they are hired
- Read: We read the databases by displaying them within the application for reference when developing comparison statements

- Update: We can update the databases by editing any one row value at a time
- Delete: We delete within the databases by deleting certain employees from the database given possible circumstances such as an accidental creation of a new employee

## Application URL
##### [http://ec2-18-221-234-28.us-east-2.compute.amazonaws.com/DatabaseFinalProject/index.html](http://ec2-18-221-234-28.us-east-2.compute.amazonaws.com/DatabaseFinalProject/index.html)

## Video Walkthrough
<a href="http://www.youtube.com/watch?feature=player_embedded&v=GYS0evHfVQk
" target="_blank"><img src="http://img.youtube.com/vi/GYS0evHfVQk/0.jpg" 
alt="Video Walkthrough" width="" height="" border="10" /></a>
