# PHP设计模式 (Creational)
## PHP设计模式

在软件工程中，设计模式（Design Pattern）是对软件设计中普遍存在（反复出现）的各种问题，所提出的解决方案。这个术语是由埃里希·伽玛（Erich Gamma）等人在1990年代从建筑设计领域引入到计算机科学的。

设计模式并不直接用来完成代码的编写，而是描述在各种不同情况下，要怎么解决问题的一种方案。面向对象设计模式通常以类或对象来描述其中的关系和相互作用，但不涉及用来完成应用程序的特定类或对象。设计模式能使不稳定依赖于相对稳定、具体依赖于相对抽象，避免会引起麻烦的紧耦合，以增强软件设计面对并适应变化的能力。

并非所有的软件模式都是设计模式，设计模式特指软件“设计”层次上的问题。还有其它非设计模式的模式，如架构模式。同时，算法不能算是一种设计模式，因为算法主要是用来解决计算上的问题，而非设计上的问题。

### 常用设计模式大全
#### 创建型
在软件工程中，创建型设计模式用于处理对象的实例化：
* [抽象工厂模式（Abstract Factory）](https://github.com/IQcoder/DesignerPatterns/blob/master/Creational/AbstractFactory/README.md)
* [建造者模式（Builder）](https://github.com/IQcoder/DesignerPatterns/blob/master/Creational/Builder/README.md)
* [工厂方法模式（Factory Method）](https://github.com/IQcoder/DesignerPatterns/blob/master/Creational/FactoryMethod/README.md)
* [多例模式（Multiton）](https://github.com/IQcoder/DesignerPatterns/blob/master/Creational/Multiton/README.md)
* [对象池模式（Object Pool）](https://github.com/IQcoder/DesignerPatterns/blob/master/Creational/ObjectPool/README.md)
* [原型模式（Prototype）](https://github.com/IQcoder/DesignerPatterns/blob/master/Creational/Prototype/README.md)
* [简单工厂模式（Simple Factory）](https://github.com/IQcoder/DesignerPatterns/blob/master/Creational/SimpleFactory/README.md)
* [单例模式（Singleton）](https://github.com/IQcoder/DesignerPatterns/blob/master/Creational/Singleton/README.md)
* [静态工厂模式（Static Factory）](https://github.com/IQcoder/DesignerPatterns/blob/master/Creational/StaticFactory/README.md)

#### 结构型
结构型设计模式用于处理类和对象的组合：
* [适配器模式（Adapter）](https://github.com/IQcoder/DesignerPatterns/blob/master/Stuctural/Adapter/README.md)
* [桥梁模式（Bridge）](https://github.com/IQcoder/DesignerPatterns/blob/master/Stuctural/Bridge/README.md)
* [组合模式（Composite）](https://github.com/IQcoder/DesignerPatterns/blob/master/Stuctural/Composite/README.md)
* [数据映射模式（Data Mapper）](https://github.com/IQcoder/DesignerPatterns/blob/master/Stuctural/DataMapper/README.md)
* [装饰模式（Decorator）](https://github.com/IQcoder/DesignerPatterns/blob/master/Stuctural/Decorator/README.md)
* [依赖注入模式（Dependency Injection）](https://github.com/IQcoder/DesignerPatterns/blob/master/Stuctural/DependencyInjection/README.md)
* [门面模式（Facade）](https://github.com/IQcoder/DesignerPatterns/blob/master/Stuctural/Facade/README.md)
* [流接口模式（Fluent Interface）](https://github.com/IQcoder/DesignerPatterns/blob/master/Stuctural/FluentInterface/README.md)
* [代理模式（Proxy）](https://github.com/IQcoder/Creational/blob/master/Stuctural/Proxy/README.md)
* [注册模式（Registry）](https://github.com/IQcoder/DesignerPatterns/blob/master/Stuctural/Registry/README.md)
#### 行为型
行为型设计模式用于处理类的对象间通信：
* [责任链模式（Chain Of Responsibilities）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/ChainOfResponsibilities/README.md)
* [命令行模式（Command）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/Command/README.md)
* [迭代器模式（Iterator）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/Iterator/README.md)
* [中介者模式（Mediator）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/Mediator/README.md)
* [备忘录模式（Memento）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/Memento/README.md)
* [空对象模式（Null Object）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/NullObject/README.md)
* [观察者模式（Observer）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/Observer/README.md)
* [规格模式（Specification）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/Specification/README.md)
* [状态模式（State）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/State/README.md)
* [策略模式（Strategy）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/Strategy/README.md)
* [模板方法模式（Template Method）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/TemplateMethod/README.md)
* [访问者模式（Visitor）](https://github.com/IQcoder/DesignerPatterns/blob/master/Behavioral/Visitor/README.md)
#### 其它
* [委托模式（Delegation）](https://github.com/IQcoder/DesignerPatterns/blob/master/More/Delegation/README.md)
* [服务定位器模式（Service Locator）](https://github.com/IQcoder/DesignerPatterns/blob/master/More/ServiceLocator/README.md)
* [资源库模式（Repository）](https://github.com/IQcoder/DesignerPatterns/blob/master/More/Repository/README.md)

