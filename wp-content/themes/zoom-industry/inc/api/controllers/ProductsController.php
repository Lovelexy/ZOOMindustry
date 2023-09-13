<?php


class ProductsController
{
    public function list_by_category(WP_REST_Request $request)
    {
        try {
            $params = $request->get_query_params();
            $cat_id = $params['cat_id'] ?? '';

            $query = new WP_Query( array( 
                'post_type' => 'page',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'produto_cat',
                        'field' => 'term_id',
                        'terms' => $cat_id
                    )
                )
            ));

            $response = $query->posts;
            
            return $response;

        } catch (Exception $ex) {
            return    wp_send_json([
                'success' => false,
                'message' => $ex->getMessage(),
            ], $ex->getCode() ?? 400);
        }
    }
}
