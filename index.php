<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simpleTest</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- bootstrap -->
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- bootstrap -->

    <!-- uso do CSS -->
    <style>
        h1 {
            color: yellow;
            text-shadow:1px 1px 1px #000;
        }

        b {
            color: green;
        }

        p {
            color: blue;
        }

        div {
            color: red;
        }

        i {
            color: pink;
            display:block;
            font-size:2em;
        }

        a {
            color: gray;
        }

        .centro {
            text-align: center;
        }
    </style>

</head>

<body>

    <div class="centro">

        <h1>simpleTest</h1>
        <b>b = bold</b>
        <br>br= break row.
        <p>p = paragraph </p>
        <div>div </div>
        <i>i = italic </i>
        <a href="#">a = anchor (link tag) </a>

        <div id="javascript"></div>

    </div>



<script>
(function(){
    $('#javascript').text('javascript text!');
})();
</script>


</body>

</html>