# Dentro de la variable se almacenan todos los datos que se han pasado, en forma de lista
lista = ["coche", "moto", "camion"]
print("La lista es: ",lista)

#Calcula los elementos totales que se encuentran en la lista
print ("Número total de elementos: ", len(lista))

# Si entre corchetes se poner la posición de un elemento de la lista, únicamente saldrá
# por pantalla dicho elemento
print("Primer elemento de la lista",lista[0])
print("Segundo elemento de la lista",lista[1])
print("Tercer elemento de la lista",lista[2])

# Mediante el carácter sumativo + se pueden juntar varias listas
listaprincipal = ["coche", "moto", "camion"]
listasecundaria = ["barco", "avión", "cohete"]

listacombinada = listaprincipal + listasecundaria
print("El resultado de las listas combinadas: ",listacombinada)

# Mediante el operador sumativo, también se puede añadir, un elemento a una lista
lista = ["coche", "moto", "camion"]
print("Sin añadido extra: ",lista)
lista = lista + ["barco"]
print("Con añadido extra: ",lista)

# Si añadimos corchete en la variable y apuntamos al elemento de la lista, éste se
# podrá modificar
lista = ["coche", "moto", "camion"]
print("La lista sin editar es: ", lista)

lista[0] = "avión"
lista[1] = "barco"
lista[2] = "cohete"

print("El resultado de la lista editada es: ",lista)

# Mediante la función del, se pueden eliminar elementos de la lista
lista = ["coche", "moto", "camion"]
print("Lista sin eliminar elementos: ", lista)

del lista[1]
print("Lista con un elemento eliminado: ", lista)

# Se crea una lista dentro de la otra lista
lista = ["coche", "moto", "camion", ["avión", "barco", "cohete"]]
print(lista[0])
print(lista[1])
print(lista[2])
print(lista[3])
print(lista[3][0])
print(lista[3][1])
print(lista[3][2])