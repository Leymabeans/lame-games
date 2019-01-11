inventory = ["safe key"]
room_items = ["candle","lighter","knife"]

def introduction():
    print("You wake up in a room you've never seen before")
    print("There's a bit of blood on your hands and smeared on your face")
    print("Sitting up, you body aches")
    print("As your feet touch the wooden floor, it creaks")
    print("\n")
    print("You don't know where you are")
    print("But you know")
    print("You have to get out of there.")
    print("\n \n")
    introduction = input("Press enter to contine")
    if introduction == " ":
      instructions()

def instructions():
    print("Escaping is going to be a challege")
    print("Type 'inventory' to see what's in your backpack")
    print("Type 'pick up' and 'use' on objects")
    print("To navigate, type 'move foward, right,left, or back")
    print("Good luck")


def game():
  alive = True
  while alive:
    opening_decision = input("what are you going to do?")
    if opening_decision == "inventory":
      print("Inside your backpack, you have:", inventory)
      continue
    if opening_decision == "move forward":
      print("There is a door in front of you")
      open_decision = input("Would you like to open it?")
      if open_decision == "yes":
        print("The door is locked")




while True:
  introduction() 
  break
