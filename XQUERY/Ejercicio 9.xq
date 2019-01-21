for $titulo in //bookstore/book/title
let $autor:=(
  for $libros in //bookstore/book/title
  let $num_author:=count(//bookstore/book/author)
  return $num_author
)
return
  <libros>
    <titulo>{$titulo/text()}</titulo>
    <num_autores>{$autor}</num_autores>
  </libros>