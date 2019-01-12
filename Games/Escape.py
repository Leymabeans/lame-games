#Imports and definitions=======================================================
from termcolor import colored

inventory = ["safe key"]
room_items = ["candle","lighter","knife"]
continue_choice = colored("Press 'c' to continue", "red")





#Introduction and instructions=================================================
def introduction1():
    print ("You wake up in a room you've never seen before")
    print("There's a bit of blood on your hands and smeared on your face")
    print("Sitting up, you body aches")
    print("As your feet touch the wooden floor, it creaks")
    intro = input(continue_choice)
    if intro == "c":
      print("\n")
      introduction2()


def introduction2():
    print("You don't know where you are")
    print("But you know")
    print("You have to get out of there.")
    intro = input(continue_choice)
    if intro == "c":
        print("\n")
        small_instructions()


def small_instructions():
    print("Follow all instructions given")
    print("Type 'help' for a complete list of instructions")
    print("Good luck")
    intro = input(continue_choice)
    if intro == "c":
      print("\n")
      game()


def large_instructions():
    print("")
    print("")
    print("")
    print("")
    print("")
    print("")
    print("")
    print("")
    print("")
    print("")
    game()


#Game loop======================================================================
def game():
  alive = True
  while alive:
    opening_decision = input("what are you going to do?")
    if opening_decision == "help":
      large_instructions()
    if opening_decision == "inventory":
      print("Inside your backpack, you have:", inventory)
      continue
    if opening_decision == "move forward":
      print("There is a door in front of you")
      open_decision = input("Try to open it")
      if open_decision == "open":
        if inventory == "door key":
            print("You have left the room and escaped.")
            print("Congratulations")
        else:
            print("You do not have the key. The door is locked")
      else:
        print("That is not a command.")
        continue





while True:
  introduction1()
  break
