(:- Mostrar los títulos en una tabla html:)

for $libros in //bookstore/book
let $titulo:=$libros/title/text()

return
  <html>
    <head>
    </head>
    <body>
      <table>
        <tr>
          <td>{$titulo}</td>
        </tr>
      </table>  
    </body>
  </html>