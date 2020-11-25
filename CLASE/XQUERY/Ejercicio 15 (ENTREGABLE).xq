(:- Mostrar todos los años en los que se ha publicado un libro eliminando los repetidos (distinct-values):)

for $libros in distinct-values(//bookstore/book/year)

return
  <año>{$libros}</año>