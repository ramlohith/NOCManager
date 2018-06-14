import urllib2

#def main():
    #file = open("website.txt", "r")
    #x= file.read(); 
x="http://10.114.5.46/"
webUrl = urllib2.urlopen(x)
   # print "result code: " + str(webUrl.getcode())
y = str(webUrl.getcode())
if (y):
    print "Success!"
else:
    print "error!!"   

#if __name__=="__main__":
#  main()

