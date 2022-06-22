Assignment Date - Tue June 21/22 - Wed June 22/22

                      ## SORTING OF ARRAY
Introduction:

        Sorting is a process by which we can arrange the elements of a list in a 
        specific order i.e. ascending or descending order. We can say sorting is the
        process of putting a list or a group of items in a specific order. Sorting may 
        be alphabetical or numerical.

        In PHP, sorting is a process of arranging the elements of an array in a specific
        order i.e. ascending or descending order. Using sorting you can analyze a list in
        a more effective way. You can sort an array by value, key or randomly. In most
        situations, we need to sort an array by value.


        Some sorting functions are as follows:

         * sort()
         * asort()
         * rsort()
         * arsort()
         * kshort()
         * ushort()
         Sorting in PHP

 
         sort() => sorts an array in ascending order.

         rsort() => sort arrays in descending order.

         asort() => sort associative arrays in ascending order, according to the value.

         ksort() => sort associative arrays in ascending order, according to the key.

         arsort() => sort associative arrays in descending order, according to the value.

         rsort() => sort associative arrays in descending order, according to the key.
Examples:

Example 1: Sort Integer Array in Ascending Order For instance, if you want to sort an integer array in ascending order, use the PHP sort Function.

<?php $array = array(5, 1, 2, 7, 3); sort($array); print_r($array); /* Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 5 [4] => 7 ) */ ?> Similarly, you can sort the array in descending order using PHP rsort Function.

Example 2: Sorting Associative Arrays However, to sort an associative array in PHP, use the asort Function to maintain the key-value relationship.

<?php $array = array('b' => 'banana', 'c' => 'cat', 'a' => 'apple'); asort($array); print_r($array); /* Array ( [a] => apple [b] => banana [c] => cat ) */ ?> Example 3: Passing Comparison Sort Function Also, you can pass a comparison function in PHP usort Function for sorting arrays in PHP.

<?php function compare($a, $b) { if ($a == $b) { return 0; } else if ($a > $b) { return 1; } else { return -1; } } $testArray = array(4, 2, 1, 5, 3); usort($testArray, 'compare'); ?> Example 4: Sorting Arrays in PHP by Keys Similarly, you can sort an Associative Array according to keys instead of values using the ksort Function in PHP.

<?php $testArray = array(1 => 5, 0 => 6, 4 => 3, 3 => 2, 2 => 1); ksort($testArray); print_r($testArray); /* Array ( [0] => 6 [1] => 5 [2] => 1 [3] => 2 [4] => 3 ) */ ?> Alternatively, you can use the krsort function to sort array in descending order according to keys.