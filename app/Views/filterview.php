<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{title|lower}</title>
</head>

<body>
    <h3>{Name|upper}</h3>
    <h3>Mobile: {Mobile_No|hidenumbers}</h3>
    <h3>Mobile: {Mobile_No|hidenumbers(8)}</h3>
    <h3>Credit Card No: {Card_No|displayfournumbers}</h3>
    <h4>The Number of vowels present in your name: {Name},  contains {Name|countvowels}</h4>
</body>

</html>