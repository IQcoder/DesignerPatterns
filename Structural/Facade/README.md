# PHP 设计模式 —— 门面模式（Facade）
## 1、模式定义
门面模式（Facade）又称外观模式，用于为子系统中的一组接口提供一个一致的界面。门面模式定义了一个高层接口，这个接口使得子系统更加容易使用：引入门面角色之后，用户只需要直接与门面角色交互，用户与子系统之间的复杂关系由门面角色来实现，从而降低了系统的耦合度。
## 2、UML类图
![Facade-UML.png](/static/images/Facade-UML.png)
## 3、总结
门面模式对客户屏蔽子系统组件，因而减少了客户处理的对象的数目并使得子系统使用起来更加方便；实现了子系统与客户之间的松耦合关系，而子系统内部的功能组件往往是紧耦合的，松耦合关系使得子系统的组件变化不会影响到它的客户；如果应用需要，门面模式并不限制客户程序使用子系统类，因此你可以让客户程序在系统易用性和通用性之间加以选择。