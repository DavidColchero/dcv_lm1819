for $libros in //bookstore/book
let $cuantos:=count(//$libros/author)
return
<libro>
  <titulo>{$libros/title/text()}</titulo>
  <num_aut>{$cuantos}</num_aut>
</libro>