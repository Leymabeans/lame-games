#Imports and definitions=======================================================
import sys
from termcolor import colored

inventory = ["safe key"]
continue_choice = colored("Press 'c' to continue", "red")
error_choice = colored("That is not a command", "red")





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

    intro = input(continue_choice)
    if intro == "c":
      print("\n")
      game()


def large_instructions():
    print("Type:")
    print("'inventory' to see your backpack")
    print("'open' to open a locked object")
    print("'look forward' to turn straight and move in that direction")
    print("'look left' to turn to the left and move in that direction")
    print("'look backward' to turn backwards and move in that direction")
    print("'look right' to turn to the right and move in that direction")
    print("When you receive an error message you will be sent to the beginning again")
    print("\n")
    print("This is a map of the room:")
    print("----------------|___|---------------")
    print("|                                   |")
    print("|                                   |")
    print("|                                   |")
    print("|  _                                |")
    print("| |_|           You              ?  |")
    print("|                                   |")
    print("|                                   |")
    print("|                                   |")
    print("|                                   |")
    print("----------------|||-----------------|")
    intro = input(continue_choice)
    if intro == "c":
        print("\n")
        game()


#Game content======================================================================
def game():
  alive = True
  while alive:
    escape_decision = input("what are you going to do?")
    if escape_decision == "help":
      large_instructions()
    if escape_decision == "inventory":
      print("Inside your backpack, you have:", inventory)
      continue


    #Player choice is to 'look' forward'
    if escape_decision == "look forward":
      print("There is a door in front of you")
      open_decision = input("Try to open it")
      if open_decision == "open":
        if inventory == "door key" and wire_snip == "blue":
            print("You have left the room and escaped.")
            print("Congratulations")
            end_game()
        if inventory == "door key" and wire_snip != "blue":
            print("You have the door key. You unlocked the door and esca--")
            print("There were surveillance cameras watching you")
            print("They shot you on the spot with their laser")
            death()
      else:
        print(error_choice)
        continue


    #Player choice is to 'look left'
    if escape_decision == "look left":
        print("There is a safe in front of you")
        open_decision = input("Try to open it")
        if open_decision == "open":
            if inventory[0] == "safe key":
                print("You have opened the safe")
                print("Inside are pliers and a door key")
                inventory.remove("safe key")
                inventory.insert(0, "pliers")
                inventory.insert(1, "door key")
                print(inventory)
            else:
                print("You do not have the safe key. The safe is locked")
        else:
            print(error_choice)


    # Player choice is to 'look backward'
    if escape_decision == "look backward":
        print("You notice there are surveillance cameras watching you")
        print("They have a laser that can kill you in an instant")
        print("There are three wires: red, blue, and green")
        print("Cut the right one, and the cameras will disable")
        wire_snip = input("Which one do you want to cut?")
        if inventory[0] == "pliers":
            if wire_snip == "red":
                print("Wrong choice my friend. Lasers killed you.")
                death()
            if wire_snip == "blue":
                print("Wrong choice my friend. Lasers killed you.")
                death()
            if wire_snip == "green":
                print("Nice job my friend.")
                print("Cameras are disabled, and you are not")
                inventory.remove("pliers")
                print(inventory)
        else:
            print("You do not have pliers. The cameras are still on")



#End Game=======================================================================
def end_game():
    print("You escaped")


def death():
    print("You died")
    restart()


def restart():
    restart_decision = input("Do you want to try and escape again?")
    if restart_decision == "yes":
        print("Sweet, you got it this time")
        print("\n")
        introduction1()
    if restart_decision == "no":
        print("Sore loser eh?")
        print("Well, see ya later")
        sys.exit()
    else:
        print(error_choice)


#Game Loop======================================================================
playing = True
while playing:
  introduction1()
  break
