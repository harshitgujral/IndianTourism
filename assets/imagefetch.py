import mysql.connector
import base64
try:
    from StringIO import StringIO
except ImportError:
    from io import StringIO
import PIL.Image
from PIL import Image
import os

path1 = "images/"   
path2 = "final/"   

listing = os.listdir(path1)    
for file in listing:
    im = Image.open(path1 + file)
    newname=file.replace("%","");
    print(file,newname)                       
    im.save(path2 + newname, "JPEG")
