#!/usr/bin/env python3
import cgi
import html
global first,second,third,fourth,fifth,sixth,seventh,eighth,nineth,tenth,mark,form


def Questions():
    global first,second,third,fourth,fifth,sixth,seventh,eighth,nineth,tenth,form
    form = cgi.FieldStorage()
    if form.getvalue('One'):
        first = form.getvalue('One') 
    if form.getvalue('Two'):
        second = form.getvalue('Two')
    if form.getvalue('Three'):
        third = form.getvalue('Three')
    if form.getvalue('Four'):
        fourth = form.getvalue('Four')
    if form.getvalue('Five'):
        fifth = form.getvalue('Five')
    if form.getvalue('Six'):
        sixth = form.getvalue('Six')
    if form.getvalue('Seven'):
        seventh = form.getvalue('Seven')
    if form.getvalue('Eight'):
        eighth = form.getvalue('Eight')
    if form.getvalue('Nine'):
        nineth = form.getvalue('Nine')
    if form.getvalue('Ten'):
        tenth = form.getvalue('Ten')


def Mark():
    global first,second,third,fourth,fifth,sixth,seventh,eighth,nineth,tenth,mark,form
    mark=0
    i=0
    mas1=[first,second,third,fourth,fifth,sixth,seventh,eighth,nineth,tenth]
    mas2=['3','3','1','4','1','1','4','1','2','2']
    for element in mas1:
        if(mas1[i]==mas2[i]):
            mark=mark+1
        i=i+1


def Main():
    global first,second,third,fourth,fifth,sixth,seventh,eighth,nineth,tenth,mark
    Questions()
    Mark()
    print("Content-type:text/html\r\n\r\n")
    print("<html>")
    print("<head>")
    print("<title>Test With Using Python</title>")
    print("</head>")
    print("<body>")
    print("<h1>My Congratulations!</h1>")
    print("<h2>Your mark is %s" % mark +'.')
    print("</body>")
    print("</html>")


Main()
