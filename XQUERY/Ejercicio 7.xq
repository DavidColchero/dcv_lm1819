let $total:=count(//bookstore/book),
  $titulos:=(
    for $libro in //bookstore/book/title
    return <titulo>{$libro/text()}</titulo>
  )
return
  <resultado>
    {$titulos}
    <total>{$total}</total>
  </resultado>