import mysql.connector
import base64
try:
    from StringIO import StringIO
except ImportError:
    from io import StringIO
import PIL.Image
from PIL import Image


con=mysql.connector.connect(user='root', password='',
                              host='localhost',
                              database='dbms')
mycur=con.cursor();

sql="select Image_att, Attraction_Name from attraction_sites order by City_Id asc"
 
mycur.execute(sql)
myresults = mycur.fetchall()
x=0
for data in myresults:

   doc_id = data[1].replace(" ","%"); 
   outfile=open(doc_id+'.jpg','wb')
   outfile.write(data[0])
   outfile.close()
   print(data[1])
   x=x+1




