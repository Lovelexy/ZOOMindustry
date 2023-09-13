<?php
require_once 'controllers/ProductsController.php';
require_once 'controllers/OpportunityRecordController.php';

add_action('rest_api_init', function () {

    register_rest_route('api/v1', 'products/list', [
        'methods'   => 'GET',
        'callback'  =>  [new ProductsController(), 'list_by_category']
    ]);

    register_rest_route('api/v1', 'opportunity-record/create', [
        'methods'   => 'POST',
        'callback'  =>  [new OpportunityRecordController(), 'create']
    ]);
});
