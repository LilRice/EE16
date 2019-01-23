import random 
import time 

def displayIntro(); 
print ("Det var en vacker dag och hela riket firade") 
print ("kungen har fått barn") 
print ("Han ska döpa barnet till") 
print() 

def chooseAct(); 
act = "" 
while act != "1" and act != "2":  
    act = input(Vad väljer du? (1 eller 2) ")
    return act 
def checkAct(chosenAct): 
    print("det var en tjej") 
    time.sleep(2)
    print("det var en kille")
    time.sleep(2)
    print ("det var en alien") 
    time.sleep() 

    correctAct = random.randint(1, 2) 

    if chosenAct == correctAct: 
        print("Vi har en prinsessa") 
        print ("Vi har en Prins") 
        else: 
            print("Whata hell is happening")
            
    displayIntro() 
    chooseAct()