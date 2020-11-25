let $precio_max:=max(//bookstore/book/price),
  $precio_min:=min(//bookstore/book/price)
return
  <libros>
    <precioMax>{$precio_max}</precioMax>
    <precioMin>{$precio_min}</precioMin>
  </libros>