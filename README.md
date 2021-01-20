Hi Tom and Stephen,

The logic is split up into 7 different html files, with an accompanying PHP file. There is basic UI, but nothing to remark on.

The html files are grouped in two: plural selections and individual selection (excluding bookings which is plural). 

The plural selections allow for an organised view of all in that category (eg drivers in drivers.html). If i was to pay attention to UI here, I would have the table searchable and organised via date or name. currently they are all organised via ID.

The individual selections allow for a look into the individual activity of said driver/user/vehicle. again this table would be organised via date or name but is currently via ID.

to transfer information between the plural pages and the individual pages I use a slug insertion on the plural page and a post request on the individual page. Doing this keeps the url relatively clean whilst conveying the required information. you can easily access the individual page using the link inserted into the table rows.

On the Driver page, you can see the drivers licenses and an accompanying table showing the vehicles in the inventory that they have the licenses to drive.

All the SQL requests are handled by the requests.php page. I may have made some mistakes but i believe it handles the requests cleanly and efficiently whilst not pulling full tables when only certain information is needed.

the solution is very bare bones so do forgive me as I haven't written business logic before so I was unsure as to how much flesh and bones was needed. If more needs to be done please let me know.

I would be more than happy to talk more about my thinking so please feel free to get in touch.