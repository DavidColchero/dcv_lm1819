(:Mostrar los libros escritos en años que terminen en 3:)

for $libros in //bookstore/book[ends-with(year, "3")]

return
  <libros>
    <titulo>{$libros/title/text()}</titulo>
  </libros>