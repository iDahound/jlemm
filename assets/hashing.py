#Ask the user to input a string
input_txt = input("Enter a string: ")

#Define the hash function and take the input_txt as its argument
def hash_txt(input_txt):
    
    #Declare a string containing the 16 hexadecimal characters
    hex_chars = "0123456789abcdef"

    #Declare an empty string where we can store the hashed text later
    hashed_text = ""

    #Create a loop that will run 16 times
    for i in range(len(hex_chars)):

        #Get the ASCII code of the character
        char_code = ord(input_txt[i % len(input_txt)])
        
        #Increment the value of char_code
        char_code += (i+1) * (i+1)
        
        #Take the modulo of the sum with the number of hex characters
        index = char_code % 16
        
        #Add the corresponding hex character to the hashed text
        hashed_text += hex_chars[index]
    return hashed_text

#concatenate a random string "salt" to the hashed_text
salted_text = hash_txt(input_txt + "salt")
print("Hashed text:", salted_text)

