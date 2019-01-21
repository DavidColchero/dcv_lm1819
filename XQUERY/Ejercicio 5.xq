for $libro in //bookstore/book
order by $libro/@category, $libro/title
return <title>{$libro/title/text()}</title>