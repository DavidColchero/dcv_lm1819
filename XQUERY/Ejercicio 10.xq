for $libro in //bookstore/book
let $precio:=//bookstore/price
return
<libros>
  <titulo>{$libro/title/text()}</titulo>
  <precio>{$precio}</precio>
</libros>