<?php

class decksController extends BaseController {

    public static function index() {
        View::make('decks.html');
    }
}
