# Con la función input, el usuario puede pasar sus datos a través de la terminal
# Siempre va precedido de una variable
print("Hola, cómo te llamas?")
nombre = input()
print("Encantado de conocerte " + nombre)

# Al input se le puede pasara directamente texto, para ahorrar código, siempre irá
# antes el texto que la entrada de datos del usuario
edad = input("Cuantos años tienes?  ")
print("Tienes " + edad + " años")