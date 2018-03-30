<?php
//Check if model is soft delete
function isSoftDelete($modelClass){
    return in_array('SoftDeletingTrait', class_uses($modelClass));
}
