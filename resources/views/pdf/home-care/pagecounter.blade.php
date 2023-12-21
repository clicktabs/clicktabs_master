<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS-485</title>
    <style>
            #footer {
      position: fixed;
      left: 20px;
      bottom: 0;
      text-align: center;
    }
    #footer .page:after {
      content: counter(page)
    }
    #footer .pageplus1:after {
        content: counter(page) " of " counter(pages);
    }
 
    </style>
</head>
<body>

    <div id="footer">
        <p class="page">Page </p>
        <section calss="page">title:       name: EMR        Number:</section></span>
    </div>
    <div class="page"></div>
</body>
</html>