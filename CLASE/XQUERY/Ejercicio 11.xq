(:Mostrar en la misma etiqueta el titulo, y entre parentesis el numero de autores que tiene.:)

for $libros in //bookstore/book
let $titulos:=$libros/title/text(), $autores:=count($libros/author)

return
  <libro>{$titulos} ({$autores})</libro>