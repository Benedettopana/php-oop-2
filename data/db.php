<?php

$db = [
  new Product('Croccantini per cuccioli taglia s', 4.99, true),
  new Categories('Croccantini per cuccioli taglia L', 7.99, true, 'Cibo', 'Mongi', new Type('Cane')),
  new Categories('Croccantini per cuccioli taglia m', 5.99, true, 'Cibo', 'Mongi', new Type('Cane')),
  new Categories('Croccantini per cuccioli taglia L', 5.99, true, 'Cibo', 'Mongi', new Type('Gatto')),
  new Categories('Croccantini per cuccioli taglia m', 4.99, false, 'Cibo', 'Mongi', new Type('Gatto')),
  new Categories('Croccantini per cuccioli taglia s', 3.99, true, 'Cibo', 'Mongi', new Type('Gatto')),
  new Categories('Osso giocattolo in gomma', 10.99, true, 'Gioco', 'trixi', new Type('Cane')),
  new Categories('Peluche Scoiattolo', 5.09, false, 'Gioco', 'KONG', new Type('Cane')),
  new Categories('Palla in gomma', 8.99, true, 'Gioco', 'ANIONE', new Type('Cane')),
  new Categories('Anione Pettorina Classic Verde', 16.99, true, 'Guinzagliera', 'ANIONE', new Type('Cane')),
  new Categories('Palla con Corda', 7.99, true, 'Gioco', 'FIT AND FUN', new Type('Cane')),
  new Categories('Tiragraffi Ottawa', 7.99, true, 'Gioco', 'LOVEDI', new Type('Gatto')),
  new Categories('Pettorina Reflective Nylon Rosso', 14.99, true, 'Guinzagliera', 'PET AROUND YOU', new Type('Cane')),
  new Categories('Cuccia Rettangolare Calliope Arancio', 17.89, true, 'Lettiere/Cuccie', 'LOVEDI', new Type('Cane')),
  new Categories('Trasportino Sierra in Plastica Eco', 7.49, true, 'Lettiere/Cuccie', 'YES', new Type('Gatto')),
];

?>