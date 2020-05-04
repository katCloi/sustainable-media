# sustainable-media
possible extension to [SRhub.org](https://srhub.org/)
# Summary 
In New Jersey, there are several towns and municipalities that have several problems regarding sustainability. These problems could possibly include pollution, water scarcity, energy, food production, and other environmental problems. Although most people in a particular town may be aware of their sustainable issues, others in Jersey would not be. If other people in New Jersey are not aware of the problems affecting their communities, then it’s impossible for those problems to be solved. If more people knew about their sustainable issues, then it’s possible that a solution could be provided.

The objective of the module is to bring awareness to sustainable issues in New Jersey communities. Our web application should be able to help users have a means of voicing out local sustainability issues while also giving journalists a platform to write about these issues. Members of New Jersey communities and journalists will both benefit from our website because it will give them both a voice and possibly help provide a solution for their local problems.

# Installation and Implementation Instructions
Downlod and install [XAMPP](https://sourceforge.net/projects/xampp/)
<img width="1078" alt="Screen Shot 2020-05-03 at 6 11 29 PM" src="https://user-images.githubusercontent.com/47569514/80927135-a8206800-8d69-11ea-8653-5df4cfcd1855.png">

## Connecting to local server
Click "Start"

<img width="533" alt="Screen Shot 2020-05-03 at 6 15 04 PM" src="https://user-images.githubusercontent.com/47569514/80927271-a86d3300-8d6a-11ea-92a0-091dd2fd7b4f.png"> 

Wait until Status turns green. 

<img width="420" alt="Screen Shot 2020-05-03 at 6 26 26 PM" src="https://user-images.githubusercontent.com/47569514/80927405-a9eb2b00-8d6b-11ea-813b-907de30acb62.png">

 Go to Network. Enable the localhost:8080
 
<img width="528" alt="Screen Shot 2020-05-03 at 6 15 45 PM" src="https://user-images.githubusercontent.com/47569514/80927448-f0408a00-8d6b-11ea-9c4c-145255374e4f.png">

Go to Volumes. Mount /opt/lampp

<img width="527" alt="Screen Shot 2020-05-03 at 6 16 00 PM" src="https://user-images.githubusercontent.com/47569514/80927514-53cab780-8d6c-11ea-91e3-bb78eda655d3.png">

## Installing files
Open your files window. The server should be mounted as a local server seen as "192.168.64.2"
**1. Select the file lampp.**
**2. Find the folder "htdocs"**
**3. Create a folder named "DBproject"**
**4. Download code files from this github repo and move those files into this folder. Make sure name files stay the same. This ensures all file paths are connected.**

*Note that you need to make a separate folder in the DBproject called "css" and put all css files into that folder*

<img width="1133" alt="Screen Shot 2020-05-03 at 6 34 13 PM" src="https://user-images.githubusercontent.com/47569514/80927660-42ce7600-8d6d-11ea-910e-6f4ae12cfef5.png">

## Opening the Website

Open your browser and type "localhost:8080/DBproject/homePage.php" into your search bar.
<img width="1101" alt="Screen Shot 2020-05-03 at 6 40 22 PM" src="https://user-images.githubusercontent.com/47569514/80927734-c4260880-8d6d-11ea-9c3b-cd71e9896cf4.png">

## Importing the Database

Open your browser and type "localhost:8080/phpmyadmin/" into the search bar. This should lead to the phpMyAdmin website which allows you to create a database. 

<img width="1438" alt="Screen Shot 2020-05-03 at 6 50 15 PM" src="https://user-images.githubusercontent.com/47569514/80927916-f4ba7200-8d6e-11ea-822a-309fb34c1d20.png">

**1. Select new and name the database "SMdatabase"**
<img width="515" alt="Screen Shot 2020-05-03 at 6 51 39 PM" src="https://user-images.githubusercontent.com/47569514/80928036-cc7f4300-8d6f-11ea-9bf3-5a6ea38e5f02.png">

**2. In your database, go to "Import" at the top. Download the database files as provided in the repo.These should all be ".sql" files.**

<img width="1189" alt="Screen Shot 2020-05-03 at 6 58 31 PM" src="https://user-images.githubusercontent.com/47569514/80928096-457e9a80-8d70-11ea-92d3-72cbc84fbfbb.png">

**3. Select Choose file and import a database file. Click "Go" on the bottom right corner of the page. You may need to do three separate imports.**

Your database should look like this. <img width="239" alt="Screen Shot 2020-05-03 at 7 17 25 PM" src="https://user-images.githubusercontent.com/47569514/80928503-e9694580-8d72-11ea-941b-4962150e5cf6.png">

## Completed Connection and Website 
Your database should be connected via php at this point. You can go back to the website as instructed previously and navigate. 
