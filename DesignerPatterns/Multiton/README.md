# PHP 设计模式 —— 多例模式（Multiton）
## 1、模式定义
多例模式和单例模式类似，但可以返回多个实例。比如我们有多个数据库连接，MySQL、SQLite、Postgres，又或者我们有多个日志记录器，分别用于记录调试信息和错误信息，这些都可以使用多例模式实现。

## 2、UML类图
![Multiton-UML.png](/static/images/Multiton-UML.png)