<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>

        <title>nachodoc</title>

        <!--
        <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css" />

        <script src="/assets/js/ion.rangeSlider.min.js"></script>
        -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/styles/default.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>

        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <style>
            .rightNav {
                margin-top:50px;
            }
        </style>
    </head>

    <body>
        <div class='container'>
            <div class='col-md-9'>
                <h1 class='page-header'>nacholibre personal doc</h1>
                <p>In this documentation I'll post things I constantly keep searching again and again in google without remembering them, so I've decided to save time and create one document containing all of them, called
                personal documentation.</p>

                <h1 class='page-header'>Symfony2</h1>
                <h2>Configuration</h2>
                Configuration varibles that rarely change (constants) should live in the entity itself according to the best practices page on the symfony documentation.
                <h3>Entity Example</h3>
                <pre><code class='php'><?= $codes['symfony'][0] ?></code></pre>
                Twig usage
                <pre><code class='twig'><?= htmlentities($codes['symfony'][1]) ?></code></pre>
                <h3>Config file example</h3>
                <pre><code class='yml'><?= $codes['symfony'][2] ?></code></pre>
                For using config variables in twig, they should be added as twig globals like so
                <pre><code class='yml'><?= $codes['symfony'][3] ?></code></pre>
                Twig usage:
                <pre><code class='twig'>{{ version }}</code></pre>
                <h1 class='page-header'>HTML</h1>
                Add style files
                <pre><code class='html'><?= htmlentities($codes['html'][0]) ?></code></pre>
                Add javascript files
                <pre><code class='html'><?= htmlentities($codes['html'][1]) ?></code></pre>
                Minimal HTML Page starter code
                <pre><code class='html'><?= htmlentities($codes['html'][2]) ?></code></pre>
            </div>
            <div class='col-md-3'>
                <div data-spy="affix" data-offset-top="0" data-offset-bottom="200" class='rightNav'>
                dsa
                </div>
            </div>
        </div>
    </body>
</html>
