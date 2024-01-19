A Database project demonstrating php, html, css, and javascript dealing with information storage, modification, and retrieval

To run
- download apache and run both the apache and mysql servers
- run the Make database then make table files
- Run the autoFillTable files
- Run main.php and review functions

cautions
- my uploads file is needed, or a seperate uploads file is required with target_dir on line 60 of insert being modifed to the file name
- if a seperate uploads file is used stock image will not work without a file being set to mon.jpg
- if a seperate uploads file is used autoFillTable.php will work but will not display the images 
- If "pokemon" were deleted from the database during a previous session go to readMe.php and insert the number of objects deleted
    - 

How it works
- the required files create the mysql database and table inside it
- the autoFillTable then puts in 3 objects inside the table that have different data types fitting the requirements
- The user can then modify values in the table, sort the table through either name or order inserted.
    -this is done through sql queries
- Inserting a new object into the table requires all information to be filled except for image where a stock image is used if one isnt provided


Personal note
- improvements could be made in how its sorted by name
- imrpovements could be made in deleted values ie not storing via cookies for 24 hours
- worth testing again ensure correctness
