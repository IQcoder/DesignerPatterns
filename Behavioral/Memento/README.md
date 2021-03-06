# PHP 设计模式 —— 备忘录模式（Memento）

## 1、模式定义
备忘录模式又叫做快照模式（Snapshot）或 Token 模式，备忘录模式的用意是在不破坏封装性的前提下，捕获一个对象的内部状态，并在该对象之外保存这个状态，这样就可以在合适的时候将该对象恢复到原先保存的状态。

我们在编程的时候，经常需要保存对象的中间状态，当需要的时候，可以恢复到这个状态。比如，我们使用Eclipse进行编程时，假如编写失误（例如不小心误删除了几行代码），我们希望返回删除前的状态，便可以使用Ctrl+Z来进行返回。这时我们便可以使用备忘录模式来实现。

## 2、UML类图
![Memento-UML](/static/images/Memento-UML.png)

备忘录模式所涉及的角色有三个：备忘录(Memento)角色、发起人(Originator)角色、负责人(Caretaker)角色。

这三个角色的职责分别是：

发起人：记录当前时刻的内部状态，负责定义哪些属于备份范围的状态，负责创建和恢复备忘录数据。
备忘录：负责存储发起人对象的内部状态，在需要的时候提供发起人需要的内部状态。
管理角色：对备忘录进行管理，保存和提供备忘录。

## 3、总结
如果有需要提供回滚操作的需求，使用备忘录模式非常适合，比如数据库的事务操作，文本编辑器的 Ctrl+Z 恢复等。