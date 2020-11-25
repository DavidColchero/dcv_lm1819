(:Mostrar el título y el autor de los libros del año 2005, y etiquetar cada uno de ellos con "lib2005":)

for $libro in //bookstore/book
where $libro/year="2005"

return
  <libro>
    <titulo>{$libro/title/text()}</titulo>
    <autor>{$libro/author/text()}</autor>
  </libro>