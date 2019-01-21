let $precios:=//bookstore/book/price, $sumaprecios:=sum($precios)
return
  <listaPrecios>
    {$precios}
    <precioTotal>{$sumaprecios}</precioTotal>
  </listaPrecios>