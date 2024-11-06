<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{blog_title}</title>
</head>

<body>
    <!-- Loop Substitutions -->
    <!-- <h3>{blog_heading}</h3>
    <div class="container">

        {blog_entries}
        <h5>{title}</h5>
        <p>{body}</p>
        {/blog_entries}

    </div> -->

    <!-- Nested Substitutions -->
    <h1>{blog_heading}</h1>
    {blog_entries}
    <div>
        <h2>{title}</h2>
        <p>{body}</p>
    </div>
    {/blog_entries}

    {if $status}
    <p>welcome</p>
    {else}
    <p>not welcomne</p>
    {endif}
</body>

</html>