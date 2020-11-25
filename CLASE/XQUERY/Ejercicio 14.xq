(:Mostrar el título y el número de caracteres que tiene cada título:)

for $libros in //bookstore/book
let $titulo:=string-length($libros/title)

return
  <libros>
    <titulo>
      <numCarac>{$titulo}</numCarac>
    </titulo>
  </libros>