<?php

/**
* Simple Ticket Inventory with Gravity Forms / Limit by Sum of Field Values
* http://gravitywiz.com/2012/05/19/simple-ticket-inventory-with-gravity-forms/
*/

$sum_form_id = 1;
$sum_field_id = 1.4;
$sum_limit = 1;
$sum_limit_message = 'Sorry, this show is sold out.';
$sum_validation_message = 'You ordered %1$s tickets. There are only %2$s tickets left.';

add_filter("gform_pre_render_$sum_form_id", 'gform_limit_by_field_values');
function gform_limit_by_field_values($form) {
    global $sum_field_id, $sum_limit, $sum_limit_message;
    
    $sum = gform_get_field_values_sum($form['id'], $sum_field_id);
    if($sum >= $sum_limit)
        add_filter('gform_get_form_filter', create_function('', 'return "' . $sum_limit_message . '";'));
    
    return $form;
}

add_filter("gform_validation_$sum_form_id", 'gform_limit_by_field_values_validation');
function gform_limit_by_field_values_validation($validation_result) {
    global $sum_field_id, $sum_limit, $sum_validation_message;
    
    $form = $validation_result['form'];
    $exceeded_limit = false;
    
    foreach($form['fields'] as &$field) {
        
        if($field['id'] != intval($sum_field_id))
            continue;
        
        $requested_value = rgpost("input_" . str_replace('.', '_', $sum_field_id));
        $field_sum = gform_get_field_values_sum($form['id'], $sum_field_id);
        
        if($field_sum + $requested_value <= $sum_limit)
            continue;
            
        $exceeded_limit = true;
        $number_left = $sum_limit - $field_sum >= 0 ? $sum_limit - $field_sum : 0;
        
        $field['failed_validation'] = true;
        $field['validation_message'] = sprintf($sum_validation_message, $requested_value, $number_left);
        
    }
    
    $validation_result['form'] = $form;
    $validation_result['is_valid'] = !$validation_result['is_valid'] ? false : !$exceeded_limit;
    
    return $validation_result;
}

function gform_get_field_values_sum($form_id, $field_id) {
    global $wpdb;
    $sql = $wpdb->prepare("SELECT sum(value) FROM {$wpdb->prefix}rg_lead_detail WHERE form_id = %d AND CAST(field_number as unsigned) = %d", $form_id, $field_id);
    return $wpdb->get_var($sql);
}