for $libro in //bookstore/book[year=2005]
return <lib2005>
          <title>{$libro/title/text()}</title>
          <author>{$libro/author/text()}</author>
       </lib2005>