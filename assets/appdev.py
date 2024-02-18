import hashlib
import string
import sys
import os
import time

# Initialize the alphabet list
alphabet = list(string.ascii_lowercase)


def encrypt_file(filename, password):
    # Initialize the ciphertext
    ciphertext = ""

    # Iterate through file contents
    with open(filename, "r") as file:
        file_contents = file.read()
        for char in file_contents:
            if char in alphabet:
                # Get the index of the character in the alphabet
                index = alphabet.index(char)

                # Generate the encrypted character
                ciphertext += alphabet[(index + int(password)) % 26]

            else:
                # Append the special character to ciphertext
                ciphertext += char

    # Write the ciphertext to a file
    with open(filename + ".crypt", "w") as file:
        file.write(ciphertext)
     
    # Delete original plaintext file   
    os.remove("myfile.txt")


def decrypt_file(filename, password):
    # Initialize the plaintext
    plaintext = ""

    # Iterate through file contents
    with open(filename, "r") as file:
        file_contents = file.read()
        for char in file_contents:
            if char in alphabet:
                # Get the index of the character in the alphabet
                index = alphabet.index(char)

                # Generate the decrypted character
                plaintext += alphabet[(index - int(password)) % 26]
            else:
                # Append the special character to plaintext
                plaintext += char

    # Remove the .crypt suffix from filename
    output_filename = os.path.splitext(filename)[0]

    # Write the plaintext to a file
    with open(output_filename, "w") as file:
        file.write(plaintext)
        
    # Delete original plaintext file   
    os.remove("myfile.txt.crypt")
    

print("\n\t Activity 3: File Encryption Utility")

# Generate a hash of the password
password_hash = hashlib.sha256(input("Enter key: ").encode()).hexdigest()

# Ask the user if they want to encrypt or decrypt
choice = input("1.Encrypt\n2.Decrypt\nEnter choice: ")

# Ask the user for the filename
filename = input("Filename: ")

# Ask the user for their password
password = input("Enter key: ")

# Verify the password
if hashlib.sha256(password.encode()).hexdigest() != password_hash:
    print("Incorrect key.")
    sys.exit()

# Encrypting
if choice == "1":
    # Initialize the progress indicator
    print("\n\tLoading Please Wait")
    sys.stdout.write("[")
    for i in range(35):
        sys.stdout.write("*")
        sys.stdout.flush()
        time.sleep(0.1)
    sys.stdout.write("]\n")

    # Encrypt the file
    encrypt_file(filename, password)
    print("Encryption complete. Saved to", filename + ".crypt")

# Decrypting
if choice == "2":
    # Initialize the progress indicator
    print("\n\tLoading Please Wait")
    sys.stdout.write("[")
    for i in range(35):
        sys.stdout.write("*")
        sys.stdout.flush()
        time.sleep(0.1)
    sys.stdout.write("]\n")

    # Decrypt the file
    decrypt_file(filename, password)
    print("Decryption complete. Saved to", os.path.splitext(filename)[0])
