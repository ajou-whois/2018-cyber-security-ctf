#!/usr/bin/python
# I love python 2.7 Don't go away~ T_T
import random

def main():
    random_number = random.randint(1,100)
    print("Give me the formula that below number is made")
    print("{0}".format(random_number))
    formula = input()
    if formula == random_number:
        print("Wow you made it!")
    else:
        print("You need practice more at math")
    return

if __name__ == '__main__':
    main()
