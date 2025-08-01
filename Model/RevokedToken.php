<?php
App::uses('AppModel', 'Model');

class RevokedToken extends AppModel {
    public $useTable = 'revoked_tokens';
}
