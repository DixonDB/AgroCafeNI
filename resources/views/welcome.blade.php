<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/uikit.css">
        <script type="text/javascript" src="/js/uikit.js"></script>
        <title>Comunidad Turistica</title>
    </head>
    <body>
        <div class="uk-position-relative">
    <img src="images/light.jpg" alt="">
    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li><a href="#">Item</a></li>
                    <li>
                        <a href="#">Parent</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
    </body>
    <footer>
        <!-- This is a button toggling the modal -->
<button class="uk-button uk-button-primary uk-margin-small-right" type="button" uk-toggle="target: #modal-example">Open</button>

<!-- This is an anchor toggling the modal -->
<a href="#modal-example" uk-toggle>Open</a>

<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-danger uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </p>
    </div>
</div>
    </footer>
</html>
