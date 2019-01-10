<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>index</title>
</head>
<body>
<?php $i = 0;
?>
<div class="container">
    <div class="row">
        <form >
            <input class="form-control col-5" type="text" name="nome"/>
            <input type="submit" href="/search">
        </form>
        <div class="col-12">
            <h1>Publicações</h1>
            foreach($posts['results'] as $post)
                if(array_search($nome, $post))
                    <div class="card">
                        <div class="card-body">
                            <a href="/posts/{{$i += 1}}">



                            </a>
                        </div>
                    </div>
                    <br>
                endif
            endforeach

        </div>
    </div>
</div>
</body>
</html>
