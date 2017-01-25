# MySQL

## 常见问题

### 表结构

```sql
desc TABLE;

show full columns from TABLE;

show create table TABLE;
```

### 查找表

```sql
show tables;

select TABLE_NAME from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA='DB_NAME' AND TABLE_NAME like 'TABLE_%';
```

### 表状态

```sql
show table status from DB_NAME where name = 'TABLE'\G;

select * from information_schema.tables where table_schema='DB_NAME' AND table_name='TABLE'\G;
```

## TODO

- 分布式ID生成方法。

## 参考文献

- [mysql怎么查看表结构修改的时间](http://www.itpub.net/thread-1823722-1-1.html)
- 

