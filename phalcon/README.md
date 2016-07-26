# Phalcon

## 数据库

### 直接使用 PDO

```php
$db = new \Phalcon\Db\Adapter\Pdo\Mysql([
   "host" => "192.168.0.11",
   "dbname" => "blog",
   "port" => 3306,
   "username" => "root",
   "password" => "password"
]);

$db->fetchOne($sql, $fetchMode, $bindParams);
$db->fetchAll($sql, $fetchMode, $bindParams);
```

## PHQL

## ORM


## 资源

- [incubator](https://github.com/phalcon/incubator)
- [awesome-phalcon](https://github.com/sergeyklay/awesome-phalcon)
- [base-app](https://github.com/mruz/base-app)
- [forum](https://github.com/phalcon/forum)
- [EvaEngine](https://github.com/EvaEngine)