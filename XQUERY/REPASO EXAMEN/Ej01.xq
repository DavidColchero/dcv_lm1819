(:Mostrar los títulos de los libros con la etiqueta "titulo":)

for $libro in //bookstore/book

return
  <titulo>{$libro/title/text()}</titulo>