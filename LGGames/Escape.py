inventory = ""
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


def instructions():
    print("Escaping is going to be a challege")
    print("Type 'inventory' to see what's in your backpack")
    print("Type 'pick up' and 'use' on objects")
    print("To navigate, type 'move foward, right,left, or back")
    print("Good luck")


def game():
  alive = True
  while alive:
    player_input = input("what are you going to do?")
    if player_input == "inventory":
      print(inventory)
      continue
    if player_input == "move forward":
      print("Nice")
      break


while True:
  introduction() 
  instructions()
  game()
  break
