<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'membership_form';
 
// Table's primary key
$primaryKey = 'm_id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array( 'db' => 'm_id', 'dt' => 'm_id' ),
    array( 'db' => 'dob', 'dt' => 'dob',
    'formatter' => function( $d, $row ) {
        return date( 'jS M y', strtotime($d));
    }
    )
    // array( 'db' => 'is_married',  'dt' => 'is_married' ),
    // array( 'db' => 'anniversary_date',   'dt' => 'anniversary_date' ),
    // array( 'db' => 'membership_type',     'dt' => 'membership_type' ),
    // array(
    //     'db'        => 'expiry_date',
    //     'dt'        => 'expiry_date',
    //     'formatter' => function( $d, $row ) {
    //         return date( 'jS M y', strtotime($d));
    //     }
    // ),
    // array(
    //     'db'        => 'fees',
    //     'dt'        => 'fees',
    //     'formatter' => function( $d, $row ) {
    //         return '$'.number_format($d);
    //     }
    // ),
    // array('db'=>'amount_paid','dt'=>'amount_paid',
    //         'formatter' => function( $d, $row ) {
    //           return '$'.number_format($d);
    //     }
    // ),
    // array('db'=>'amount_payable','dt'=>'amount_payable',
    // 'formatter' => function( $d, $row ) {
    //     return '$'.number_format($d);
    // }
    // ),
    // array( 'db' => 'mode', 'dt' => 'mode' ),
    // array( 'db' => 'des', 'dt' => 'des' ),
    // array(
    //     'db'        => 'created_at',
    //     'dt'        => 'created_at',
    //     'formatter' => function( $d, $row ) {
    //         return date( 'jS M y', strtotime($d));
    //     }
    // ),
    // array(
    //     'db'        => 'updated_at',
    //     'dt'        => 'updated_at',
    //     'formatter' => function( $d, $row ) {
    //         return date( 'jS M y', strtotime($d));
    //     }
    // )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'gym_db',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
// require( 'ssp.class.php' );
 
// echo json_encode(
//     SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
// );
?>