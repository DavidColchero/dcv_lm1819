(:Mostrar los libros cuya categoria empiece por "C" y que tenga una "p" mayus o minus en el titulo:)

for $libros in //bookstore/book
where starts-with($libros/@category, "C")
  and contains(lower-case($libros/title), "p")

return
  $libros