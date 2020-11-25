(:Mostrar los libros cuyo precio sea menor o igual a 30. Primero incluyendo la condición en la cláusula "where" y luego en la ruta del XPath.:)

for $libro in //bookstore/book
where $libro/price<="30.00"

return $libro