# Crud-Redbean
Examples of crud operation with classes using redbean ORM 
#### Step 1 : Include the class file 
```php 
require_once 'class.php'; 
```
#### Step 2 : Create object of class [Operations](https://github.com/mdsaad13/Crud-Redbean/blob/a07d6135f698d8c236597420e13d40ce5b8e9aef/controllers/class.php#L17) 
```php 
$object = new Operations; 
```
#### All detailed examples are in`examples branch`
# Some basic operations
- [insert](https://github.com/mdsaad13/Crud-Redbean/blob/a07d6135f698d8c236597420e13d40ce5b8e9aef/controllers/class.php#L30) operation  
```php 
$object->insert(string 'table_name', array $array_of_fields_to_insert);
```

- [update](https://github.com/mdsaad13/Crud-Redbean/blob/a07d6135f698d8c236597420e13d40ce5b8e9aef/controllers/class.php#L49) operations
```php 
$object->update(string 'tablename', array $array_containing_fields, int $id);
```

- [delete](https://github.com/mdsaad13/Crud-Redbean/blob/a07d6135f698d8c236597420e13d40ce5b8e9aef/controllers/class.php#L67) operations
```php 
$object->delete(string 'tablename', int $id);
```

- [select](https://github.com/mdsaad13/Crud-Redbean/blob/a07d6135f698d8c236597420e13d40ce5b8e9aef/controllers/class.php#L81) operations
```php 
$object->SelectByID(string 'tablename', int $id);
```
#### Refer [controllers/class.php](https://github.com/mdsaad13/Crud-Redbean/blob/a07d6135f698d8c236597420e13d40ce5b8e9aef/controllers/class.php) for more operations
