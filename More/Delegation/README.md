# PHP 设计模式 —— 委托模式（ Delegation）

## 1、模式定义
委托是对一个类的功能进行扩展和复用的方法。它的做法是：写一个附加的类提供附加的功能，并使用原来的类的实例提供原有的功能。

假设我们有一个 TeamLead 类，将其既定任务委托给一个关联辅助对象 JuniorDeveloper 来完成：本来 TeamLead 处理 writeCode 方法，Usage 调用 TeamLead 的该方法，但现在 TeamLead 将 writeCode 的实现委托给 JuniorDeveloper 的 writeBadCode 来实现，但 Usage 并没有感知在执行 writeBadCode 方法。

## 2、UML类图
![Delegation-UML.png](/static/images/Delegation-UML.png)