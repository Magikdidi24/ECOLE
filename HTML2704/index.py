#!/usr/bin/env python3
# coding: utf-8 

import cgi 
form = cgi.FieldStorage() 
print("Content-type: text/html; charset=utf-8\n") 
html = """<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Test NSI</title>
</head>
<body bgcolor="#FFFACD" style="font-family:Times; text-align:center;">
     <form action="/index.py" method="POST">
    <h2>Formulaire pour devenir l'esclave de Sam</h2>
    <p>aller rentre les infos</p>
    <input type="text" name="name" placeholder="Ton Nom !! plus vite que ça !!" />
    <p>
    <align="center" />
    <img-src="HTML2704\chat_meme.png" />
    
    
    </p> <img-src="D:\Première\NSI\HTML2704\chat_meme.png" />
     <input type="submit" name="send" 
    value="Merci de Valider futur esclave" />

</body>
</html>
""" 
print(html)