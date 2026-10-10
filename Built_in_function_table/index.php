<?php

$functions = array(
    array("strlen()", "Counts characters"),
    array("str_word_count()", "Counts words"),
    array("str_contains()", "Checks if text exists"),
    array("strpos()", "Finds position of text"),
    array("strtoupper()", "Converts to uppercase"),
    array("strtolower()", "Converts to lowercase"),
    array("str_replace()", "Replaces text"),
    array("strrev()", "Reverses text"),
    array("trim()", "Removes extra spaces"),
    array("explode()", "String → Array"),
    array("implode()", "Array → String"),
    array("substr()", "Gets part of string"),
    array("is_int()", "Checks integer"),
    array("is_float()", "Checks float"),
    array("is_nan()", "Checks Not-a-Number"),
    array("is_numeric()", "Checks numeric value"),
    array("round()", "Rounds a number"),
    array("define()", "Creates constant"),
    array("date()", "Shows date/time"),
    array("strtotime()", "Converts date to timestamp"),
    array("time()", "Gets current timestamp"),
    array("date_default_timezone_set()", "Sets timezone"),
    array("date_default_timezone_get()", "Gets timezone"),
    array("include()", "Includes another PHP file"),
    array("require()", "Requires another PHP file"),
    array("json_encode()", "PHP → JSON"),
    array("json_decode()", "JSON → PHP"),
    array("array()", "Creates array"),
    array("array_keys()", "Gets array keys"),
    array("array_merge()", "Joins arrays"),
    array("array_push()", "Adds item to array"),
    array("array_reverse()", "Reverses array"),
    array("sizeof()", "Counts array elements"),
    array("count()", "Counts array elements"),
    array("sort()", "Sorts array")
);

?>

<table border="1" cellpadding="8">

    <tr>
        <th>No.</th>
        <th>Function</th>
        <th>Simple Meaning</th>
    </tr>

<?php

$i = 1;

foreach($functions as $function)
{
?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $function[0]; ?></td>
        <td><?php echo $function[1]; ?></td>
    </tr>

<?php

    $i++;
}

?>

</table>