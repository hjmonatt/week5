<?php

//328/week5/model/data-layer.php

//Define function to "get" data from somewhere

/**Returns an array of fruit
 * @return array
 */
//Get fruits
function getFruit()
{
    //connect to db...

    //read fruit...

    //process...


    $fruits = array('apple', 'banana', 'orange', 'kiwi', 'rambutan');
    return $fruits;
}

/* Returns an associative array of names and salaries
 *@return array
 */
function getSalary()
{
    $salaries = array('Jessica'=>200000, 'Heather'=>250000, 'Blezyl'=>300000);
    return $salaries;
}

function getDesserts()
{
    $desserts = array('Chocolate'=>'Chocolate Mousse', 'Vanilla'=>'Vanilla Custard', 'Strawberry'=>'Strawberry Shortcake');
    return $desserts;
}

