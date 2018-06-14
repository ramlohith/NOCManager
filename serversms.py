import serial
import time

ser = serial.Serial("/dev/ttyUSB0",9600,timeout=1)
# 9600 is the default Baudrate for SIM900A modem 
# ttyUSB0 
#ser.flush()

# Transmitting AT Commands to the Modem
# '\r\n' indicates the Enter key

num_lines = sum(1 for line in open('/var/www/html/NiceAdmin/serverphonenumbers.txt'))
j = int(num_lines)
print j 

ser.write('AT'+'\r\n')
rcv = ser.read(10)
print rcv
 
ser.write('ATE0'+'\r\n')      # Disable the Echo
rcv = ser.read(10)
print rcv

ser.write('AT+CMGF=1'+'\r\n')  # Select Message format as Text mode 
rcv = ser.read(10)
print rcv

text_f = open("poweroff.txt", "r")
lines = text_f.readline()
c = lines
text_f.close() #close the text file

text_file = open("serverphonenumbers.txt", "r")

for k in xrange(0, j):
    n=k+1
    print n
    ser.write('AT+CNMI=2,1,0,0,0'+'\r\n')   # New SMS Message Indications
    rcv = ser.read(10)
    print rcv

    # Sending a message to a particular Number specified by i
    lines = text_file.readline()
    i = int(lines)
    ser.write('AT+CMGS="')
    ser.write('%d' %i)
    ser.write('"\r\n')
    rcv = ser.read(10)
    print rcv

    ser.write('%s' %c)
    ser.write('\r\n')  # Message
    rcv = ser.read(10)
    print rcv

    ser.write("\x1A") # Enable to send SMS
    for i in range(10):
        rcv = ser.read(10)
        print rcv

text_file.close() #close the text file
ser.close() # close the serial port
