import mysql.connector

f = open ('apachedetails.txt')
lines = f.read().splitlines()
num_elements = (len(lines) / 4) - 1

cnx = mysql.connector.connect(user='root', password='pass123', host='localhost', database='NOC')
cursor = cnx.cursor()
count = 0
count_if_existing = 0
for i in range (1,num_elements+1):
    if (lines[i] == lines[i+1]):
        count += 1
    elif (count == 0):
        print lines[i], "has no login failure!"
    else:
        print lines[i], "has" , count , "Failed logins on website!"
        ipadd = lines[i]
        print "Between the intervals: " , lines[(i-count)+num_elements+1] , " and " , lines[i+num_elements+1]
        print "Entering data into database - Login_failure:"
        for j in range (((i-count)+num_elements+1),(i+num_elements+2)):
            timef = lines[j]
            os = lines[j+num_elements+1]
            brow = lines[j+num_elements+num_elements+2]
            cursor.execute("select * from Login_failure")
            data=cursor.fetchall()
            for row in data:
                existing_time = str(row[2])
                if(timef==existing_time):
                    count_if_existing += 1
            if (count_if_existing == 0):
                cursor.execute("INSERT INTO Login_failure(IP,Time,OS,Browser) VALUES ('%s','%s','%s','%s');" %(ipadd,timef,os,brow))
                cnx.commit()
            count_if_existing = 0
        count = 0
         

cursor.close()
cnx.close()
 
